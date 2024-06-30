<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/logoico.ico') }}">
    <title>Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar bg-[#A69279]">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content font-bold mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
              <li><a>Home</a></li>
      <li><a>Tentang</a></li>
      </ul>
    </div>
    <a class="btn btn-ghost text-xl font-bold">Hartix</a>
  </div>
  <div class="navbar-start absolute left-32 hidden lg:flex">
    <ul class="menu menu-horizontal px-1 font-bold">
      <li><a>Home</a></li>
      <li><a>Tentang</a></li>
    </ul>
  </div>
  <div class="navbar-end">
    <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
          <img alt="Tailwind CSS Navbar component" src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
        </div>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li>
          <a class="justify-between">
            Profile
            <span class="badge">New</span>
          </a>
        </li>
        <li><a>Settings</a></li>
        <li><a>Logout</a></li>
      </ul>
    </div>
  </div>
</div>
    <!-- Navbar -->

    <!-- Content --> 
    <main>
        <div class="card lg:card-side bg-[#4B3621] shadow-xl my-10 w-11/12">
            <figure>
                <img src="images/Hivi.jpg" class="w-full" alt="Album Cover"/>
            </figure>
            <div class="card-body text-white">
                <table class="table gap-y-10 border-none">
                    <tr class="border-none">
            <td class="text-end font-bold text-white">Kategori Tiket</td>
            <td class="text-center font-bold text-white">:</td>
            <td>
                <label class="input flex items-center text-white gap-2">
                    <input type="text" class="grow border-none bg-slate-50 text-black"  value="Kategori"/>
                </label>
            </td>
        </tr>
        <tr class="border-none">
            <td class="text-end font-bold text-white">Jumlah</td>
            <td class="text-center font-bold text-white">:</td>
            <td>
                <label class="input flex items-center text-white gap-2">
                    <input type="text" class="grow border-none bg-slate-50 text-black"  value=""/>
                </label>
            </td>
        </tr>

        <tr class="border-none">
            <td class="text-end font-bold text-white">Harga Total</td>
            <td class="text-center font-bold text-white">:</td>
            <td>
                <label class="input flex items-center text-white gap-2">
                    <input type="text" class="grow border-none bg-slate-50 text-black"  value=""/>
                </label>
            </td>
        </tr>

        <tr class="border-none">
            <td class="text-end font-bold text-white">Metode Pembayaran</td>
            <td class="text-center font-bold text-white">:</td>
            <td>
                <label class="input flex items-center text-white gap-2">
                    <input type="text" class="grow border-none bg-slate-50 text-black"  value=""/>
                </label>
            </td>
        </tr>

        <tr class="border-none">
            <td class="text-end font-bold text-white">No. Dana</td>
            <td class="text-center font-bold text-white">:</td>
            <td>
                <label class="input flex items-center text-white gap-2">
                    <input type="text" class="grow border-none bg-slate-50 text-black"  value=""/>
                </label>
            </td>
        </tr>

        <tr class="border-none">
            <td class="text-end font-bold text-white">Bukti Pembayaran</td>
            <td class="text-center font-bold text-white">:</td>
            <td>
                <label class="input bg-transparent flex justify-center items-center text-white gap-2">
                    <input type="file" class="file-input file-input-bordered border-white w-full" />
                </label>
            </td>
        </tr>
    </table>

    <div class="card-actions justify-end">
    <a href="status" class="bg-gray-200 text-black rounded-md px-3 py-2 text-sm font-bold" aria-current="page">Lihat Tiket</a>
    </div>
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