<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/bestellen', function () {
    return view('bestellen');

})->middleware('auth');

Route::get('/Bezorgdiensten', function () {
    return view('Bezorgdiensten');

})->middleware('auth');

Route::get('/overons', function () {
    return view('Overons.blade.php');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/zakelijk', function () {
    return view('zakelijk');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/login_or_signup', function () {
    return view('login_or_signup');

Route::get('/drinks', function ( ){

    $drinks = Drink::all();
    return view('index');
    
});
// jhjhj
});