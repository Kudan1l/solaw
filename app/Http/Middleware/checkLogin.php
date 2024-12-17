<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class checkLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // Pastikan pengguna sudah login
        if (!Auth::check()) {
            return redirect('/')->with('error', 'You must be logged in to access this page.');
        }

        // Periksa apakah pengguna memiliki peran yang sesuai
        $user = Auth::user();
        if ($user->role !== $role) {
            return redirect('/')->with('error', 'You do not have access to this page.');
        }
        

        return $next($request); // Lanjutkan request jika peran sudah sesuai
    }
}
