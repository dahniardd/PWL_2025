<?php

use Illuminate\Support\Facades\Route; // mengimpor route
use App\Http\Controllers\ItemController; // mengimpor controller

//mendefiniskan rute web dalam laravel
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

Route::get('/', function () {
    return view('welcome'); //menampilkan halaman welcome
});

Route::resource('items', ItemController::class); //mengatur rute untuk item secara otomatis