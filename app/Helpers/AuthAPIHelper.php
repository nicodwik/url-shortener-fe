<?php

namespace App\Helpers;

use DateTimeImmutable;
use Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;
use Lcobucci\Clock\FrozenClock;
use Lcobucci\JWT\Encoding\JoseEncoder;
use Lcobucci\JWT\JwtFacade;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\Signer\Key\InMemory;
use Lcobucci\JWT\Token\Parser;
use Lcobucci\JWT\UnencryptedToken;
use Lcobucci\JWT\Validation\Constraint\SignedWith;
use Lcobucci\JWT\Validation\Constraint\StrictValidAt;
use Psr\Clock\ClockInterface;

class AuthAPIHelper 
{
    protected $user;

    public static function login(array $credentials): ?string
    {
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

        return $accessToken;
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
}