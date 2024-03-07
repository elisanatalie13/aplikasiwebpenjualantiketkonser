<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php
route::get('/user/{id}', function ($id){
    return 'User dengan ID'. $id;
});

// routes/web.php
route::prefix('admin')->group(function (){
    route::get('dashboard', function(){
        return 'Admin Dashboard';
    });

    route::get('/users', function (){
        return 'Admin Users';
    });
});

// route::get('/listbarang/{id}/{nama}', function($id, $nama){
//     return view('list_barang', compact('id', 'nama'));
// });

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);

Route::get('/login', [LoginController::class, 'login']);