<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KINETIC GALLERY - AUTHENTICATE</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-[#0f0f11] text-white antialiased min-h-screen">

    <main class="flex min-h-screen">
        
        <div class="hidden lg:flex w-3/5 relative overflow-hidden bg-[#0a0a0c]">
            <img src="https://images.unsplash.com/photo-1565064012199-c537fe6fb4b5?q=80&w=927&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Premium Acquisition" class="absolute inset-0 w-full h-full object-cover opacity-60 mix-blend-lighten">
            <div class="absolute inset-0 bg-gradient-to-r from-black via-transparent to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent"></div>

            <a href="{{ url('/') }}" class="absolute top-10 left-10 flex items-center gap-1.5 z-10">
                <span class="text-xl font-bold tracking-widest text-white">KINETIC</span>
                <span class="text-sm font-bold uppercase tracking-widest text-[#a8c0f0]">Gallery</span>
            </a>

            <div class="absolute bottom-20 left-20 max-w-md z-10">
                <span class="inline-block border border-[#eab308]/30 bg-[#eab308]/10 text-[#eab308] text-[9px] font-bold uppercase tracking-widest px-2.5 py-1.5 rounded mb-6">
                    Premium Access
                </span>
                <h2 class="text-5xl font-bold tracking-tight text-white leading-[1.05] mb-6">
                    THE FUTURE OF THE SHOWROOM.
                </h2>
                <p class="text-[#a8c0f0] text-sm leading-relaxed">
                    Experience a curated collection of automotive engineering where every curve is captured in cinematic detail.
                </p>
            </div>

            <div class="absolute bottom-6 left-6 text-xs text-[#a8c0f0]/80 font-medium">
                © {{ date('Y') }} KINETIC GALLERY. ALL RIGHTS RESERVED.
            </div>
        </div>

        <div class="w-full lg:w-2/5 flex flex-col justify-center bg-[#151518] px-10 md:px-16 lg:px-16 xl:px-20 relative">
            
            <button type="button" class="absolute top-6 right-6 text-[#a8c0f0] hover:text-white transition" aria-label="Help">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </button>

            <div class="w-full max-w-sm mx-auto">
                
                <div class="mb-10 text-center lg:text-left">
                    <h1 class="text-3xl font-bold uppercase tracking-tight text-white mb-2">AUTHENTICATE</h1>
                    <p class="text-sm text-[#a8c0f0] leading-relaxed">Access your private kinetic vault</p>
                </div>

                <form  method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label class="block text-[10px] text-[#a8c0f0] font-bold uppercase tracking-widest mb-2.5">Workstation Email</label>
                        <input type="email" name="email" placeholder="name@kinetic-gallery.com" class="w-full bg-[#0f0f11] border border-white/10 rounded-lg py-3.5 px-4 text-sm text-white placeholder-[#a8c0f0]/45 focus:outline-none focus:border-[#a8c0f0] transition">
                    </div>

                    <div>
                        <div class="flex items-center justify-between mb-2.5">
                            <label class="block text-[10px] text-[#a8c0f0] font-bold uppercase tracking-widest">Security Key</label>
                            <a href="#" class="text-[10px] text-[#a8c0f0] hover:text-white font-bold uppercase tracking-widest transition">Forgot Key?</a>
                        </div>
                        <input type="password" name="password" placeholder="••••••••••••••" class="w-full bg-[#0f0f11] border border-white/10 rounded-lg py-3.5 px-4 text-sm text-white placeholder-[#a8c0f0]/45 focus:outline-none focus:border-[#a8c0f0] transition">
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember" class="appearance-none w-4 h-4 border border-white/20 rounded-[3px] bg-[#0f0f11] checked:bg-[#a8c0f0] checked:border-[#a8c0f0] transition relative cursor-pointer after:content-[''] after:absolute after:hidden checked:after:block after:left-[4px] after:top-[1px] after:w-[6px] after:h-[10px] after:border-r-2 after:border-b-2 after:border-black after:rotate-45">
                        <label for="remember" class="ml-3 block text-xs text-gray-400 cursor-pointer hover:text-white transition">
                            Remember this workstation
                        </label>
                    </div>

                    <button type="submit" class="w-full bg-[#a8c0f0] hover:bg-[#92ade0] text-black font-bold uppercase tracking-widest text-xs py-4 rounded-lg transition mt-4 flex justify-center items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path></svg>
                        SIGN IN
                    </button>
                </form>
                <p class="mt-12 text-center text-xs text-white font-medium">
                    New technician? 
                    <a href="{{ route('register') }}" class="font-bold text-[#a8c0f0] hover:text-white transition uppercase tracking-widest ml-1">Register Workstation</a>
                </p>

            </div>

            <div class="absolute bottom-6 right-6 text-xs text-gray-500 font-medium space-x-6 flex items-center">
                <a href="#" class="hover:text-white transition">PRIVACY POLICY</a>
                <a href="#" class="hover:text-white transition">TERMS OF SERVICE</a>
                <a href="#" class="hover:text-white transition">CONTACT SUPPORT</a>
            </div>

        </div>

    </main>

</body>
</html>