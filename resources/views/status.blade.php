<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/styles/tailwindcss3.4.1.css">
    <link rel="shortcut icon" href="{{ asset('images/logoico.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <style>
        .bg-aqua-700 {
            background-color: #00FFFF; /* Adjust the aqua color as needed */
            background-blend-mode: overlay; /* Blend mode to overlay */
        }
    </style>
</head>
<body class="flex flex-col min-h-screen" style="background-color: #4B3621;">
    @include('components.navbar')
    <div class="flex-grow container mx-auto my-10" style="background-color: #4B3621;">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="mx-auto max-w-xs">
                <div class="flex flex-col items-center w-full">
                    <img src="images/Vector.jpg" alt="Vector" class="w-full mb-1 rounded-lg shadow-md hover:shadow-lg">
                    <button class="btn w-full mb-1 px-4 py-2 text-sm">Informasi Akun</button>
                    <button class="btn w-full px-4 py-2 text-sm">Tiket Saya</button>
                </div>
            </div>
            <div class="md:col-span-2">
                <table class="table w-full text-white">
                    <thead class="bg-gray-700 text-white">
                        <tr>
                            <th class="px-4 py-2">No Tiket</th>
                            <th class="px-4 py-2">Kategori</th>
                            <th class="px-4 py-2">Tanggal Konser</th>
                            <th class="px-4 py-2">Status</th>
                            <th class="px-4 py-2">Tanggal Transaksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $tickets = [
                            ['no' => '#0001', 'kategori' => 'Kategori', 'tanggal_konser' => '14/08/2024', 'status' => 'Aktif', 'tanggal_transaksi' => 'xx/xx/xxxx'],
                            ['no' => '#0002', 'kategori' => 'Kategori', 'tanggal_konser' => '14/08/2024', 'status' => 'Aktif', 'tanggal_transaksi' => 'xx/xx/xxxx'],
                            ['no' => '#0003', 'kategori' => 'Kategori', 'tanggal_konser' => '14/08/2024', 'status' => 'Aktif', 'tanggal_transaksi' => 'xx/xx/xxxx'],
                        ];

                        foreach ($tickets as $ticket) {
                          
                            echo "<tr class='bg-aqua-800 text-white'>
                                <td class='px-4 py-2'>{$ticket['no']}</td>
                                <td class='px-4 py-2'>{$ticket['kategori']}</td>
                                <td class='px-4 py-2'>{$ticket['tanggal_konser']}</td>
                                <td class='px-4 py-2'>{$ticket['status']}</td>
                                <td class='px-4 py-2'>{$ticket['tanggal_transaksi']}</td>
                              
                            </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('components.footer')
</body>
</html>
