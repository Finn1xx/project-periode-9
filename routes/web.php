<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RepairRequestController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AppointmentController;

Route::prefix('appointments')->name('appointments.')->group(function () {
    Route::get('/', [AppointmentController::class, 'index'])->name('index'); // Overzicht van afspraken
    Route::get('/create', [AppointmentController::class, 'create'])->name('create'); // Formulier voor nieuwe afspraak
    Route::post('/', [AppointmentController::class, 'store'])->name('store'); // Opslaan nieuwe afspraak
    Route::get('/{appointment}', [AppointmentController::class, 'show'])->name('show'); // Bekijken van specifieke afspraak
    Route::get('/{appointment}/edit', [AppointmentController::class, 'edit'])->name('edit'); // Bewerken afspraak
    Route::put('/{appointment}', [AppointmentController::class, 'update'])->name('update'); // Bijwerken afspraak
    Route::delete('/{appointment}', [AppointmentController::class, 'destroy'])->name('destroy'); // Verwijderen afspraak
});

Route::get('/afspraken', [AppointmentController::class, 'index'])->name('afsprakensysteem');

Route::get('/', function () { return view('home'); })->name('home');
Route::get('/over-ons', function () { return view('overons'); })->name('overons');
Route::get('/service', function () { return view('service'); })->name('service');
Route::get('/zakelijk', function () { return view('zakelijk'); })->name('zakelijk');
Route::get('/faqq', function () { return view('faqq'); })->name('faqq');
Route::get('/login_or_signup', function () { return view('login_or_signup'); })->name('login_or_signup');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/bestellen', function () { return view('bestellen'); })->name('bestellen');
    Route::get('/Bezorgdiensten', function () { return view('Bezorgdiensten'); })->name('Bezorgdiensten');
});

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Auth::routes();

Route::get('/reparatieverzoek', [RepairRequestController::class, 'create'])->name('repair.request.create');
Route::post('/reparatieverzoek', [RepairRequestController::class, 'store'])->name('repair.request.store');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/verzoeken', [RepairRequestController::class, 'index'])->name('verzoeken.index');
});

