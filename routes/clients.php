<?php

use App\Http\Controllers\Client\Auth\LoginController;
use App\Http\Controllers\Client\ProfileController;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Http\Middleware\RedirectAuthenticatedToken;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Client Routes
|--------------------------------------------------------------------------
|
| Register all clients route here. Clients and provider routes has been
| separated with their appropriate files.
|
*/

Route::prefix('client')->name('client.')->group(function() {

    Route::middleware(RedirectAuthenticatedToken::class)->group(function() {
        Route::get('/login', [LoginController::class, 'index'])->name('login');
        Route::post('/login', [LoginController::class, 'auth'])->name('auth');
    });
    
    Route::middleware(EnsureTokenIsValid::class)->group(function() {
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    });
});