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

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('dashboard');
    Route::post('/products', [App\Http\Controllers\ProductsController::class, 'store'])->name('admin.prices');



    // Route::post('/unique_product_price', [App\Http\Controllers\ProductsController::class, 'store'])->name('prices');
});
Route::get('/show', [App\Http\Controllers\ProductsController::class, 'index'])->name('show.products');
Route::get('/product_details/{id}/{price}', [App\Http\Controllers\ProductsController::class, 'show'])->name('detail.products');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
