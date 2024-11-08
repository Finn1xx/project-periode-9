<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;  // Zorg ervoor dat je Auth gebruikt
use App\Models\User;  // Zorg ervoor dat je het User model gebruikt

class UserController extends Controller
{
    // Methode om de rol van de ingelogde gebruiker te controleren
    public function checkUserRole()
    {
        if (Auth::check()) {
            // Als de gebruiker ingelogd is, geef dan de rol terug
            return response()->json(Auth::user()->role);
        }

        // Als de gebruiker niet ingelogd is, geef 'guest' terug
        return response()->json('guest');
    }

    // Als de gebruiker een admin is, stuur ze naar de admin dashboard
    public function adminDashboard()
    {
        // Controleer of de gebruiker ingelogd is en de rol 'admin' heeft
        if (Auth::check() && Auth::user()->role == 'admin') {
            return view('admin.dashboard'); // Je kunt dit aanpassen naar je eigen dashboard-view
        }

        // Als de gebruiker geen admin is, stuur ze terug naar de homepagina of een andere route
        return redirect()->route('home');
    }

    // Als de gebruiker een gewone gebruiker is, stuur ze naar de registratiepagina
    public function userRegisterRedirect()
    {
        if (Auth::check() && Auth::user()->role == 'user') {
            return redirect()->route('register');
        }

        // Als de gebruiker geen 'user' is, stuur ze naar de homepagina
        return redirect()->route('home');
    }
}
