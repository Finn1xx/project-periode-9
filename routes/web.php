<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RepairRequestController; // Zorg ervoor dat je deze import hebt toegevoegd
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route voor de homepagina
Route::get('/', function () {
    return view('home');
});

// Over ons route
Route::get('/over-ons', function () {
    return view('Overons'); // Zorg ervoor dat je een 'Overons.blade.php' view hebt
});

// Bestellen route (beveiligd)
Route::get('/bestellen', function () {
    return view('bestellen');
})->middleware('auth');

// Bezorgdiensten route (beveiligd)
Route::get('/Bezorgdiensten', function () {
    return view('Bezorgdiensten'); // Zorg ervoor dat je een 'Bezorgdiensten.blade.php' view hebt
});

// Registratie route
Route::get('/registration', function () {
    return view('registration'); // Zorg ervoor dat je een 'registration.blade.php' view hebt
});

// Route voor de reparatieverzoekpagina
Route::get('/reparatieverzoek', function () {
    return view('reparatieverzoek'); // Zorg ervoor dat deze naam overeenkomt met je blade-bestand
});

// Route voor het verzenden van een reparatieverzoek
Route::post('/verzoek/verzenden', [RepairRequestController::class, 'store'])->name('verzoek.verstuur');

// Route voor het weergeven van verzoeken (alleen voor admin)
Route::get('/verzoeken', [RepairRequestController::class, 'index'])->middleware('admin')->name('verzoeken.index');

// Route voor het weergeven van de registratiepagina
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Route voor het weergeven van de inlogpagina
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Middleware voor authenticatie, voor alle routes hieronder
Route::middleware(['auth'])->group(function () {
    // Home route na inloggen
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Route om verzoeken te bekijken
    Route::get('/verzoeken', [RepairRequestController::class, 'index'])->name('verzoeken.index');
});

// Auth routes
Auth::routes();

// Route voor het controleren van de gebruikersrol
Route::get('/checkUserRole', [UserController::class, 'checkUserRole']);

// Route voor het aanmaken van een reparatieverzoek
Route::get('/zakelijk/reparatieverzoek', [RepairRequestController::class, 'create'])->name('repair.request.create');
Route::post('/zakelijk/reparatieverzoek', [RepairRequestController::class, 'store'])->name('repair.request.store');

// FAQ route
Route::get('/faq', function () {
    return view('faq');
});

// Registratie routes
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);


// Login of Signup route
Route::get('/login_or_signup', function () {
    return view('login_or_signup'); // Zorg ervoor dat je een 'login_or_signup.blade.php' view hebt
});

// Drinks route
Route::get('/drinks', function () {
    $drinks = Drink::all(); // Haal alle dranken op uit de database
    return view('index', compact('drinks')); // Zorg ervoor dat je een 'index.blade.php' view hebt
});
