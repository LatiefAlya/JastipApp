<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::controller(AuthController::class)->group(function () {

//     Route::get('register', 'register')->name('register');
//     Route::resource('register', 'AuthController');

//     Route::get('login', 'login')->name('login');
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/spesification', function () {
    return view('spesification');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/detailsproduct', function () {
    return view('detailsproduct');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/payment', function () {
    return view('payment');
});
