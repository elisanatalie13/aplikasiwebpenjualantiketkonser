<html>
<head>
    <title>beranda</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/styles/tailwindcss3.4.1.css">
</head>
    @include('components.navbar')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-yellow rounded-lg overflow-hidden shadow-md">
            <img src="images/hivi1.jpg" alt="Concert" class="w-full">
        </div>

        <div class="bg-white rounded-lg overflow-hidden shadow-md col-span-2">
            <div class="p-4">
                <h1 class="text-3xl font-bold text-center mb-4">KONSER HIVI</h1>
                <ul>
                    <p class="border-b border-gray-200 py-5">Lokasi : Batam, Lap. Temenggung</p>
                    <p class="border-b border-gray-200 py-5">Tanggal : 14 September 2024</p>
                    <p class="border-b border-gray-200 py-5">Jam : 16:00 - 23:00 WIB</p>
                    <p class="border-b border-gray-200 py-5">Tiket Reguler - Rp 400.000</p>
                    <p class="border-b border-gray-200 py-5">Tiket VIP - Rp 800.000</p>
                </ul>
                <div class="flex justify-center">
                    <a href="#" class="bg-gray-200 text-black rounded-md px-3 py-2 text-sm font-bold" aria-current="page">Tiket Tersedia</a>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
</html>
