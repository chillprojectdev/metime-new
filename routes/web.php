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


// ADMIN ROUTE

Route::get('/metime-admin', function () {
    return view('admin.auth.login');
});

Route::get('/dashboard-admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');

Route::get('/customers-admin', [App\Http\Controllers\AdminCustomersController::class, 'index'])->name('admin.customers');

Route::get('/treatments-admin', [App\Http\Controllers\AdminTreatmentsController::class, 'index'])->name('admin.treatments');

Route::post('/treatments-admin/create', [App\Http\Controllers\AdminTreatmentsController::class, 'createTreatment'])->name('admin.createTreatment');

Route::post('/treatments-admin/update', [App\Http\Controllers\AdminTreatmentsController::class, 'updateTreatment'])->name('admin.updateTreatment');

Route::post('/treatments-admin/delete', [App\Http\Controllers\AdminTreatmentsController::class, 'deleteTreatment'])->name('admin.deleteTreatment');


Route::get('/treatments-admin/getKey', [App\Http\Controllers\AdminTreatmentsController::class, 'getKey'])->name('admin.getKey');

