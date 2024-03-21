<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/shop', [ProductController::class, 'shop'])->name('shop');
Route::view('/policy', 'front.privacy-policy')->name('policy');
Route::get('/category/{cat}', [ProductController::class, 'showCategory'])->name('showCategory');
Route::get('/product/{id}', [ProductController::class, 'showProduct'])->name('singleProduct');
Route::get('pagination/getMoreProducts', [ProductController::class, 'getMoreProducts']);




