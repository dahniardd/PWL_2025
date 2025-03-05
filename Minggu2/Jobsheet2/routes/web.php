<?php

use Illuminate\Support\Facades\Route; // mengimpor route
use App\Http\Controllers\ItemController; // mengimpor controller
use App\Http\Controllers\WelcomeController; // mengimpor controller
use App\Http\Controllers\PageController; // mengimpor Pagecontroller
use App\Http\Controllers\PhotoController; // mengimpor Photocontroller

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

// Basic Routing //
Route::get('/hello', function () {
    return 'Hello World';
   }); //menggunakan controller 

Route::get('/world', function () {
    return 'World';
   });  

Route::get('/opening', function () {
    return 'Selamat Datang';
}); 

Route::get('/about', function () {
    return 'Dahniar Davina dengan NIM 23417600243';
});  

// Route Parameters //
Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});  

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});
   
Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID '.$id;
});

// Optional Parameters //
Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

// Controllers //
Route::get('hello', [WelcomeController::class,'hello']);

//Page Controller//
Route::get('/', [PageController::class,'index']);
Route::get('/about', [PageController::class,'about']);
Route::get('/articles/{id}', [PageController::class,'articles']);

//Photo Controller//
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);
   Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);
   
// view route//
Route::get('/greetin', function () {
    return view('hello', ['name' => 'Dahniar']);
});
//view perubahan //
Route::get('/greetink', function () {
    return view('blog.hello', ['name' => 'Dahniar']);
});
Route::get('/greeting', [WelcomeController::class,'greeting']);

Route::resource('items', ItemController::class); //mengatur rute untuk item secara otomatis