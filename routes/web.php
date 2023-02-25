<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\categoryController;

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

// menggunakan view
Route::get('/hello', function () {
    // bagian return ini digunakan unutk meneruskan data ke view
    return view('halaman.hello',['name'=> 'Andi']);
});
// menggunakan view dengan kontroller
Route::get('/hellocontroller', [PageController::class, 'hello']);

// Route::get('/home', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles/{id}', [ArticleController::class,'articles']);

// Praktikum 3 membuat company profile
// Home page pada web
Route::get('/', function () {
    return view('welcome');
});
// category page menggunakan route prefix dan controller
Route::prefix('category')->group(function () {
    Route::get('/bola-bekel', [categoryController::class,'bekel']);
    Route::get('/gobak-sodor', [categoryController::class,'gobak']);
    Route::get('/dakon', [categoryController::class,'dakon']);
});
// news page menggunakan route param
Route::prefix('news')->group(function () {
    Route::get('/', function () {
        return 'Tampilan unutk news';
    });
    Route::get('/{id}', [ArticleController::class,'articles']);

});


// daftar program dengan route prefix
Route::prefix('program')->group(function () {
    Route::get('/sendiri', function () {
        return 'Permainan yang bisa dimainkan sendiri maupun bersama';
    });
    Route::get('/berdua', function () {
        return 'permainan yang hanya bisa dimainkan 2 orang';
    });
    Route::get('/bersama', function () {
        return 'Permainan yang hanya bisa dimainkan oleh banyak orang';
    });
});

// About us menggunakan route biasa
Route::get('/about-us', function () {
    return 'Percobaan route ini dibuat oleh Alvina marcy';
});

// contactUs dengan route resorce
Route::resource('/contact-us', contactUsController::class);
