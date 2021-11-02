<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
class EnsureProfileIsFilled
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

        if ($request->user()->hasRole("user")) {

            if ($request->user()->isNotFilled() === true) {
                return redirect()->route('home')->withErrors('You cannot proceed to apply for any course until you have completed your profile'); 
            }

        }
        

        return $next($request);
    }
}
