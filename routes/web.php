<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ListBarangController115;




// Route::get('/listbarang/{id}/{nama}', function($id, $nama){
// return view('list_barang', compact('id', 'nama'));
// });

route::get('/', function () {
    return view('welcome');
});
Route::get('/list_barang', [ListBarangController::class, 'tampilkan']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/listbarang115', [ListBarangController115::class, 'index']);