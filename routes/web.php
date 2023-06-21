<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController; //memanggil file login controller
use App\Http\Controllers\RegisterController; //memanggil file register controller

//Route itu berfungsi untuk menjalankan file blade di browser

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/katalog', function () {
    return view('shop-page.shoppage');
});

Route::get('/tambahproduk', function () {
    return view('crud.tambahproduk');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

//untuk menampilkan dan menambahkan data di register
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('actionregister', [LoginController::class, 'actionregister'])->name('actionregister');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');



