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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard'); {
        return view('pages.dashboard');
    }
});


route::resource('/products', 'App\Http\Controllers\ProductController');
route::resource('/product-galleries', 'App\Http\Controllers\ProductGalleryController');
route::get('transactions{id}/set-status', 'App\Http\Controllers\TransactionController@setStatus')->name('transactions.status');
route::resource('/transactions', 'App\Http\Controllers\TransactionController');

