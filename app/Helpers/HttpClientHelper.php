<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;

class HttpClientHelper extends Http
{
    protected string $baseUrl;

    protected string $action;

    protected array $headers;

    // public function __construct()
    // {
    //     parent::__construct();
    // }

    public static function init()
    {
        $http = new static;
        $http->baseUrl = config('general.api.base_url');

        return $http;
    }

    public function withAuth()
    {
        $accessToken = Cookie::get('access_token');

        if (empty($accessToken)) {
            return redirect()->route('login');
        }

        $headers = [
            'Authorization' => 'bearer '. $accessToken
        ];

        $this->headers = $headers;

        return $this;
    }

    public function setAction(string $action)
    {
        $this->action = $action;

        return $this;
    }

    public function run(string $url, array $data = [])
    {
        $baseUrl = $this->baseUrl;

        $http = new Http;

        if (! empty($this->headers)) {
            $http = $http::withHeaders($this->headers);
        }

        switch ($this->action) {
            case 'post':
                $resp = $http->post($baseUrl.$url, $data);
                break;

            case 'get':
                $resp = $http->get($baseUrl.$url, $data);
                break;
        }

        if ($resp->unauthorized()) {
            return redirect()->route('login');
        }

        return $resp->object();
    }
}