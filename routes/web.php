<?php

use App\Http\Controllers\ProductPriceController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'getAllClients'])->name('all.clients');
Route::get('/clients/{client}/products', [ProductPriceController::class, 'index'])->name('products.index');
Route::post('/clients/{client}/products', [ProductPriceController::class, 'setProductsSpecialPrice'])->name('set.products.special.prices');
Route::post('/clients/{client}/product', [ProductPriceController::class, 'setProductSpecialPrice'])->name('set.product.special.price');
