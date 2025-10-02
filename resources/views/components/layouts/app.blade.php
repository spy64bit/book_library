<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    @vite('resources/css/app.css')
</head>

<body class="antialiased bg-gray-100 min-h-screen flex flex-col">
    <header>
        @include('components.header')
    </header>
    <div class="container mx-auto mt-8 flex-1">
        @yield('content')
    </div>
    <footer>
        @include('components.footer')
    </footer>
</body>

</html>
