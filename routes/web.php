<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// home
Route::get('/home', function () {
    return view('home');
});

// prefix
Route::prefix('products')->group(function () {
    Route::get('/main', function () {
        return view('products');
    });
});

// news
    Route::get('/news', function () {
        return view('news');
    });

    // param
    Route::get('/news/{title}', function ($title) {
        return view('news', ['judul' => $title]);
    });

    Route::prefix('program')->group(function () {
        Route::get('/magang', function () {
            return view('program');
        });
    });

    Route::get('/aboutus', function () {
        return view('about-us');
    });

    Route::resource('contactus', ContactUsController::class)->only([
        'index'
    ]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// praktikum 2
// // Halaman Dashboard
// Route::get('/', function () {
//     return view('dashboard');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });
// sudah ada di home

//halaman profile
Route::get('/profile/{nim}', fn($nim)=> view('profile', ['nim' => 2141720207]));

//halaman Experience
Route::get('/experience', fn()=> view('experience'));