<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="{{ asset('images/logoico.ico') }}">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="/styles/tailwindcss3.4.1.css">
  <style>
    body, html {
      height: 100%;
      display: flex;
      flex-direction: column;
      margin: 0;
    }
    .content {
      flex: 1;
    }
    .footer {
      background-color: #f3f4f6;
      padding: 1rem;
      text-align: center;
    }
  </style>
</head>
<body class="bg-yellow-100">
  <div class="container mx-auto max-w-md px-10 py-10 bg-yellow-950 mt-12 rounded-lg content">
    <h1 class="font-bold text-center text-2xl">Login</h1>
    <form action="login" method="post" class="place-items-center text-black">
      <label for="username" class="block mt-4 mb-2 text-poppins font-medium text-black-500">Username</label>
      <input type="text" id="username" name="username" class="bg-white border-gray-300 text-black-900 text-sm rounded-lg focus:ring-black-500 focus:border-gray-500 block w-full p-2.5" required><br>
      <label for="password" class="block mt-4 mb-2 text-poppins font-medium text-black-500">Password</label>
      <input type="password" id="password" name="password" class="bg-white border-gray-300 text-black-900 text-sm rounded-lg focus:ring-black-500 focus:border-gray-500 block w-full p-2.5" required><br>
      <button type="submit" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-gray-300 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm sm:w-full px-2 py-2.5 mx-auto">Masuk</button>
    </form>
  </div>
  <div class="footer">
    @include('components.footer')
  </div>
</body>
</html>
<html>
    <h3><b>Login</b></h3>
    <input type="text"><br>
    <input type="password"><br><br>
    <button>Login</button>
</html>