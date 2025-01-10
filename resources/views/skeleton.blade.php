<!DOCTYPE html>
<html id="home" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Web Test Nexa</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-coldiac @yield('styleBody') text-primaryDark antialiased bg-gray-50 scroll-smooth">
    @yield('content')

    @yield('scripts')
</body>

</html>
