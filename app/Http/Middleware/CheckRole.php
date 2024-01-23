<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles): mixed
    {
        if (Auth::check() && Auth::user()->roles->contains('slug', 'admin')) {
            return $next($request);
        }

        // If not authenticated or does not have the 'admin' role, redirect to login
        return redirect('/login');
    }
}
