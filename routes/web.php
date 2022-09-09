<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\WorldwideController;
use App\Http\Controllers\ByCountryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VerificationController;

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

Route::view('email/verified', 'email.verified')->middleware('auth')->name('email.verified');
Route::view('email/verification', 'email.verify')->middleware('auth')->name('email.verify');

// Route::get('/email/verify', [VerificationController::class, 'show'])->middleware('auth', 'signed')->name('verification.notice');
// Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->middleware(['auth', 'signed'])->name('verification.verify');

Route::middleware('auth')->group(function () {
	Route::get('logout', [AuthController::class, 'logout'])->name('logout');
	Route::get('email/verify', [VerificationController::class, 'show'])->name('verification.notice');
	Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify')->middleware(['signed']);
});

Route::get('worldwide', [WorldwideController::class, 'show'])->name('worldwide.show');

Route::get('by-country', [ByCountryController::class, 'show'])->name('bycountry.show');

Route::get('language/{locale}', [LanguageController::class, 'change'])->name('language.change');