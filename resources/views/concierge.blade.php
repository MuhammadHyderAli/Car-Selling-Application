@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-10">

    <header class="mb-12 sm:mb-16">
        <div class="inline-block rounded border border-[#a8c0f0]/30 bg-[#a8c0f0]/10 px-2 py-1 text-[10px] font-bold uppercase tracking-widest text-[#a8c0f0]">
            Kinetic Gallery
        </div>
        <h1 class="mt-4 text-4xl font-bold uppercase leading-[1.05] tracking-tight text-zinc-900 dark:text-white md:text-5xl lg:text-6xl">
            The Kinetic <span class="text-[#a8c0f0]">Concierge</span>
        </h1>
        <p class="mt-4 max-w-2xl text-sm leading-relaxed text-zinc-600 dark:text-gray-400">
            A dedicated advisor for a frictionless transaction—paperwork, delivery, and financing handled so you can focus on the drive.
        </p>

        <div class="relative mt-8 overflow-hidden rounded-2xl border border-zinc-200 dark:border-white/10 bg-[#f4f4f5] dark:bg-[#0a0a0c] shadow-2xl shadow-black/40 sm:mt-10">
            <div class="aspect-[4/3] sm:aspect-[2/1] lg:aspect-[21/9]">
                <img
                    src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?q=80&w=1920&auto=format&fit=crop"
                    alt="White-glove vehicle delivery and concierge service"
                    class="h-full w-full object-cover object-center"
                    loading="eager"
                    decoding="async"
                >
            </div>
            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-[#0f0f11] via-[#0f0f11]/40 to-transparent"></div>

            <div class="absolute inset-x-0 bottom-0 p-4 sm:p-6">
                <div class="grid gap-3 sm:grid-cols-3 sm:gap-4">
                    <div class="flex items-start gap-3 rounded-lg border border-zinc-200 dark:border-white/10 bg-white/80 dark:bg-black/50 px-3 py-2.5 backdrop-blur-md sm:flex-col sm:gap-1 sm:py-3">
                        <div class="mt-0.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#a8c0f0] sm:mt-0"></div>
                        <p class="text-[10px] font-bold uppercase leading-snug tracking-wider text-zinc-900 dark:text-white sm:text-xs">Documentation simplified</p>
                    </div>
                    <div class="flex items-start gap-3 rounded-lg border border-zinc-200 dark:border-white/10 bg-white/80 dark:bg-black/50 px-3 py-2.5 backdrop-blur-md sm:flex-col sm:gap-1 sm:py-3">
                        <div class="mt-0.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#a8c0f0] sm:mt-0"></div>
                        <p class="text-[10px] font-bold uppercase leading-snug tracking-wider text-zinc-900 dark:text-white sm:text-xs">Premium enclosed delivery</p>
                    </div>
                    <div class="flex items-start gap-3 rounded-lg border border-zinc-200 dark:border-white/10 bg-white/80 dark:bg-black/50 px-3 py-2.5 backdrop-blur-md sm:flex-col sm:gap-1 sm:py-3 sm:col-span-1">
                        <div class="mt-0.5 h-1.5 w-1.5 shrink-0 rounded-full bg-[#a8c0f0] sm:mt-0"></div>
                        <p class="text-[10px] font-bold uppercase leading-snug tracking-wider text-zinc-900 dark:text-white sm:text-xs">Curated financing</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="border-t border-zinc-200 dark:border-white/10 pt-12 sm:pt-16">
        <h2 class="mb-6 text-xl font-bold uppercase tracking-tight text-zinc-900 dark:text-white sm:mb-8 sm:text-2xl">Your personal advisor</h2>
        <div class="max-w-2xl rounded-2xl border border-zinc-200 dark:border-white/10 bg-white dark:bg-[#151518] p-5 shadow-xl shadow-black/25 sm:p-7">
            <div class="flex flex-col gap-5 sm:flex-row sm:items-center sm:gap-6">
                <div class="mx-auto shrink-0 sm:mx-0">
                    <img
                        src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=400&h=400&auto=format&fit=crop"
                        alt="Evelyn Reed, Senior Concierge"
                        class="h-24 w-24 rounded-full object-cover ring-2 ring-[#a8c0f0]/30 ring-offset-2 ring-offset-[#151518] sm:h-28 sm:w-28"
                        loading="lazy"
                        decoding="async"
                    >
                </div>
                <div class="min-w-0 flex-1 text-center sm:text-left">
                    <h3 class="text-base font-bold text-zinc-900 dark:text-white">Senior concierge: Evelyn Reed</h3>
                    <p class="mt-1 text-xs leading-relaxed text-zinc-600 dark:text-gray-500">Dedicated portfolio manager for acquisition, trade-in coordination, and delivery.</p>
                    <div class="mt-4 flex flex-wrap justify-center gap-2 sm:justify-start">
                        <button type="button" class="rounded-lg bg-[#a8c0f0] px-4 py-2.5 text-[10px] font-bold uppercase tracking-wider text-black transition hover:bg-[#92ade0]">
                            Start live chat
                        </button>
                        <button type="button" class="rounded-lg border border-zinc-300 dark:border-white/15 bg-zinc-200 dark:bg-[#2a2a2e] px-4 py-2.5 text-[10px] font-bold uppercase tracking-wider text-zinc-900 dark:text-white transition hover:bg-[#333338]">
                            Schedule a call
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-14 border-t border-zinc-200 dark:border-white/10 pt-12 sm:mt-16 sm:pt-16">
        <h2 class="mb-6 text-xl font-bold uppercase tracking-tight text-zinc-900 dark:text-white sm:mb-8 sm:text-2xl">Kinetic pledge</h2>
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4 lg:gap-5">
            <div class="flex min-h-[160px] flex-col rounded-xl border border-zinc-200 dark:border-white/10 bg-white dark:bg-[#151518] p-6 transition hover:border-zinc-300 dark:border-white/20">
                <svg class="mb-4 h-6 w-6 shrink-0 text-[#a8c0f0]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                <h3 class="text-sm font-bold uppercase tracking-tight text-zinc-900 dark:text-white">Haggle-free</h3>
                <p class="mt-2 text-xs leading-relaxed text-zinc-600 dark:text-gray-500">Clear pricing without endless back-and-forth.</p>
            </div>
            <div class="flex min-h-[160px] flex-col rounded-xl border border-zinc-200 dark:border-white/10 bg-white dark:bg-[#151518] p-6 transition hover:border-zinc-300 dark:border-white/20">
                <svg class="mb-4 h-6 w-6 shrink-0 text-[#a8c0f0]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <h3 class="text-sm font-bold uppercase tracking-tight text-zinc-900 dark:text-white">Transparent</h3>
                <p class="mt-2 text-xs leading-relaxed text-zinc-600 dark:text-gray-500">Timelines and numbers you can verify at every step.</p>
            </div>
            <div class="flex min-h-[160px] flex-col rounded-xl border border-zinc-200 dark:border-white/10 bg-white dark:bg-[#151518] p-6 transition hover:border-zinc-300 dark:border-white/20">
                <svg class="mb-4 h-6 w-6 shrink-0 text-[#a8c0f0]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                <h3 class="text-sm font-bold uppercase tracking-tight text-zinc-900 dark:text-white">White-glove</h3>
                <p class="mt-2 text-xs leading-relaxed text-zinc-600 dark:text-gray-500">Pickup, transport, and handover handled for you.</p>
            </div>
            <div class="flex min-h-[160px] flex-col rounded-xl border border-zinc-200 dark:border-white/10 bg-white dark:bg-[#151518] p-6 transition hover:border-zinc-300 dark:border-white/20">
                <svg class="mb-4 h-6 w-6 shrink-0 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <h3 class="text-sm font-bold uppercase tracking-tight text-zinc-900 dark:text-white">Uncompromising</h3>
                <p class="mt-2 text-xs leading-relaxed text-zinc-600 dark:text-gray-500">Inspection and prep standards we stand behind.</p>
            </div>
        </div>
    </section>

    <section class="mt-14 border-t border-zinc-200 dark:border-white/10 py-12 text-center sm:mt-16 sm:py-16">
        <h2 class="mx-auto max-w-lg text-2xl font-bold uppercase tracking-tight text-zinc-900 dark:text-white sm:text-3xl">
            Ready to acquire with distinction?
        </h2>
        <p class="mx-auto mt-3 max-w-md text-sm text-zinc-600 dark:text-gray-500">We will match you with a concierge within one business day.</p>
        <button type="button" class="mt-8 rounded-lg bg-zinc-900 px-8 py-4 text-xs font-bold uppercase tracking-widest text-white transition hover:bg-zinc-800 dark:bg-white dark:text-black dark:hover:bg-gray-200">
            Contact concierge
        </button>
    </section>

</div>
@endsection
