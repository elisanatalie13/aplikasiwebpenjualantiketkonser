<html>
<head>
    <title>pemebelian</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/styles/tailwindcss3.4.1.css">
    <link rel="shortcut icon" href="{{ asset('images/logoico.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
    @include('components.navbar')
    <main>
        <div class="card lg:card-side bg-[#4B3621] shadow-xl my-8 w-11/12">
            <figure>
                <img src="images/Hivi.jpg" class="w-full" alt="Album Cover"/>
            </figure>
            <div class="card-body text-white">
                <table class="table gap-y-10 border-none">
                    <tr class="border-none">
                        <td class="text-end font-extrabold text-white">Nama</td>
                        <td class="text-center font-bold text-white">:</td>
                        <td>
                            <label class="bg-slate-300 input flex items-center gap-2">
                                <input type="text" class="grow border-none bg-white text-black" value="">
                            </label>
                        </td>
                    </tr>
                    <tr class="border-none">
                        <td class="text-end font-bold text-white">Email</td>
                        <td class="text-center font-bold text-white">:</td>
                        <td>
                            <label class="bg-slate-300 input flex items-center gap-2">
                                <input type="text" class="grow border-none bg-slate-100 text-black" value="">
                            </label>
                        </td>
                    </tr>
                    <tr class="border-none">
                        <td class="text-end font-bold text-white">Kategori Tiket</td>
                        <td class="text-center font-bold text-white">:</td>
                        <td>
                            <label class="bg-slate-300 input flex items-center gap-2">
                                <select class="grow border-none bg-slate-300 text-black">
                                    <option value="Rp 10.000">ekonomi</option>
                                    <option value="Rp 30.000">vip</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </label>
                        </td>
                    </tr>
                    <tr class="border-none">
                        <td class="text-end font-bold text-white">Jumlah Tiket</td>
                        <td class="text-center font-bold text-white">:</td>
                        <td>
                            <label class="bg-slate-300 input flex items-center gap-2">
                                <input type="text" class="grow border-none bg-white text-black" value="">
                            </label>
                        </td>
                    </tr>
                    <tr class="border-none">
                      <td class="text-end font-bold text-white">Harga</td>
                      <td class="text-center font-bold text-white">:</td>
                      <td>
                          <label class="bg-slate-300 input flex items-center gap-2">
                              <input type="text" class="grow border-none bg-white text-black" value="">
                          </label>
                      </td>
                  </tr>
                  <tr class="border-none">
                    <td class="text-end font-bold text-white">Harga total</td>
                    <td class="text-center font-bold text-white">:</td>
                    <td>
                        <label class="bg-slate-300 input flex items-center gap-2">
                            <input type="text" class="grow border-none bg-white text-black" value="">
                        </label>
                    </td>
                </tr>
                </table>
                <div class="card-actions justify-center">
                <a href="pembayaran" class="bg-gray-200 text-black rounded-md px-3 py-2 text-sm font-bold" aria-current="page">Beli Tiket</a>
                </div>
            </div>
        </div>
    </main>
    <!-- Content -->

    <!-- Footer -->
    <footer class="footer footer-center p-10 bg-[#A69279] text-black">
        <aside>
            <p class="font-bold">
                Alamat: Jl. Ahmad Yani Batam Kota, <br> Kota Batam, Kepulauan Riau
            </p>
            <p>Copyright © 2024 - All rights reserved</p>
        </aside>
    </footer>
    <!-- Footer -->
</body>
</html>