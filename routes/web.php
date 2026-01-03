<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'handleForm'])->name('contact.submit');


// 1. Public Routes for Poliklinik Alisya (Existing routes)
Route::get('/', function () {
    return view('mainpage');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/departments', function () {
    return view('departments');
});

Route::get('/services', function () {
    return view('services');
});
Route::get('/doctors', function () {
    return view('doctors');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});
Route::get('/contact', function () {
    return view('contact');
});
    
Route::get('/appointment', function () {
    return view('appointment');
});

Route::post('/appointment/store', [AppointmentController::class, 'store'])
    ->name('appointment.store');



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
// 2. Admin Routes for Poliklinik Alisya (Add these below)
Route::prefix('admin')->group(function () {
    
    //// Staff Profile Routes (Source [3], [4])
    Route::get('/staff', [StaffController::class, 'index'])->name('staff.index');
    Route::get('/staff/create', [StaffController::class, 'create'])->name('staff.create');
    Route::post('/staff/store', [StaffController::class, 'store'])->name('staff.store');
    Route::get('/staff/edit/{id}', [StaffController::class, 'edit'])->name('staff.edit');
    Route::patch('/staff/update/{id}', [StaffController::class, 'update'])->name('staff.update');
    Route::delete('/staff/delete/{id}', [StaffController::class, 'destroy'])->name('staff.destroy');

    // Booking List Routes (Source [5], [6])
    Route::get('/bookings', [AdminController::class, 'bookingList'])->name('admin.bookings');
    Route::get('/bookings/{id}', [AdminController::class, 'bookingDetails'])->name('admin.booking.details');
    

    
});
