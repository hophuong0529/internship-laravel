<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkUserLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (session('username')) {
            return $next($request);
        } else {
            return redirect()->route('login');
        }
    }
}
