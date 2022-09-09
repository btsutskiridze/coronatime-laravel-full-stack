<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\WorldwideController;
use App\Http\Controllers\ByCountryController;
use App\Http\Controllers\AuthController;

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

Route::middleware('guest')->group(function () {
	Route::view('/', 'sessions.login')->name('login.show');
	Route::view('register', 'sessions.register')->name('register.show');
	Route::post('register', [AuthController::class, 'register'])->name('register');
	Route::post('login', [AuthController::class, 'login'])->name('login');
});

Route::middleware('auth')->group(function () {
	Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('worldwide', [WorldwideController::class, 'show'])->name('worldwide.show');

Route::get('by-country', [ByCountryController::class, 'show'])->name('bycountry.show');

Route::get('language/{locale}', [LanguageController::class, 'change'])->name('language.change');
