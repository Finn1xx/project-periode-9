<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    use RegistersUsers;

    // Geef de redirect naar een specifieke pagina na registratie
    protected $redirectTo = '/home'; // Dit is de standaardpagina waar je gebruikers naartoe stuurt

    public function __construct()
    {
        // Als de gebruiker al ingelogd is, sturen we ze niet naar de registratiepagina
        $this->middleware('guest')->except('showRegistrationForm');
    }

    // Toon het registratieformulier
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Validatie van de gegevens die van het registratieformulier komen
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required', 
                'string', 
                'email', 
                'max:255', 
                'unique:users,email', // Zorg ervoor dat email uniek is in de database
            ],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'in:user,admin'], // Zorg ervoor dat 'role' goed wordt gevalideerd
        ]);
    }

    // Maak een nieuwe gebruiker aan
    protected function create(array $data)
    {
        // Hier kun je de data inspecteren
        \Log::info('Aanmaken van gebruiker:', $data);
        
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'], // De rol van de gebruiker (user of admin)
        ]);
    }

    // Na succesvolle registratie, stuur de gebruiker naar de $redirectTo pagina
    protected function registered(Request $request, $user)
    {
        // Zorg ervoor dat de sessie wordt vernieuwd
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect naar de homepagina of naar de registratiepagina
        return redirect($this->redirectTo);
    }
}
