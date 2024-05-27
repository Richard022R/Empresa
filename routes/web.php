<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/logout', function () {
    if (Auth::check()) {
        Auth::logout();
    }
    return redirect()->route('home');
})->name('logout');

Route::get('/servicios', function () {
    return view('layouts.servicios');
})->name('servicios');

Route::get('/sobre-nosotros', function () {
    return view('layouts.sobre-nosotros');
})->name('sobre-nosotros');

Route::get('/contacto', function () {
    return view('layouts.contacto');
})->name('contacto');

Route::get('/change', function () {
    return view('lenguages.change');
})->name('lenguages');
