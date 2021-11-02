<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class mustBeSuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->user()->hasRole("super-admin")) {
            return redirect()->route('home')->withErrors('You dont have access to visit this page'); 
        }
        return $next($request);
    }
}
