// ticket.blade.php

@extends('layouts.app')

@section('content')
    <!-- Content -->
    <main class="flex justify-center py-20">
        <!-- Profile Card -->
        <div class="bg-[#A69279] w-64 h-64 rounded p-8 text-white">
            <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" alt="User Avatar" class="w-full h-full rounded-full mx-auto" />
            <h2 class="text-lg font-bold">John Doe</h2>
            <p class="text-sm">john.doe@example.com</p>
            <button class="bg-[#4b5563] text-white font-bold py-2 px-4 rounded">Informasi Akun</button>
        </div>
        <!-- Table -->
        <div class="w-full max-w-md">
            <table class="table w-full">
                <thead>
                    <tr>
                        <th>No Tiket</th>
                        <th>Kategori</th>
                        <th>Tanggal Konser</th>
                        <th>Status</th>
                        <th>Tanggal Transaksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tickets as $ticket)
                        <tr>
                            <td>{{ $ticket['no'] }}</td>
                            <td>{{ $ticket['kategori'] }}</td>
                            <td>{{ $ticket['tanggal_konser'] }}</td>
                            <td>{{ $ticket['status'] }}</td>
                            <td>{{ $ticket['tanggal_transaksi'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    <!-- Content -->
@endsection