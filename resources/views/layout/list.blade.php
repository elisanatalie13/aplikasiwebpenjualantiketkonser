<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'My App')</title>
</head>
<body class="bg-yellow-100">
    <header>
        @include('components.headers')
    </header>

    <h1>List Produk</h1>
    <div class="container">
        <main>
            @yield('contect')
        </main>

    </div>

    <footer>
        @include('components.headers')
    </footer>
</body>
</html>