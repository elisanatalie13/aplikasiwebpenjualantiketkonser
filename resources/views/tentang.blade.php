<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tentang</title>
  <link rel="stylesheet" href="https://cdn.tailwindcss.com">
  <link rel="stylesheet" href="/styles/tailwindcss3.4.1.css">
  <link rel="shortcut icon" href="{{ asset('images/logoico.ico') }}">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>
<body class="bg-yellow-100">
  @include('components.navbar')

  <div class="bg-brown-600 min-h-screen flex flex-col justify-center items-center text-center text-black">
    <div class="max-w-md p-6 bg-brown-600 rounded-lg shadow-lg">
      <p><strong>Judul Proyek:</strong> Aplikasi Web Penjualan Tiket Konser</p>
      <div class="p-4 bg-white rounded-lg shadow-md my-4">
        <p><strong>Deskripsi Umum:</strong></p>
        <p>Aplikasi Web Penjualan Tiket Konser adalah aplikasi yang menyediakan akses yang mudah untuk menemukan dan membeli tiket untuk berbagai jenis konser secara online.</p>
      </div>
      <div class="p-4 bg-white rounded-lg shadow-md my-4">
        <p><strong>Manajer Proyek:</strong></p>
        <p>Rina Yulius</p>
      </div>
      <div class="p-4 bg-white rounded-lg shadow-md my-4">
        <p><strong>Anggota Kelompok:</strong></p>
        <ul class="list-disc pl-4">
          <li>312312010 - Azvinarti</li>
          <li>312312017 - Elisa Natalie Butar Butar</li>
          <li>312312019 - Esharani Janifitz</li>
          <li>312312025 - Boni Mahanaim Siahaan</li>
        </ul>
      </div>
    </div>
  </div>

  <footer class="bg-gray-900 py-4 flex justify-between items-center text-white">
    @include('components.footer')
  </footer>

</body>
</html>
