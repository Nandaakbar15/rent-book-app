<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

// routes for login and register
Route::get('/loginPage', [AuthController::class, 'LoginPage'])->name('login');

// handle login logic routes
Route::post('/handleLogin', [AuthController::class, 'handleLogin']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [UserController::class, 'profile']);

    Route::middleware(['auth', 'only_admin'])->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index']);
    });
});
