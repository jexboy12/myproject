<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Periksa apakah pengguna sudah login DAN perannya adalah 'admin'
        if (auth()->check() && auth()->user()->role == 'admin') {
            // Jika ya, izinkan akses ke halaman berikutnya
            return $next($request);
        }

        // Jika tidak, tolak akses dan tampilkan halaman error 403 (Forbidden)
        abort(403, 'ANDA TIDAK MEMILIKI AKSES.');
    }
}