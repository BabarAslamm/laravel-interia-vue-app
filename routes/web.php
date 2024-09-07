<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;



Route::middleware('guest')->group(function(){

    Route::inertia('/', 'Home')->name('home');

    Route::inertia('/register', 'Auth/Register')->name('register');

    Route::post('/register/store', [RegisterController::class, 'store'])->name('register.store');

    Route::inertia('/login', 'Auth/Login')->name('login');
    
    Route::post('/login', [LoginController::class, 'login'])->name('login');

});


Route::middleware('auth')->group(function(){

    Route::inertia('/dashboard', 'Dashboard')->name('dashboard');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

});
