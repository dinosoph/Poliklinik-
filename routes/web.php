<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmailLogController;

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

Route::get('/services/{service}', function ($service) {
    return view('service-details', compact('service'));
})->name('services.details');

Route::get('/doctors', function () {
    return view('doctors');
})->name('profile.doctor');

Route::get('/testimonials', function () {
    return view('testimonials');
});

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'handleForm'])->name('contact.submit');

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

// 2. Admin Routes for Poliklinik Alisya (Add these below)
Route::prefix('admin')->group(function () {

    // Admin login (outside auth middleware)
    Route::get('/login', [AuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'login']);

    // Admin logout
    Route::post('/logout', function () {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('admin.login');
    })->name('admin.logout');


    // Protected admin routes
    Route::middleware('auth')->group(function () {

        // Dashboard
        Route::get('/staff', [StaffController::class, 'dashboard'])->name('staff.dashboard');
        Route::get('/staff/index', [StaffController::class, 'index'])->name('staff.index');
        Route::get('/staff/create', [StaffController::class, 'create'])->name('staff.create');
        Route::post('/staff/store', [StaffController::class, 'store'])->name('staff.store');
        Route::get('/staff/edit/{id}', [StaffController::class, 'edit'])->name('staff.edit');
        Route::patch('/staff/update/{id}', [StaffController::class, 'update'])->name('staff.update');
        Route::delete('/staff/delete/{id}', [StaffController::class, 'destroy'])->name('staff.destroy');
        Route::get('/admin/staff/next-appointment', [StaffController::class, 'nextAppointmentJson'])->name('staff.nextAppointmentJson');

        // Bookings
        Route::get('/bookings', [AppointmentController::class, 'index'])->name('bookings.index');
        Route::get('/bookings/{id}/assign', [AppointmentController::class, 'edit'])->name('bookings.assign');
        Route::put('/bookings/{id}', [AppointmentController::class, 'update'])->name('bookings.update');
        Route::get('/bookings/{id}/view', [AppointmentController::class, 'show'])->name('bookings.show');
        Route::get('/email-log', [EmailLogController::class, 'index'])->middleware('auth');


    });

});
/*
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});*/




