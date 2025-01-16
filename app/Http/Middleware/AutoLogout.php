<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AutoLogout
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (auth()->check() && now()->diffInSeconds(session('last_active', now())) > 30) {
            auth()->logout();
            return redirect('/login')->with('message', 'You have been logged out due to inactivity.');
        }

        session(['last_active' => now()]);
        return $next($request);
    }
}
