<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; //mengimpor HomeController
use App\Http\Controllers\ProductController; //mengimpor ProductController
use App\Http\Controllers\UserController; //mengimpor UserController
use App\Http\Controllers\SalesController; //mengimpor SalesController

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

// Halaman Home
Route::get('/home', [HomeController::class, 'index']);

// Halaman Products dengan Prefix
Route::prefix('/category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('/home-care', [ProductController::class, 'homeCare']);
    Route::get('/baby-kid', [ProductController::class, 'babyKid']);
});

// Halaman User dengan Parameter
Route::get('/user/{id}/name/{name}', [UserController::class, 'show']);

// Halaman Penjualan
Route::get('/sales', [SalesController::class, 'index']);

Route::get('', function () {
    return view('welcome');
});

