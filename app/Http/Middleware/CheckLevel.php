<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;  // Menggunakan Illuminate\Http\Response, bukan Symfony\Component\HttpFoundation\Response

class CheckLevel
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string ...$levels
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$levels)
    {
        // Check if the user is authenticated
        if ($request->user() && in_array($request->user()->level, $levels)) {
            return $next($request);
        }

        // Redirect to some unauthorized page or handle it in a different way.
        // For now, let's redirect to the home page.
        return redirect('/')->with('error', 'Unauthorized access!');
    }
}
