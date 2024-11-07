<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;

    // De pagina waar gebruikers na registratie heen worden gestuurd
    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }

    // Valideer de registratiegegevens inclusief de rol
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'in:user,admin'], // Valideer rol, alleen 'user' of 'admin' toegestaan
        ]);
    }

    // Maak een nieuwe gebruiker aan met de geselecteerde rol
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'], // Sla de rol op op basis van gebruikersinvoer
        ]);
    }
}
