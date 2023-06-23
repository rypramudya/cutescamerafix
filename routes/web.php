<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController; //memanggil file login controller
use App\Http\Controllers\AdminController; //memanggil file register controller

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

//untuk mengedit profile di profil admin
Route::get('/edit-profile',[AdminController::class, 'tabelprofile'])->name("tabelprofile");
Route::get('/tambah-admin',[AdminController::class, 'create'])->name("formadmin");
Route::post('/tambah-admin',[AdminController::class, 'store'])->name("tambahadmin");
Route::get('/tambah-admin/{admin}/edit',[AdminController::class, 'edit'])->name("editadmin");
Route::put('/tambah-admin/{admin}',[AdminController::class, 'update'])->name("updateadmin");



