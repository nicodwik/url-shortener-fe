<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;

class HttpClientHelper
{
    protected string $baseUrl;

    protected string $action;

    protected array $headers;

    public static function init()
    {
        $http = new static;
        $http->baseUrl = config('general.api.base_url');

        return $http;
    }

    public function withAuth(string $token = null)
    {
        $accessToken = $token ?? Cookie::get('access_token');

        // dd($accessToken);

        if (empty($accessToken)) {
            return redirect()->route('guest.login');
        }

        // dd($accessToken);

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

        $http = Http::asForm();

        if (! empty($this->headers)) {
            $http = $http->withHeaders($this->headers);
        }

        switch ($this->action) {
            case 'post':
                $resp = $http->post($baseUrl.$url, $data);
                break;

            case 'get':
                $resp = $http->get($baseUrl.$url, $data);
                break;
        }

        // dump($resp->object());

        if ($resp->unauthorized()) {
            return redirect()->route('guest.login');
        }

        return $resp->object();
    }
}