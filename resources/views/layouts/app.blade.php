<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')
</head>
<body>
    <header>
        <!-- Burada header içeriği yer alacak -->
    </header>

    <main class="p-5 bg-red-400 min-h-screen">
        @yield('content')
    </main>

    <footer>
        <!-- Burada footer içeriği yer alacak -->
    </footer>
    @stack('scripts')
</body>
</html>
