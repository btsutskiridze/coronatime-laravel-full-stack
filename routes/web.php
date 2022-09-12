<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\WorldwideController;
use App\Http\Controllers\ByCountryController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ResetPasswordController;
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

Auth::routes(['verify' => true]);

Route::middleware('guest')->group(function () {
	Route::get('', fn () =>redirect()->route('login.show'));
	Route::view('login', 'sessions.login')->name('login.show');
	Route::view('register', 'sessions.register')->name('register.show');
	Route::post('register', [AuthController::class, 'register'])->name('register');
	Route::post('login', [AuthController::class, 'login'])->name('login');

	Route::get('forgot-password', [ResetPasswordController::class, 'enterEmail'])->name('forgot_password.enter_email');
	Route::post('forgot-password', [ResetPasswordController::class, 'sentEmail'])->name('forgot_password.sent_email');
	Route::get('reset-password/{token}', [ResetPasswordController::class, 'enterNewPassword'])->name('password.reset');
	Route::post('reset-password', [ResetPasswordController::class, 'updatePassword'])->name('password.update');
});

Route::middleware('auth')->group(function () {
	Route::get('logout', [AuthController::class, 'logout'])->name('logout');
	Route::get('email/verify', [VerificationController::class, 'notice'])->name('verification.notice');
	Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->middleware('signed')->name('verification.verify');

	Route::view('email/verification', 'auth.email.verify')->name('email.verify');
	Route::view('email/verified', 'auth.email.verified')->name('email.verified');
});

Route::get('worldwide', [WorldwideController::class, 'show'])->name('worldwide.show');
Route::get('by-country', [ByCountryController::class, 'show'])->name('bycountry.show');
Route::get('by-country/search', [ByCountryController::class, 'search'])->name('bycountry.search');
// Route::get('by-country/location/sort/asc', [ByCountryController::class, 'sortLocationAsc'])->name('bycountry.sort_asc_location');
// Route::get('by-country/location/sort/desc', [ByCountryController::class, 'sortLocationDesc'])->name('bycountry.sort_desc_location');

Route::get('language/{locale}', [LanguageController::class, 'change'])->name('language.change');