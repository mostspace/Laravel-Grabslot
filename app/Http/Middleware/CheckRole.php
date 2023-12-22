<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Role;
use Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next): RedirectResponse
    {
        if (Auth::check()) {
            $user = Auth::user();
            $role = Role::where('user_id', $user->id)->first();

            if ($this->userHasAdminRole($role)) {
                return $next($request);
            } else {
                // Redirect non-admin users to the home page with an error message
                return redirect('/')->with('error', 'You do not have the required permissions.');
            }
        }

        // Redirect unauthenticated users to the login page
        return redirect('/login');
    }

    protected function userHasAdminRole($role): bool
    {
        return $role && $role->slug === "admin";
    }
}
