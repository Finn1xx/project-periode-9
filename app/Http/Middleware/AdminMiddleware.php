<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Controleer of de gebruiker is ingelogd en admin is
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request); // Laat de aanvraag doorgaan
        }

        // Anders, redirect naar de homepagina of toon een fout
        return redirect('/')->with('error', 'Toegang geweigerd. Alleen beheerders kunnen deze pagina bekijken.');
    }
}
