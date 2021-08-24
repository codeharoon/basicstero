<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        
        if(in_array($role,Auth::user()->role()->pluck('name')->toArray())){
            return $next($request);
        }
        else{
           return redirect()->route('home');
        }
        
    }
}
