<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mainpage');
});

Route::get('/about', function () {
    return view('about');  // Ensure about.blade.php exists in resources/views
});