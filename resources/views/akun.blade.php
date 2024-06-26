<html>
<head>
    <title>akun</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/styles/tailwindcss3.4.1.css">
    <link rel="shortcut icon" href="{{ asset('images/logoico.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
    @include('components.navbar')
    <div class="grid grid-cols-3 my-10">
      <div class="mx-auto">
        <img class="mask mask-square rounded-sm mx-auto" src="https://img.daisyui.com/images/stock/photo-1567653418876-5bb0e566e1c2.jpg" />
      <button class="btn w-full my-5">Informasi Akun</button>
      <button class="btn w-full">Tiket Saya</button>
      </div>
      <div class="">
        <h1 class="font-bold text-3xl text-center text-black">
          Informasi Akun
        </h1>

        <table class="table">
          <tr class="border-none">
            <td class="font-semibold text-white">Nama</td>
            <td>
              <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
            </td>
          </tr>
          <tr class="border-none">
            <td class="font-semibold text-white">Email</td>
            <td>
              <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
            </td>
          </tr>
          <tr class="border-none">
            <td class="font-semibold text-white">Password</td>
            <td>
              <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
            </td>
          </tr>
        </table>
        <div class="flex justify-center items-center">
          <button class="btn w-1/2 my-5">Simpan</button>
        </div>
      </div>
    </div>
    <!-- Content -->

     <!-- Footer -->
    <footer class="footer footer-center p-10 bg-[#A69279] ">
  <aside>
    
    <p class="font-bold">
      Alamat : Jl. Ahmad Yani Batam Kota, <br> Kota Batam, Kepulauan Riau
    </p> 
    <p>Copyright © 2024 - All right reserved</p>
  </aside> 
</footer>
    <!-- Footer -->
  
</body>
</html>