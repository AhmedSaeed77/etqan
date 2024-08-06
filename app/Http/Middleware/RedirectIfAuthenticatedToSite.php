<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticatedToSite
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // Redirect authenticated users to home if they try to access login or register pages
        if (!Auth::guard($guard)->check()) {
            return redirect()->route('getlogin'); // Adjust this to your authenticated home route name
        }

        // Proceed with the request if the user is not authenticated
        return $next($request);
    }
}
