<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        // Data untuk tabel ticket
        $tickets = [
            ['no' => '#0001', 'kategori' => 'Kategori', 'tanggal_konser' => '14/08/2024', 'status' => 'Aktif', 'tanggal_transaksi' => 'xx/xx/xxxx'],
            ['no' => '#0002', 'kategori' => 'Kategori', 'tanggal_konser' => '14/08/2024', 'status' => 'Aktif', 'tanggal_transaksi' => 'xx/xx/xxxx'],
            ['no' => '#0003', 'kategori' => 'Kategori', 'tanggal_konser' => '14/08/2024', 'status' => 'Aktif', 'tanggal_transaksi' => 'xx/xx/xxxx'],
        ];

        return view('ticket.index', compact('tickets'));
    }
}