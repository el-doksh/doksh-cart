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
    return view('welcome');
});

Auth::routes();

Route::middleware(['current_db'])->group(function () {
    Route::get('/store',[App\Http\Controllers\Store\StoreController::class, 'index'])->name('store');
    Route::post('cart/store',[App\Http\Controllers\Store\CartController::class, 'store'])->name('cart.store');
});

Route::middleware(['auth', 'current_db'])->group(function () {
    
    Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin');
    Route::resource('product', App\Http\Controllers\Admin\ProductController::class)->except(['show', 'update']);
    Route::post('product/update/{id}',[App\Http\Controllers\Admin\ProductController::class, 'update'])->name('product.update');
});