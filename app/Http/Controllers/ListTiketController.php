<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListTiketController extends Controller
{
    public function index()
    {
        // Data tiket konser
        $tiketKonser = [
            'blackpink' => [
                'nama' => 'Konser Blackpink',
                'lokasi' => 'Seoul, Korea Selatan',
                'tanggal' => '12 Juni 2024',
                'harga' => 'Rp 1.500.000'
            ],
            'bts' => [
                'nama' => 'Konser BTS',
                'lokasi' => 'Los Angeles, Amerika Serikat',
                'tanggal' => '25 Agustus 2024',
                'harga' => 'Rp 2.000.000'
            ],
            // Tambahkan konser lainnya di sini
        ];

        return view('listtiket', compact('tiketKonser'));
    }
}
