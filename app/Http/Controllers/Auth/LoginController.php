<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home'; // Default redirect, maar we passen dit aan in de 'authenticated' methode

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        // Als de gebruiker een admin is, stuur ze naar een admin-dashboard
        if ($user->role == 'admin') {
            return redirect()->route('admin.dashboard');
        }

        // Als de gebruiker een gewone gebruiker is, stuur ze naar de homepagina
        return redirect()->route('home');
    }
}
