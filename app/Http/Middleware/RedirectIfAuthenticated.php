<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $userRoles = auth()->user()->getRoleNames(); // Retrieve the names of the roles
                if ($userRoles->contains('user')) {
                    return redirect(RouteServiceProvider::HOMEUser);
                } elseif ($userRoles->contains('admin')) {
                    return redirect(RouteServiceProvider::HOMEAdmin);
                } elseif ($userRoles->contains('super-admin')) {
                    return redirect(RouteServiceProvider::HOMESuperAdmin);
                } elseif ($userRoles->contains('customer')) {
                    return redirect(RouteServiceProvider::HOME);
                }
                
            }
        }

        return $next($request);
    }
}
