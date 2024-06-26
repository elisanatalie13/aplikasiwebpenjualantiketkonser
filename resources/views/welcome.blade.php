<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('images/logoico.ico') }}">
        <title>Hartix</title>
        <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
<body class="bg-fixed bg-cover bg-center h-screen" style="background-image: url('/images/konser.png')">
<div class="navbar bg-transparant">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-10">
    </div>
    <a class="btn btn-ghost text-4xl font-bold text-white">HARTIX</a>
    <ul class="menu menu-horizontal px-1 text-lg text-white">
      <li><a href="beranda">Home</a></li>
      <li><a href="tentang">Tentang</a></li>
    </ul>
  </div>
  <div class="navbar-end">
  <ul class="menu menu-horizontal px-1 text-lg text-white">
    <li>
        <details>
          <summary>Options</summary>
          <ul class="p-2 text-black">
            <li><a href="login">Login</a></li>
            <li><a href="daftar">Daftar</a></li>
          </ul>
        </details>
      </li>
    </ul>
  </div>
</div>
<div class="flex flex-col py-44 px-6 text-white">
  <div class="flex flex-col">
    <h1 class="text-5xl">Selamat datang</h1>
    <h1 class="text-5xl font-bold mt-10">Saksikan Konser Hivi Mendatang</h1>
  </div>
</div>
</head>
<footer class="footer footer-center p-10 text-white">
        <aside>
            <p class="font-bold">
                Alamat: Jl. Ahmad Yani Batam Kota, <br> Kota Batam, Kepulauan Riau
            </p>
            <p>Copyright © 2024 - All rights reserved</p>
        </aside>
    </footer>
</html>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
             integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
       
    </body>
</html>
