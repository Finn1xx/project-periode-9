<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Algemene routes
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

// Registratie en login routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Auth::routes();

// Beveiligde routes
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

// Admin-only routes
Route::middleware('admin')->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard'); 
    })->name('admin.dashboard');
});
