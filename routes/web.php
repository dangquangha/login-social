<?php

use App\Http\Controllers\SocialLogin;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::namespace('auth')->group(function () {
    Route::get('social/{driver}', [SocialLogin::class, 'loginSocial'])->name('login.social');
    Route::get('social/{driver}/callback', [SocialLogin::class, 'loginSocialCallback'])->name('login.social-callback');
});