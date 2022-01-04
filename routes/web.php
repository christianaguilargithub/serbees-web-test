<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', 'App\Http\Controllers\PagesController@index')->name('index');
//Route::get('/login', 'App\Http\Controllers\PagesController@login')->name('login');
//Route::get('/registration', 'App\Http\Controllers\PagesController@registration')->name('registration');
Route::get('/booking-hour', 'App\Http\Controllers\PagesController@bookingHour')->name('booking-hour');
Route::get('/booking-day-range', 'App\Http\Controllers\PagesController@bookingDayRange')->name('booking-day-range');
Route::get('/booking-fixed', 'App\Http\Controllers\PagesController@bookingFixed')->name('booking-fixed');
Route::get('/booking-covid-test', 'App\Http\Controllers\PagesController@bookingCovidTest')->name('booking-covid-test');
Route::get('/booking-covid-test2', 'App\Http\Controllers\PagesController@bookingCovidTest2')->name('booking-covid-test2');
Route::get('/booking-covid-test3', 'App\Http\Controllers\PagesController@bookingCovidTest3')->name('booking-covid-test3');
Route::get('/services', 'App\Http\Controllers\PagesController@services')->name('services');
Route::get('/profile-client', 'App\Http\Controllers\PagesController@profileClient')->name('profile-client');


Route::get('/', HomeController::class)->name('home');

# Auth Routes
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');

# Services Routes
Route::get('/services', [ServiceController::class, 'index'])->name('service.index');

# Fallback route when no route match
Route::fallback(function() {
    return redirect()->route('home');
});
