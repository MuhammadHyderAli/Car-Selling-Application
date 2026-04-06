<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kinetic Gallery - Premium Automotive Retail</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
    <script>
        (function () {
            try {
                var d = document.documentElement;
                if (localStorage.getItem('kg_theme') === 'light') d.classList.remove('dark');
                else d.classList.add('dark');
            } catch (e) {
                document.documentElement.classList.add('dark');
            }
        })();
    </script>
</head>
<body class="bg-[#fafafa] dark:bg-[#0f0f11] text-zinc-900 dark:text-gray-100 antialiased min-h-screen flex flex-col">

    <header class="border-b border-zinc-200 dark:border-white/5 sticky top-0 z-50 bg-white/90 dark:bg-[#0f0f11]/90 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ url('/') }}" class="text-xl font-bold tracking-widest flex items-center gap-1">
                        KINETIC<span class="text-[#a8c0f0]">GALLERY</span>
                    </a>
                </div>
                
                <nav class="hidden md:flex space-x-10">
                    <a href="{{ route('inventory') }}" class="text-zinc-600 dark:text-gray-400 hover:text-zinc-900 dark:hover:text-white transition text-sm font-medium pb-1 {{ request()->routeIs('inventory') ? 'text-zinc-900 dark:text-white border-b-2 border-[#a8c0f0]' : '' }}">Inventory</a>
                    <a href="{{ route('sell') }}" class="text-zinc-600 dark:text-gray-400 hover:text-zinc-900 dark:hover:text-white transition text-sm font-medium pb-1 {{ request()->routeIs('sell') ? 'text-zinc-900 dark:text-white border-b-2 border-[#a8c0f0]' : '' }}">Sell</a>
                    <a href="{{ route('tradein') }}" class="text-zinc-600 dark:text-gray-400 hover:text-zinc-900 dark:hover:text-white transition text-sm font-medium pb-1 {{ request()->routeIs('tradein') ? 'text-zinc-900 dark:text-white border-b-2 border-[#a8c0f0]' : '' }}">Trade-in</a>
                    <a href="{{ route('concierge') }}" class="text-zinc-600 dark:text-gray-400 hover:text-zinc-900 dark:hover:text-white transition text-sm font-medium pb-1 {{ request()->routeIs('concierge') ? 'text-zinc-900 dark:text-white border-b-2 border-[#a8c0f0]' : '' }}">Concierge</a>
                </nav>

                <div class="flex items-center gap-4 md:gap-6">
                    <button type="button" class="text-zinc-600 dark:text-gray-400 hover:text-zinc-900 dark:hover:text-white transition" aria-label="Search">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </button>
                    <a href="{{ route('login') }}" class="bg-[#a8c0f0] hover:bg-[#92ade0] transition text-black text-sm font-semibold py-2 px-5 rounded-md">
                        Sign In
                    </a>
                    <button type="button" id="kg-theme-toggle" class="rounded-md border border-zinc-300 bg-white/80 p-2 text-zinc-600 transition hover:bg-zinc-100 dark:border-white/15 dark:bg-transparent dark:text-gray-400 dark:hover:bg-white/5 dark:hover:text-white" aria-label="Switch to light theme">
                        <span class="block dark:hidden" title="Dark mode"><svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg></span>
                        <span class="hidden dark:block" title="Light mode"><svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg></span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="border-t border-zinc-200 dark:border-white/5 mt-20 pt-10 pb-8 bg-[#fafafa] dark:bg-[#0f0f11]">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center text-xs text-zinc-600 dark:text-gray-500">
                <div class="mb-4 md:mb-0 flex flex-col items-center md:items-start gap-2">
                    <span class="text-zinc-700 dark:text-gray-300 font-bold tracking-widest">KINETIC<span class="text-[#a8c0f0]">GALLERY</span></span>
                    <p>&copy; {{ date('Y') }} KINETIC GALLERY. ALL RIGHTS RESERVED.</p>
                </div>
                
                <div class="flex flex-wrap justify-center gap-x-8 gap-y-2">
                    <a href="#" class="text-zinc-600 dark:text-gray-500 hover:text-zinc-900 dark:hover:text-gray-300 transition">PRIVACY POLICY</a>
                    <a href="#" class="text-zinc-600 dark:text-gray-500 hover:text-zinc-900 dark:hover:text-gray-300 transition">TERMS OF SERVICE</a>
                    <a href="#" class="text-zinc-600 dark:text-gray-500 hover:text-zinc-900 dark:hover:text-gray-300 transition">COOKIE SETTINGS</a>
                    <a href="#" class="text-zinc-600 dark:text-gray-500 hover:text-zinc-900 dark:hover:text-gray-300 transition">SUPPORT</a>
                </div>

                <div class="flex space-x-4 mt-4 md:mt-0">
                    <button type="button" class="text-zinc-600 dark:text-gray-500 hover:text-zinc-900 dark:hover:text-gray-300"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg></button>
                    <button type="button" class="text-zinc-600 dark:text-gray-500 hover:text-zinc-900 dark:hover:text-gray-300"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg></button>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('kg-theme-toggle')?.addEventListener('click', function () {
            var root = document.documentElement;
            root.classList.toggle('dark');
            try {
                localStorage.setItem('kg_theme', root.classList.contains('dark') ? 'dark' : 'light');
            } catch (e) {}
        });
    </script>
</body>
</html>