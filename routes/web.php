<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Root route
Route::get('/', function () {
    return view('home'); // Serve the home view for the root URL
})->name('root');

// Authentication routes
Auth::routes();

// Authenticated home route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
