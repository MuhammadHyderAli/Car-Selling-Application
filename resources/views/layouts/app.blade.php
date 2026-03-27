<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoMarket - Buy & Finance Cars</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased">

    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="text-2xl font-bold text-blue-600 tracking-tight">AutoMarket</a>
                </div>
                
                <div class="hidden md:block flex-1 max-w-2xl mx-8">
                    <div class="relative">
                        <input type="text" placeholder="Search make, model, or keyword" class="w-full bg-gray-100 rounded-full py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all">
                    </div>
                </div>

                <div class="flex items-center space-x-6 text-sm font-medium">
                    <a href="#" class="hover:text-blue-600 transition">Sell/Trade</a>
                    <a href="#" class="hover:text-blue-600 transition">Financing</a>
                    <a href="#" class="flex items-center hover:text-blue-600 transition">
                        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        Sign In
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-white border-t mt-12 py-8">
        <div class="max-w-7xl mx-auto px-4 text-center text-gray-500 text-sm">
            &copy; {{ date('Y') }} AutoMarket. All rights reserved.
        </div>
    </footer>

</body>
</html>