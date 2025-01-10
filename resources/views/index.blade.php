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

<body class="font-coldiac text-primaryDark antialiased bg-gray-50 scroll-smooth">
    <header class="w-full h-full mt-12">
        @include('partials.topbar')
    </header>
    <main class="mt-16 flex flex-col">
        @include('partials.home')
        @include('partials.shop')
        @include('partials.blog')
        @include('partials.pages')
    </main>
    <footer class="mt-40">
        @include('partials.footer')
    </footer>

    <span id="scrollToTopButton"
        class="fixed bottom-4 right-4 bg-primaryDark p-2 rounded-full opacity-0 translate-y-4 transition-all animate-bounce duration-500 ease-in-out">
        <a href="#home" class="text-white">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
            </svg>
        </a>
    </span>

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

        const scrollToTopButton = document.getElementById('scrollToTopButton');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                scrollToTopButton.classList.remove('opacity-0', 'translate-y-4');
                scrollToTopButton.classList.add('opacity-100', 'translate-y-0');
            } else {
                scrollToTopButton.classList.remove('opacity-100', 'translate-y-0');
                scrollToTopButton.classList.add('opacity-0', 'translate-y-4');
            }
        });
    </script>
</body>

</html>
