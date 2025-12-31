<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'handleForm'])->name('contact.submit');

Route::get('/', function () {
    return view('mainpage');
});

Route::get('/about', function () {
    return view('about');  
});

/* Route::get('/contact', function () {
    return view('contact');
}); */

Route::get('/testimonials', function () {
    return view('testimonials');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
