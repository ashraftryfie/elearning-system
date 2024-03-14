<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class SanctumAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $guards = 'api')
    {
        if (auth()->guard($guards)->guest()) {

            return response()->json(['authenticated' => false, 'message' => 'You are not authenticated'], 401);
        }
        return $next($request);
    }
}
