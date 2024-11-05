<?php

// app/Http/Controllers/UserController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Zorg ervoor dat je Auth gebruikt

class UserController extends Controller
{
    public function checkUserRole()
    {
        if (Auth::check()) {
            // Stel dat je een 'role' kolom hebt in de users tabel
            return response()->json(Auth::user()->role);
        }
        return response()->json('guest'); // Als de gebruiker niet ingelogd is
    }
}
