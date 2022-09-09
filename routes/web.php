<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\WorldwideController;
use App\Http\Controllers\ByCountryController;
use App\Http\Controllers\LoginController;

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
Route::get('/', [LoginController::class, 'show'])->name('login.show');

Route::get('worldwide', [WorldwideController::class, 'show'])->name('worldwide.show');

Route::get('by-country', [ByCountryController::class, 'show'])->name('bycountry.show');

Route::get('language/{locale}', [LanguageController::class, 'change'])->name('language.change');