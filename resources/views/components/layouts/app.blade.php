<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css')
</head>

<body class="antialiased bg-gray-100">
    <header>
        @include('components.header')
    </header>
    <div>
        @yield('content')
    </div>
    <footer>
        @include('components.footer')
    </footer>
</body>

</html>
