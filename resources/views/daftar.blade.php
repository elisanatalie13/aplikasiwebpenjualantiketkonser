<!DOCTYPE html>
<html>
<head>
  <title>Daftar</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="/styles/tailwindcss3.4.1.css">
  <style>
  </style>
<body class="bg-yellow-100">
  <div class="container mx-auto max-w-md px-10 py-10 bg-yellow-950 mt-12 rounded-lg">
    <h1 class="font-bold text-center text-2xl">Daftar</h1>
    <form action="login" method="post" class="place-items-center text-white">
    <label for="password" class="block mt-4 mb-2 text-poppins font-medium text-black-500">Username</label><br>
    <input type="password" id="password" name="password" class="bg-white border-gray-300 text-black-900 text-sm rounded-lg focus:ring-black-500 focus:border-gray-500 block w-full p-2.5" required><br>
    <label for="email" class="block mt-4 mb-2 text-poppins font-medium text-black-500">Email</label><br>
    <input type="email" id="email" name="email" class="bg-white border-gray-300 text-black-900 text-sm rounded-lg focus:ring-black-500 focus:border-blue-500 block w-full p-2.5" required><br>
    <label for="password" class="block mt-4 mb-2 text-poppins font-medium text-black-500">Password</label><br>
    <input type="password" id="password" name="password" class="bg-white border-gray-300 text-black-900 text-sm rounded-lg focus:ring-black-500 focus:border-gray-500 block w-full p-2.5" required><br>
    <button type="submit" class="text-black bg-gray-200 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-200 font-medium rounded-lg text-sm sm:w-center px-2 py-2.5 mx-36">Buat Akun</button>
</form>
</body>
  </div>
</html>
