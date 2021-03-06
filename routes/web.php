<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\SocialController;
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

Auth::routes();

Route::get('/social-auth/{provider}', [SocialController::class, 'redirectToProvider'])->name('auth.social');

Route::get('/social-auth/{provider}/callback', [SocialController::class, 'handleProviderCallback'])->name('auth.social.callback');

Route::get('/{any}', function () {
    return view('home');
})->where('any', '.*');
