<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ListBarangController115;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StatusController;

// Route::get('/listbarang/{id}/{nama}', function($id, $nama){
// return view('list_barang', compact('id', 'nama'));
// });

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php
Route::get('/user/{id}', function ($id){
    return 'User dengan ID ' . $id;
});

// routes/web.php
Route::prefix('admin')->group(function (){
    Route::get('dashboard', function(){
        return 'Admin Dashboard';
    });

    Route::get('/users', function (){
        return 'Admin Users';
    });
});

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/listbarang115', [ListBarangController115::class, 'index']);
Route::get('/Daftar', [DaftarController::class, 'daftar']);
Route::get('/user', [UserController::class, 'index']);

Route::get('/daftar', function(){
    return view('daftar');
});
Route::get('/beranda', function(){
    return view('beranda');
});
Route::get('/pembelian', function(){
    return view('pembelian');
});
Route::get('/pembayaran', function(){
    return view('pembayaran');
});
Route::get('/status', function(){
    return view('status');
});
Route::get('/tentang', function(){
    return view('tentang');
});
Route::get('/akun', function(){
    return view('akun');
});
