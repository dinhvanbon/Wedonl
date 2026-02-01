<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title', '2PPSS Sneakers')</title>
</head>
<body>
    <header>
        <h1>2PPSS Sneakers</h1>
        <nav>
            <a href="{{ route('home') }}">Home</a> |
            <a href="{{ route('products.index') }}">Products</a> |
            <a href="{{ route('cart.index') }}">Cart</a> |
            <a href="{{ route('blogs.index') }}">Blog</a> |
            <a href="{{ route('contact') }}">Contact</a>
        </nav>
    </header>

    <main>
        @if(session('success'))
            <div style="color:green">{{ session('success') }}</div>
        @endif
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2025 2PPSS Sneakers</p>
    </footer>
</body>
</html>
