@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-10">

    <header class="mb-10 sm:mb-14">
        <div class="inline-block rounded border border-[#a8c0f0]/30 bg-[#a8c0f0]/10 px-2 py-1 text-[10px] font-bold uppercase tracking-widest text-[#a8c0f0]">
            Kinetic Gallery
        </div>
        <h1 class="mt-4 text-4xl font-bold uppercase leading-[1.05] tracking-tight text-zinc-900 dark:text-white md:text-5xl lg:text-6xl">
            Trade-In &amp; Upgrade<br>
            <span class="text-[#a8c0f0]">Your Perspective</span>
        </h1>
        <p class="mt-4 max-w-2xl text-sm leading-relaxed text-zinc-600 dark:text-gray-400">
            Appraise your current vehicle online, see equity in real time, and apply it toward your next acquisition—without leaving this screen.
        </p>

        <div class="group relative mt-8 overflow-hidden rounded-2xl border border-zinc-200 dark:border-white/10 bg-[#f4f4f5] dark:bg-[#0a0a0c] shadow-2xl shadow-black/40 sm:mt-10">
            <div class="aspect-[4/3] sm:aspect-[21/9] grid grid-cols-1 sm:grid-cols-2">
                <div class="relative min-h-[200px] overflow-hidden sm:min-h-0">
                    <img
                        src="{{ asset('/models/carphoto/latestarrivals3.png') }}"
                        alt="Heritage sports car"
                        class="h-full w-full object-cover object-center transition duration-700 group-hover:scale-[1.02]"
                        loading="eager"
                        decoding="async"
                    >
                    <div class="pointer-events-none absolute inset-0 bg-gradient-to-r from-black/70 via-black/20 to-transparent sm:from-black/60"></div>
                    <span class="absolute left-4 top-4 rounded border border-zinc-300 dark:border-white/15 bg-black/25 dark:bg-black/40 px-2 py-1 text-[9px] font-bold uppercase tracking-widest text-zinc-900 dark:text-white/90 backdrop-blur-sm">From</span>
                </div>
                <div class="relative min-h-[200px] overflow-hidden border-t border-zinc-200 dark:border-white/10 sm:border-t-0 sm:border-l sm:border-zinc-200 dark:border-white/10">
                    <img
                        src="https://images.unsplash.com/photo-1617788138017-80ad40651399?q=80&w=1400&auto=format&fit=crop"
                        alt="Modern electric performance"
                        class="h-full w-full object-cover object-center transition duration-700 group-hover:scale-[1.02]"
                        loading="lazy"
                        decoding="async"
                    >
                    <div class="pointer-events-none absolute inset-0 bg-gradient-to-l from-black/70 via-black/20 to-transparent sm:from-black/60"></div>
                    <span class="absolute right-4 top-4 rounded border border-zinc-300 dark:border-white/15 bg-black/25 dark:bg-black/40 px-2 py-1 text-[9px] font-bold uppercase tracking-widest text-zinc-900 dark:text-white/90 backdrop-blur-sm">To</span>
                </div>
            </div>
            <div class="absolute bottom-4 left-4 right-4 flex flex-wrap items-center justify-between gap-3 sm:bottom-6 sm:left-6 sm:right-auto">
                <div class="rounded-xl border border-zinc-300 dark:border-white/15 bg-white/90 dark:bg-[#0f0f11]/90 px-4 py-3 backdrop-blur-md">
                    <p class="text-[9px] font-bold uppercase tracking-widest text-zinc-600 dark:text-gray-500">Efficiency</p>
                    <p class="text-lg font-bold text-[#a8c0f0] sm:text-xl">100% Digital</p>
                </div>
            </div>
        </div>
    </header>

    <div class="grid grid-cols-1 gap-8 border-t border-zinc-200 dark:border-white/10 pt-12 lg:grid-cols-2 lg:gap-10 xl:gap-12 lg:pt-16">

        <div class="rounded-2xl border border-zinc-200 dark:border-white/10 bg-white dark:bg-[#151518] p-6 shadow-xl shadow-black/20 sm:p-8">
            <h2 class="text-lg font-bold text-zinc-900 dark:text-white">Step 1: Unlock your equity</h2>
            <p class="mt-2 text-xs leading-relaxed text-zinc-600 dark:text-gray-400">Enter your VIN or license plate to pull your vehicle build profile and history.</p>
            <form class="mt-6 space-y-5" action="#" method="get">
                <div>
                    <label for="trade-vin" class="mb-2 block text-[9px] font-bold uppercase tracking-widest text-zinc-600 dark:text-gray-500">VIN or license plate</label>
                    <input id="trade-vin" type="text" name="vin" placeholder="e.g. 1HGCM82633A004352" autocomplete="off" class="w-full rounded-lg border border-zinc-200 dark:border-white/10 bg-[#fafafa] dark:bg-[#0f0f11] px-4 py-3.5 text-sm text-zinc-900 dark:text-white placeholder-gray-600 transition focus:border-[#a8c0f0] focus:outline-none focus:ring-1 focus:ring-[#a8c0f0]/40">
                </div>
                <div>
                    <label for="trade-state" class="mb-2 block text-[9px] font-bold uppercase tracking-widest text-zinc-600 dark:text-gray-500">State / region</label>
                    <div class="relative">
                        <select id="trade-state" name="state" class="w-full cursor-pointer appearance-none rounded-lg border border-zinc-200 dark:border-white/10 bg-[#fafafa] dark:bg-[#0f0f11] px-4 py-3.5 text-sm text-zinc-900 dark:text-white transition focus:border-[#a8c0f0] focus:outline-none focus:ring-1 focus:ring-[#a8c0f0]/40">
                            <option>California</option>
                            <option>Texas</option>
                            <option>Florida</option>
                        </select>
                        <svg class="pointer-events-none absolute right-4 top-1/2 h-4 w-4 -translate-y-1/2 text-zinc-600 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                </div>
                <button type="submit" class="mt-2 flex w-full items-center justify-center gap-2 rounded-lg bg-[#a8c0f0] py-4 text-xs font-bold uppercase tracking-widest text-black transition hover:bg-[#92ade0]">
                    Get instant appraisal
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </button>
            </form>
        </div>

        <div class="rounded-2xl border border-zinc-200 dark:border-white/10 bg-white dark:bg-[#151518] p-6 shadow-xl shadow-black/20 sm:p-8">
            <h2 class="text-lg font-bold text-zinc-900 dark:text-white">Instant equity calculator</h2>
            <p class="mt-2 text-xs leading-relaxed text-zinc-600 dark:text-gray-400">Estimated trade-in value minus optional loan payoff.</p>
            <div class="mt-6 space-y-4 text-sm">
                <div class="flex items-center justify-between gap-4 text-zinc-700 dark:text-gray-300">
                    <span class="text-xs uppercase tracking-wide text-zinc-600 dark:text-gray-500">Appraisal value</span>
                    <span class="font-bold tabular-nums text-zinc-900 dark:text-white">$115,000</span>
                </div>
                <div class="flex items-center justify-between gap-4 text-zinc-700 dark:text-gray-300">
                    <span class="text-xs uppercase tracking-wide text-zinc-600 dark:text-gray-500">Loan payoff (optional)</span>
                    <span class="font-bold tabular-nums text-zinc-900 dark:text-white">$30,000</span>
                </div>
                <div class="flex items-center justify-between gap-4 border-t border-zinc-200 dark:border-white/10 pt-4 font-bold text-orange-400">
                    <span class="text-xs uppercase tracking-wide">Trade-in equity</span>
                    <span class="text-xl tabular-nums">$85,000</span>
                </div>
            </div>
            <button type="button" class="mt-8 w-full rounded-lg bg-zinc-200 dark:bg-[#2a2a2e] py-4 text-xs font-bold uppercase tracking-widest text-zinc-900 dark:text-white transition hover:bg-[#333338]">
                Apply to next acquisition
            </button>
        </div>

    </div>

    <section class="mt-16 border-t border-zinc-200 dark:border-white/10 pt-12 sm:mt-20 sm:pt-16">
        <h2 class="mb-6 text-xl font-bold uppercase tracking-tight text-zinc-900 dark:text-white sm:mb-8 sm:text-2xl">
            Explore upgrades with <span class="text-[#a8c0f0]">$85K</span> equity
        </h2>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            <article class="group flex flex-col overflow-hidden rounded-xl border border-zinc-200 dark:border-white/10 bg-white dark:bg-[#151518] transition hover:border-zinc-300 dark:border-white/20">
                <div class="relative aspect-[16/10] bg-zinc-100 dark:bg-[#1a1a1e]">
                    <img
                        src="https://images.unsplash.com/photo-1614200179396-2bdb77ebf81b?q=80&w=900&auto=format&fit=crop"
                        alt="Aston Martin Vantage"
                        class="h-full w-full object-cover object-center transition duration-500 group-hover:scale-[1.03]"
                        loading="lazy"
                    >
                </div>
                <div class="flex flex-1 flex-col p-5 sm:p-6">
                    <h3 class="text-lg font-bold text-zinc-900 dark:text-white">Aston Martin Vantage</h3>
                    <p class="mt-1 text-[11px] font-medium text-zinc-600 dark:text-gray-500">Original price $177,000</p>
                    <p class="mt-2 text-sm font-semibold text-[#a8c0f0]">Net with equity ~$92,000</p>
                    <a href="{{ route('vehicle.show') }}" class="mt-4 inline-flex text-[10px] font-bold uppercase tracking-widest text-[#a8c0f0] transition hover:text-zinc-900 dark:hover:text-white">View details →</a>
                </div>
            </article>
            <article class="group flex flex-col overflow-hidden rounded-xl border border-zinc-200 dark:border-white/10 bg-white dark:bg-[#151518] transition hover:border-zinc-300 dark:border-white/20">
                <div class="relative aspect-[16/10] bg-zinc-100 dark:bg-[#1a1a1e]">
                    <img
                        src="https://images.unsplash.com/photo-1614026480209-cd9934144671?q=80&w=900&auto=format&fit=crop"
                        alt="Audi e-tron GT"
                        class="h-full w-full object-cover object-center transition duration-500 group-hover:scale-[1.03]"
                        loading="lazy"
                    >
                </div>
                <div class="flex flex-1 flex-col p-5 sm:p-6">
                    <h3 class="text-lg font-bold text-zinc-900 dark:text-white">Audi e-tron GT</h3>
                    <p class="mt-1 text-[11px] font-medium text-zinc-600 dark:text-gray-500">Original price $145,000</p>
                    <p class="mt-2 text-sm font-semibold text-[#a8c0f0]">Net with equity ~$60,000</p>
                    <a href="{{ route('vehicle.show') }}" class="mt-4 inline-flex text-[10px] font-bold uppercase tracking-widest text-[#a8c0f0] transition hover:text-zinc-900 dark:hover:text-white">View details →</a>
                </div>
            </article>
            <article class="group flex flex-col overflow-hidden rounded-xl border border-zinc-200 dark:border-white/10 bg-white dark:bg-[#151518] transition hover:border-zinc-300 dark:border-white/20 md:col-span-2 lg:col-span-1">
                <div class="relative aspect-[16/10] bg-zinc-100 dark:bg-[#1a1a1e]">
                    <img
                        src="https://images.unsplash.com/photo-1701311521752-9f85d68d55ed?q=80&w=2664&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Lucid Air"
                        class="h-full w-full object-cover object-center transition duration-500 group-hover:scale-[1.03]"
                        loading="lazy"
                    >
                </div>
                <div class="flex flex-1 flex-col p-5 sm:p-6">
                    <h3 class="text-lg font-bold text-zinc-900 dark:text-white">Lucid Air Pure</h3>
                    <p class="mt-1 text-[11px] font-medium text-zinc-600 dark:text-gray-500">Original price $89,000</p>
                    <p class="mt-2 text-sm font-semibold text-orange-400">Net with equity ~$4,000</p>
                    <a href="{{ route('inventory') }}" class="mt-4 inline-flex text-[10px] font-bold uppercase tracking-widest text-[#a8c0f0] transition hover:text-zinc-900 dark:hover:text-white">View details →</a>
                </div>
            </article>
        </div>
    </section>

</div>
@endsection
