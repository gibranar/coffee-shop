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

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('styles')
</head>

<body class="font-sans antialiased bg-gray-50 container mx-auto scroll-smooth">
    <header class="w-full h-full mt-12">
        @include('partials.topbar')
    </header>
    <main class="mt-16 flex flex-col">
        @include('partials.home')
        @include('partials.shop')
    </main>
    <footer>
        @include('partials.footer')
    </footer>

    @yield('scripts')
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>

</html>
