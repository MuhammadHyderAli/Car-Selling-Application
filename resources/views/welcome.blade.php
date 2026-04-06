@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-6 lg:px-8">

    <section class="py-16 lg:py-24 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div class="max-w-xl">
            <h1 class="text-5xl lg:text-7xl font-bold leading-[1.1] tracking-tight">
                The Future <br>
                of <span class="text-[#a8c0f0]">Car</span> <br>
                <span class="text-[#a8c0f0]">Ownership</span>
            </h1>
            <p class="mt-6 text-zinc-600 dark:text-gray-400 text-lg leading-relaxed max-w-md">
                Experience the new standard of premium automotive retail. Curated, frictionless, and exclusively digital.
            </p>
            <div class="mt-10 flex flex-wrap gap-4">
                <a href="#" class="bg-[#a8c0f0] hover:bg-[#92ade0] text-black font-semibold py-3 px-8 rounded-md transition">
                    Buy a Car
                </a>
                <a href="#" class="border border-zinc-300 dark:border-white/20 hover:border-zinc-400 dark:border-white/40 text-zinc-900 dark:text-white font-medium py-3 px-8 rounded-md transition">
                    Sell or Trade-in
                </a>
            </div>
        </div>

        <div class="relative w-full aspect-[4/3] rounded-2xl overflow-hidden bg-gradient-to-tr from-[#1a1c23] to-[#2a2d36]">
            <img src="{{ asset('/models/carphoto/mainphoto.png') }}" alt="Premium EV" class="w-full h-full object-cover opacity-90 mix-blend-lighten">

            <div class="absolute bottom-6 right-6 backdrop-blur-xl bg-black/25 dark:bg-black/40 border border-zinc-200 dark:border-white/10 rounded-xl p-5 shadow-2xl">
                <div class="space-y-3 text-sm">
                    <div class="flex justify-between gap-8 border-b border-zinc-200 dark:border-white/10 pb-2">
                        <span class="text-zinc-600 dark:text-gray-400 text-xs tracking-wider uppercase">0-60 Mph</span>
                        <span class="text-zinc-900 dark:text-white font-bold">2.6s</span>
                    </div>
                    <div class="flex justify-between gap-8 border-b border-zinc-200 dark:border-white/10 pb-2">
                        <span class="text-zinc-600 dark:text-gray-400 text-xs tracking-wider uppercase">Top Speed</span>
                        <span class="text-zinc-900 dark:text-white font-bold text-[#a8c0f0]">161mph</span>
                    </div>
                    <div class="flex justify-between gap-8">
                        <span class="text-zinc-600 dark:text-gray-400 text-xs tracking-wider uppercase">Range</span>
                        <span class="text-zinc-900 dark:text-white font-bold text-[#a8c0f0]">310mi</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="flex justify-between items-end mb-10">
            <div>
                <h2 class="text-2xl font-bold">Latest Arrivals</h2>
                <p class="text-zinc-600 dark:text-gray-400 text-sm mt-1">Recently added exhibits to our gallery.</p>
            </div>
            <div class="flex gap-2">
                <button class="w-10 h-10 rounded-full border border-zinc-200 dark:border-white/10 flex items-center justify-center hover:bg-white/5 transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button class="w-10 h-10 rounded-full border border-zinc-200 dark:border-white/10 flex items-center justify-center hover:bg-white/5 transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white dark:bg-[#151518] border border-zinc-200 dark:border-white/5 rounded-xl overflow-hidden hover:border-zinc-200 dark:border-white/10 transition group">
                <div class="relative aspect-[16/10] bg-zinc-100 dark:bg-[#1a1a1e] p-4">
                    <span class="absolute top-4 left-4 bg-orange-500/20 text-orange-400 text-[10px] font-bold px-2 py-1 rounded border border-orange-500/30 flex items-center gap-1">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        CERTIFIED
                    </span>
                    <img src="{{ asset('/models/carphoto/latestarrivals1.png') }}" class="w-full h-full object-contain mix-blend-lighten group-hover:scale-105 transition duration-500" alt="Porsche">
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-1">
                        <h3 class="font-bold text-lg">Porsche 911 Turbo S</h3>
                        <span class="text-[#a8c0f0] font-semibold">$215,900</span>
                    </div>
                    <p class="text-zinc-600 dark:text-gray-500 text-xs mb-6">2023 • 1,240 mi</p>
                    <div class="grid grid-cols-2 gap-4 text-xs">
                        <div>
                            <p class="text-zinc-600 dark:text-gray-500 mb-1 uppercase tracking-wider text-[10px]">Drivetrain</p>
                            <p class="font-medium">AWD</p>
                        </div>
                        <div>
                            <p class="text-zinc-600 dark:text-gray-500 mb-1 uppercase tracking-wider text-[10px]">Horsepower</p>
                            <p class="font-medium">640 HP</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-[#151518] border border-zinc-200 dark:border-white/5 rounded-xl overflow-hidden hover:border-zinc-200 dark:border-white/10 transition group">
                <div class="relative aspect-[16/10] bg-zinc-100 dark:bg-[#1a1a1e] p-4">
                    <img src="https://images.unsplash.com/photo-1560958089-b8a1929cea89?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-contain mix-blend-lighten group-hover:scale-105 transition duration-500" alt="Tesla">
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-1">
                        <h3 class="font-bold text-lg">Tesla Model S Plaid</h3>
                        <span class="text-[#a8c0f0] font-semibold">$109,000</span>
                    </div>
                    <p class="text-zinc-600 dark:text-gray-500 text-xs mb-6">2024 • New</p>
                    <div class="grid grid-cols-2 gap-4 text-xs">
                        <div>
                            <p class="text-zinc-600 dark:text-gray-500 mb-1 uppercase tracking-wider text-[10px]">Acceleration</p>
                            <p class="font-medium">0-60 in 1.99s</p>
                        </div>
                        <div>
                            <p class="text-zinc-600 dark:text-gray-500 mb-1 uppercase tracking-wider text-[10px]">Engine</p>
                            <p class="font-medium">Tri Motor Electric</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-[#151518] border border-zinc-200 dark:border-white/5 rounded-xl overflow-hidden hover:border-zinc-200 dark:border-white/10 transition group">
                <div class="relative aspect-[16/10] bg-zinc-100 dark:bg-[#1a1a1e] p-4">
                     <span class="absolute top-4 left-4 bg-yellow-500/20 text-yellow-400 text-[10px] font-bold px-2 py-1 rounded border border-yellow-500/30">
                        VIP LISTING
                    </span>
                    <img src="https://images.unsplash.com/photo-1614026480209-cd9934144671?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-contain mix-blend-lighten group-hover:scale-105 transition duration-500" alt="Audi">
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-1">
                        <h3 class="font-bold text-lg">Audi RS e-tron GT</h3>
                        <span class="text-zinc-900 dark:text-white font-semibold">Reserve</span>
                    </div>
                    <p class="text-zinc-600 dark:text-gray-500 text-xs mb-6">2023 • 4,500 mi</p>
                    <div class="grid grid-cols-2 gap-4 text-xs">
                        <div>
                            <p class="text-zinc-600 dark:text-gray-500 mb-1 uppercase tracking-wider text-[10px]">Color</p>
                            <p class="font-medium">Kemora Gray</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 text-center">
        <h2 class="text-xl font-bold uppercase tracking-widest mb-4">How It Works</h2>
        <p class="text-zinc-600 dark:text-gray-400 text-sm max-w-2xl mx-auto mb-16">
            Buying a high-end vehicle should be as refined as the car itself. Our process is designed for absolute convenience.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 bg-[#1a1c23] rounded-2xl border border-zinc-200 dark:border-white/5 flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-[#a8c0f0]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                </div>
                <h4 class="font-bold text-sm mb-3">1. EXPLORE</h4>
                <p class="text-zinc-600 dark:text-gray-500 text-xs leading-relaxed px-4">
                    Browse our curated gallery of pre-inspected, high performance electric and luxury vehicles from anywhere.
                </p>
            </div>
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 bg-[#1a1c23] rounded-2xl border border-zinc-200 dark:border-white/5 flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-[#a8c0f0]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h4 class="font-bold text-sm mb-3">2. SECURE</h4>
                <p class="text-zinc-600 dark:text-gray-500 text-xs leading-relaxed px-4">
                    Instantly lock your vehicle with a secure deposit and complete digital documentation in minutes.
                </p>
            </div>
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 bg-[#1a1c23] rounded-2xl border border-zinc-200 dark:border-white/5 flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-[#a8c0f0]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path></svg>
                </div>
                <h4 class="font-bold text-sm mb-3">3. DELIVERY</h4>
                <p class="text-zinc-600 dark:text-gray-500 text-xs leading-relaxed px-4">
                    Your new vehicle is delivered via premium enclosed transport directly to your driveway, at your convenience.
                </p>
            </div>
        </div>
    </section>

    <section class="py-16 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        <div class="grid grid-cols-2 gap-4">
            <div class="bg-white dark:bg-[#151518] p-6 rounded-xl border border-zinc-200 dark:border-white/5 hover:bg-zinc-100 dark:bg-[#1a1a1e] transition">
                <div class="w-8 h-8 rounded bg-orange-500/10 text-orange-400 flex items-center justify-center mb-4">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h5 class="font-bold text-sm mb-2">300-Point Inspection</h5>
                <p class="text-zinc-600 dark:text-gray-500 text-[11px] leading-relaxed">Every vehicle undergoes an exhaustive mechanical and cosmetic audit by master technicians.</p>
            </div>

            <div class="bg-white dark:bg-[#151518] p-6 rounded-xl border border-zinc-200 dark:border-white/5 hover:bg-zinc-100 dark:bg-[#1a1a1e] transition">
                <div class="w-8 h-8 rounded bg-blue-500/10 text-blue-400 flex items-center justify-center mb-4">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                </div>
                <h5 class="font-bold text-sm mb-2">Immutable History</h5>
                <p class="text-zinc-600 dark:text-gray-500 text-[11px] leading-relaxed">Blockchain-verified service history and provenance records for complete transparency.</p>
            </div>

            <div class="bg-white dark:bg-[#151518] p-6 rounded-xl border border-zinc-200 dark:border-white/5 hover:bg-zinc-100 dark:bg-[#1a1a1e] transition">
                <div class="w-8 h-8 rounded bg-indigo-500/10 text-indigo-400 flex items-center justify-center mb-4">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
                </div>
                <h5 class="font-bold text-sm mb-2">24/7 Concierge</h5>
                <p class="text-zinc-600 dark:text-gray-500 text-[11px] leading-relaxed">A dedicated automotive advisor is assigned to you from search to post-delivery maintenance.</p>
            </div>

            <div class="bg-white dark:bg-[#151518] p-6 rounded-xl border border-zinc-200 dark:border-white/5 hover:bg-zinc-100 dark:bg-[#1a1a1e] transition">
                <div class="w-8 h-8 rounded bg-emerald-500/10 text-emerald-400 flex items-center justify-center mb-4">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h5 class="font-bold text-sm mb-2">Digital First</h5>
                <p class="text-zinc-600 dark:text-gray-500 text-[11px] leading-relaxed">The entire trade-in, financing, and purchase journey is 100% paperless and location-independent.</p>
            </div>
        </div>

        <div>
            <h2 class="text-3xl font-bold mb-6">ENGINEERED FOR <br><span class="text-[#eab308]">ABSOLUTE TRUST</span></h2>
            <p class="text-zinc-600 dark:text-gray-400 text-sm leading-relaxed mb-8">
                At Kinetic Gallery, we don't just sell cars; we curate automotive experiences. We believe that buying a premium vehicle shouldn't be a negotiation—it should be a celebration of engineering excellence.
            </p>

            <blockquote class="border-l-2 border-[#a8c0f0] pl-6 py-1 mb-8">
                <p class="text-zinc-700 dark:text-gray-300 text-sm italic mb-3">"The most frictionless car purchase I've ever experienced. The digital showroom is leagues ahead of traditional luxury dealerships."</p>
                <footer class="text-xs font-bold">— Marcus V., Taycan Owner</footer>
            </blockquote>

            <a href="#" class="text-[#a8c0f0] text-sm font-semibold hover:text-zinc-900 dark:hover:text-white transition flex items-center gap-2">
                LEARN MORE ABOUT OUR QUALITY STANDARD <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
    </section>

    <section class="py-16 mb-12">
        <div class="bg-zinc-100 dark:bg-[#1a1a1e] rounded-3xl p-16 text-center border border-zinc-200 dark:border-white/5 relative overflow-hidden">
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-96 h-96 bg-[#a8c0f0] opacity-[0.03] blur-3xl rounded-full pointer-events-none"></div>

            <h2 class="text-3xl lg:text-4xl font-bold mb-4 relative z-10">READY TO ENTER THE GALLERY?</h2>
            <p class="text-zinc-600 dark:text-gray-400 text-sm mb-8 relative z-10">Join the future of automotive luxury. Sign up for early access to upcoming arrivals.</p>

            <form class="max-w-md mx-auto flex gap-3 relative z-10">
                <input type="email" placeholder="ENTER YOUR EMAIL" class="flex-grow bg-[#fafafa] dark:bg-[#0f0f11] border border-zinc-200 dark:border-white/10 rounded-md px-4 py-3 text-sm focus:outline-none focus:border-[#a8c0f0] transition text-zinc-900 dark:text-white placeholder-gray-600">
                <button type="submit" class="bg-[#a8c0f0] hover:bg-[#92ade0] text-black font-semibold px-6 py-3 rounded-md text-sm transition whitespace-nowrap">
                    GET STARTED
                </button>
            </form>
        </div>
    </section>

</div>
@endsection
