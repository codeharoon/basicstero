<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SecureAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next,$role)
    {
        // dd($role);
        return $next($request);
    }
}
