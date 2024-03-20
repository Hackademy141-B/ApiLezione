<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'home'])->name('homePage');

//Rotte per la gestione dei prodotti
Route::get('/get/products', [ProductController::class, 'index'])->name('indexProducts');
Route::get('/detail/product/{id}', [ProductController::class, 'detailProduct'])->name('detailProduct');
Route::get('/products/all/{sortingType}', [ProductController::class, 'productSorting'])->name('productSorting');
Route::get('/product/byCategory/{categorySelected}', [ProductController::class, 'productByCategory'])->name('productByCategory');
