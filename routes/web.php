<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorldwideController;
use App\Http\Controllers\ByCountryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\LanguageController;
use GuzzleHttp\Middleware;

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

Route::get('language/{locale}', [LanguageController::class, 'change'])->name('language.change');

Route::middleware('guest')->group(function () {
	Route::get('', fn () =>redirect()->route('login.show'));
	Route::view('login', 'sessions.login')->name('login.show');
	Route::view('register', 'sessions.register')->name('register.show');
	Route::controller(AuthController::class)->group(function () {
		Route::post('register', 'register')->name('register');
		Route::post('login', 'login')->name('login');
	});

	Route::controller(ResetPasswordController::class)->group(function () {
		Route::get('forgot-password', 'enterEmail')->name('forgot_password.enter_email');
		Route::post('forgot-password', 'sentEmail')->name('forgot_password.sent_email');
		Route::get('reset-password/{token}', 'enterNewPassword')->name('reset_password.reset');
		Route::post('reset-password', 'updatePassword')->name('reset_password.update');
	});
});

Route::middleware('auth')->group(function () {
	Route::get('logout', [AuthController::class, 'logout'])->name('logout.logout');

	Route::prefix('email')->group(function () {
		Route::get('/verify', [VerificationController::class, 'notice'])->name('verification.notice');
		Route::get('/verify/{id}/{hash}', [VerificationController::class, 'verify'])->middleware('signed')->name('verification.verify');
		Route::view('/verification', 'auth.email.verify')->name('email.verify');
		Route::view('/verified', 'auth.email.verified')->name('email.verified');
	});

	Route::get('worldwide', [WorldwideController::class, 'show'])->name('worldwide.show');
	Route::get('by-country', [ByCountryController::class, 'show'])->name('bycountry.show');
});