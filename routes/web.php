<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::resource('roles', RoleController::class);

// Guest routes (only accessible when not logged in)
Route::middleware('guest')->group(function () {
    Route::get('/', [LandingPageController::class, 'index'])->name('welcome');
    // Show login form
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    // Handle login form submission
    Route::post('/login', [LoginController::class, 'authenticate']);
});

// Authenticated routes (only accessible when logged in)
Route::middleware('auth')->group(function () {
    // Dashboard page
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Handle logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
