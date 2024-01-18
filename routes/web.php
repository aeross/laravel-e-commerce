<?php

use App\Http\Controllers\ProductCardController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', [ProductController::class, 'home']);

Route::get('/add', [ProductController::class, 'add']);
Route::post('/add', [ProductController::class, 'submitAdd']);

Route::get('/edit/{product}', [ProductController::class, 'edit']);
Route::put('/edit/{product}', [ProductController::class, 'submitEdit']);

Route::delete('/delete/{product}', [ProductController::class, 'delete']);

Route::get('/cart', [ProductCardController::class, 'index']);
Route::post('/cart/{product}', [ProductCardController::class, 'create']);
