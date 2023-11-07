<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // Periksa level pengguna di sini
        if (auth()->check() && auth()->user()->level == 'user') {
            return $next($request);
        }

        // Redirect atau berikan respons sesuai kebutuhan
        return redirect('/')->with('error', 'Permission denied.');

        // Atau Anda bisa melempar exception seperti berikut:
        // abort(403, 'Permission denied.');
    }
}
