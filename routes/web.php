<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DetailController;
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

Route::prefix('/')
    ->namespace('App\Http\Controllers')
    ->group(function(){
        Route::get('/', 'HomeController@index')
        ->name('home');
});

Route::get('/detail', [DetailController::class, 'index'])->name('detail');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout-success');



Route::prefix('admin')
    ->namespace('App\Http\Controllers\Admin')
    ->group(function(){
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');

    });