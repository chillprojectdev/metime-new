<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('login/{provider}/callback', 'Auth\LoginController@handleCallback');

Route::get('/treatment', [App\Http\Controllers\TreatmentController::class, 'index'])->name('treatment');

Route::get('/news_promo', [App\Http\Controllers\NewsPromoController::class, 'index'])->name('news_promo');

Route::get('/book_treatment', [App\Http\Controllers\TreatmentController::class, 'bookTreatment'])->name('book_treatment');

Route::get('/old_book_treatment', function() {
    return view('bookTreatment');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/test_bootstrap', function () {
    return view('test_bootstrap');
});

Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('profile');