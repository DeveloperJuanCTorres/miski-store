<?php

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
Route::get('/servicios', [ServiceController::class, 'index'])->name('servicios');
Route::get('/contactanos', [ContactController::class, 'index'])->name('contactanos');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
