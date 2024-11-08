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
        // Controleer of de gebruiker is ingelogd en een admin is
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request); // Laat het verzoek doorgaan als de gebruiker een admin is
        }

        // Als de gebruiker geen admin is, stuur ze dan door naar de homepagina met een foutmelding
        return redirect('/')->withErrors('Je hebt geen toegang tot deze pagina.');
    }
}
