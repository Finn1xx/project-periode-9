<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RepairRequestController;
use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Routes voor algemene pagina's
Route::get('/', function () {
    return view('home');
});

Route::get('/over-ons', function () {
    return view('Overons');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/zakelijk', function () {
    return view('zakelijk');
});

Route::get('/login_or_signup', function () {
    return view('login_or_signup');
})->name('login_or_signup');

// Beveiligde routes voor ingelogde gebruikers
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Bestellen en bezorgdiensten routes
    Route::get('/bestellen', function () {
        return view('bestellen');
    });

    Route::get('/Bezorgdiensten', function () {
        return view('Bezorgdiensten');
    });
});

// Registratie en login routes
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Auth::routes();

// Routes voor RepairRequestController
Route::get('/reparatieverzoek', [RepairRequestController::class, 'create'])->name('repair.request.create');
Route::post('/reparatieverzoek', [RepairRequestController::class, 'store'])->name('repair.request.store');

// Admin-only routes
Route::middleware('admin')->group(function () {
    Route::get('/verzoeken', [RepairRequestController::class, 'index'])->name('verzoeken.index');
});

Route::get('/register-confirmation', function () {
    return view('register-confirmation'); // Maak een blade-view aan
})->name('register.confirmation');

Route::middleware('admin')->get('/admin/dashboard', function () {
    return view('admin.dashboard'); // Zorg ervoor dat deze view bestaat
})->name('admin.dashboard');

// Route voor het controleren van de gebruikersrol
Route::get('/checkUserRole', [UserController::class, 'checkUserRole']);

// Resource routes voor AppointmentController
Route::resource('appointments', AppointmentController::class);

    