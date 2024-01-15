<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Role;
use Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles): RedirectResponse
    {
        if (Auth::check() && Auth::user()->roles->contains('slug', 'admin')) {
            return $next($request);
        }

        return redirect('/login');
    }
}
