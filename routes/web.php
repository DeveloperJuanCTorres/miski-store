<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StoreController;
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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/tienda', [StoreController::class, 'index'])->name('tienda');
Route::get('/store/filter', [StoreController::class, 'filter'])->name('store.filter');

Route::get('/servicios', [ServiceController::class, 'index'])->name('servicios');
Route::get('/contactanos', [ContactController::class, 'index'])->name('contactanos');

Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
Route::delete('/cart/remove/{rowId}', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/remove', [CartController::class, 'destroy'])->name('cart.remove');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
