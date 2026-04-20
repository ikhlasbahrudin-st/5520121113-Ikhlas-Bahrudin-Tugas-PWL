<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role): Response
    {
        /** @var Authenticatable|null $user */
        $user = Auth::user();

        // ✅ cek login
        if (!$user) {
            return redirect('/login');
        }

        // ✅ cek role
        if ($user->role !== $role) {
            abort(403, 'Akses ditolak');
        }

        return $next($request);
    }
}
