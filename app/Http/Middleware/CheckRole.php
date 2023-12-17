<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse; // Import RedirectResponse class

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
            }
        }

        return redirect('/');
    }

    protected function userHasAdminRole($role): bool
    {
        return $role && $role->slug === "admin";
    }
}
