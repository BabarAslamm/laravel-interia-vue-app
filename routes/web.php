<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //sleep(2);
    return Inertia::render('Home');
})->name('home');

Route::get('/about', function () {
    $name = 'John Wick';
    return inertia('About', get_defined_vars());
})->name('about');
