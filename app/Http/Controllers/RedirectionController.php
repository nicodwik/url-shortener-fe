<?php

namespace App\Http\Controllers;

use App\Helpers\HttpClientHelper;
use Exception;
use Illuminate\Http\Request;

class RedirectionController extends Controller
{
    public function __invoke(string $shortUrl)
    {
        try {
           $resp = HttpClientHelper::init()
                ->setAction('get')
                ->run('/api/v1/redirection/'. $shortUrl);

            if (empty($resp?->data)) {
                abort(404);
            }

            return redirect()->to($resp?->data?->long_url);
        } catch (Exception $e) {
            abort(404);
        }
    }
}
