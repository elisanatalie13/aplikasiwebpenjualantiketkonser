<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiketController extends Controller
{
    function tiket(){
        return view('tiket');
    }

    function prosesPesan(Request $request){
        $nama = $request->input('nama');
        $email = $request->input('email');
        $kategori = $request->input('kategori');
        $jumlahTiket = $request->input('jumlahTiket');
        $harga = $request->input('harga');
        $totalHarga = $request->input('totalHarga');

        // Proses penyimpanan data ke database
        // ...

        // Tampilkan pesan berhasil
        session()->flash('pesan', 'Pesan tiket berhasil!');
        return redirect()->route('tiket');
    }
}