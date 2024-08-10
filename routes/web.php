<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //sleep(2);
    return Inertia::render('Home');
});

Route::get('/about', function () {
    $name = 'John Wick';
    return inertia('About', get_defined_vars());
});
