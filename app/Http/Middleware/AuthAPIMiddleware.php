<?php

namespace App\Http\Middleware;

use App\Helpers\AuthAPIHelper;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class AuthAPIMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = AuthAPIHelper::user();

        if (empty($user)) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
