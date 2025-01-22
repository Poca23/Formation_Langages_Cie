<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CustomAuth
{
    public function handle(Request $request, Closure $next)
    {
        // Vérification si l'utilisateur est authentifié
        if (!$request->session()->has('authenticated') || !$request->session()->get('authenticated')) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
