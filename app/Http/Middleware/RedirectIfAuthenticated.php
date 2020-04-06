<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        if ($guard == "bidder" && Auth::guard($guard)->check()) {
            return redirect('/bidder');
        }
        if ($guard == "coach" && Auth::guard($guard)->check()) {
            return redirect('/coach');
        }        
        if ($guard == "physio" && Auth::guard($guard)->check()) {
            return redirect('/physio');
        }
        if ($guard == "player" && Auth::guard($guard)->check()) {
            return redirect('/player');
        }        
        if ($guard == "subscriber" && Auth::guard($guard)->check()) {
            return redirect('/subscriber');
        }
        if ($guard == "trinee" && Auth::guard($guard)->check()) {
            return redirect('/trinee');
        }

        if (Auth::guard($guard)->check()) {
            return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    }
}
