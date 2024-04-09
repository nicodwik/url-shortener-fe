<?php

namespace App\Helpers;

use Exception;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;
use stdClass;

class AuthAPIHelper 
{
    protected $user;

    public static function login(array $credentials): ?stdClass
    {
        if ( 
            empty($credentials['email']) || 
            empty($credentials['password'])
            ) {
                
            return null;
        }
        
        $resp = Http::asForm()
            ->post( config('general.api.base_url') .'/api/v1/login', [
                'email' => $credentials['email'],
                'password' => $credentials['password'],
            ]);

        if ($resp->clientError()) {
            return null;
        }

        $data = $resp->object();
        $accessToken = $data?->data?->access_token;

        Cookie::queue(Cookie::make('access_token', $accessToken));

        return $data;
    }

    public static function register(array $credentials): ?stdClass
    {
        if ( 
            empty($credentials['email']) || 
            empty($credentials['name']) || 
            empty($credentials['password'])
            ) {

            return null;
        }

        $data = [
            'email' => $credentials['email'],
            'name' => $credentials['name'],
            'password' => $credentials['password'],
        ];

        $resp = HttpClientHelper::init()
            ->setAction('post')
            ->run('/api/v1/register', $data);
        
        if (! $resp->status == 'success') {
            return null;
        }

        return $resp;
    }

    public static function logout()
    {
        Cookie::queue(Cookie::forget('access_token'));
        
        return;
    }

    public static function user()
    {
        try {
            // $accessToken = Cookie::get('access_token');

            // $parser = new Parser(new JoseEncoder());

            // $claims = $parser->parse($accessToken);
            // if ($claims->isExpired(now())) {
            //     return null;
            // }

            // $userId = $claims->claims()
            //     ->get('id');

            $resp = HttpClientHelper::init()
                ->withAuth()
                ->setAction('get')
                ->run('/api/v1/user');

            return $resp?->data;
            
        } catch (Exception $e) {
            return null;
        }
       
    }

    public static function isLoggedIn(): bool
    {
        $accessToken = Cookie::get('access_token');

        return ! empty($accessToken);
    }
}