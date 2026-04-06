@extends('layouts.app')

@section('content')
<div class="max-w-[1400px] mx-auto px-6 lg:px-8 py-10">

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center mb-20">
        
        <div class="lg:col-span-4 flex flex-col justify-center">
            <div class="inline-flex items-center gap-1.5 border border-orange-500/30 bg-orange-500/10 text-orange-400 text-[9px] font-bold uppercase tracking-widest px-2.5 py-1.5 rounded w-max mb-6">
                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                Certified Performance
            </div>
            
            <h1 class="text-6xl lg:text-[80px] font-bold tracking-tight text-zinc-900 dark:text-white leading-[1.05] mb-6">
                Tesla<br>
                Model S<br>
                <span class="text-[#a8c0f0]">Plaid</span>
            </h1>
            
            <p class="text-zinc-600 dark:text-gray-400 text-sm leading-relaxed max-w-sm">
                The quickest accelerating car in production today. 0-60 mph in 1.99s. Triple motor all-wheel drive.
            </p>
        </div>

        <div class="lg:col-span-8 relative w-full aspect-[4/3] lg:aspect-[16/10] rounded-xl overflow-hidden bg-[#0a0f18] border border-zinc-200 dark:border-white/5">
            <img src="https://images.unsplash.com/photo-1560958089-b8a1929cea89?q=80&w=1600&auto=format&fit=crop" alt="Tesla Model S Plaid" class="w-full h-full object-cover mix-blend-lighten opacity-80">
            
            <button class="absolute top-5 right-5 bg-black/60 backdrop-blur-md border border-zinc-200 dark:border-white/10 hover:bg-white/10 text-zinc-900 dark:text-white text-[9px] font-bold uppercase tracking-widest py-2 px-4 rounded transition flex items-center gap-2">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"></path></svg>
                Interactive 3D
            </button>

            <div class="absolute bottom-8 left-8 bg-zinc-100 dark:bg-[#111113]/90 backdrop-blur-xl border border-zinc-200 dark:border-white/5 rounded-xl p-5 flex divide-x divide-white/10 shadow-2xl">
                <div class="pr-6">
                    <p class="text-[9px] text-zinc-600 dark:text-gray-500 font-bold uppercase tracking-widest mb-1">Top Speed</p>
                    <div class="text-2xl font-bold text-zinc-900 dark:text-white">200<span class="text-xs font-medium text-zinc-600 dark:text-gray-500 ml-1">mph</span></div>
                </div>
                <div class="px-6">
                    <p class="text-[9px] text-zinc-600 dark:text-gray-500 font-bold uppercase tracking-widest mb-1">0-60 Mph</p>
                    <div class="text-2xl font-bold text-zinc-900 dark:text-white">1.99<span class="text-xs font-medium text-zinc-600 dark:text-gray-500 ml-1">s</span></div>
                </div>
                <div class="pl-6">
                    <p class="text-[9px] text-zinc-600 dark:text-gray-500 font-bold uppercase tracking-widest mb-1">Power</p>
                    <div class="text-2xl font-bold text-zinc-900 dark:text-white">1,020<span class="text-xs font-medium text-zinc-600 dark:text-gray-500 ml-1">hp</span></div>
                </div>
            </div>
        </div>

    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 xl:gap-16">
        
        <div class="lg:col-span-8 space-y-16">
            
            <section>
                <h2 class="text-xl font-bold tracking-tight text-zinc-900 dark:text-white mb-6">Key Specifications</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    
                    <div class="bg-white dark:bg-[#151518] rounded-xl border border-zinc-200 dark:border-white/5 p-6 flex flex-col justify-center gap-6">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded bg-zinc-100 dark:bg-[#1a1a1e] flex items-center justify-center border border-zinc-200 dark:border-white/5 shrink-0">
                                <svg class="w-4 h-4 text-[#a8c0f0]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            </div>
                            <div>
                                <p class="text-[9px] text-zinc-600 dark:text-gray-500 font-bold uppercase tracking-widest mb-0.5">Range (EPA Est.)</p>
                                <p class="text-base font-bold text-zinc-900 dark:text-white">396 mi</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded bg-zinc-100 dark:bg-[#1a1a1e] flex items-center justify-center border border-zinc-200 dark:border-white/5 shrink-0">
                                <svg class="w-4 h-4 text-[#a8c0f0]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <p class="text-[9px] text-zinc-600 dark:text-gray-500 font-bold uppercase tracking-widest mb-0.5">Quarter Mile</p>
                                <p class="text-base font-bold text-zinc-900 dark:text-white">9.23 s</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-[#151518] rounded-xl border border-zinc-200 dark:border-white/5 p-6">
                        <p class="text-[9px] text-zinc-600 dark:text-gray-500 font-bold uppercase tracking-widest mb-1.5">Drive Configuration</p>
                        <h3 class="text-lg font-bold text-zinc-900 dark:text-white mb-4">Tri-Motor AWD</h3>
                        <p class="text-xs text-zinc-600 dark:text-gray-400 leading-relaxed">
                            Three high-performance motors with carbon-sleeved rotors maintain peak power output all the way to top speed.
                        </p>
                    </div>

                </div>
            </section>

            <section>
                <div class="flex justify-between items-end mb-6">
                    <h2 class="text-xl font-bold tracking-tight text-zinc-900 dark:text-white">Vehicle History</h2>
                    <a href="#" class="text-[9px] font-bold text-[#a8c0f0] uppercase tracking-widest flex items-center gap-1 hover:text-zinc-900 dark:hover:text-white transition">
                        Download Full Report 
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                    </a>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 border-y border-zinc-200 dark:border-white/5 py-5 mb-5 gap-y-6">
                    <div>
                        <p class="text-[9px] text-zinc-600 dark:text-gray-500 font-bold uppercase tracking-widest mb-1">Owners</p>
                        <p class="text-sm font-bold text-zinc-900 dark:text-white">1</p>
                    </div>
                    <div>
                        <p class="text-[9px] text-zinc-600 dark:text-gray-500 font-bold uppercase tracking-widest mb-1">Accidents</p>
                        <p class="text-sm font-bold text-[#a8c0f0]">None Reported</p>
                    </div>
                    <div>
                        <p class="text-[9px] text-zinc-600 dark:text-gray-500 font-bold uppercase tracking-widest mb-1">Service History</p>
                        <p class="text-sm font-bold text-zinc-900 dark:text-white">3 Records</p>
                    </div>
                    <div>
                        <p class="text-[9px] text-zinc-600 dark:text-gray-500 font-bold uppercase tracking-widest mb-1">Usage</p>
                        <p class="text-sm font-bold text-zinc-900 dark:text-white">Personal</p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="mt-1.5 w-1.5 h-1.5 rounded-full bg-[#a8c0f0] shadow shrink-0"></div>
                    <div>
                        <h4 class="text-xs font-bold text-zinc-900 dark:text-white mb-0.5">Maintenance Performed</h4>
                        <p class="text-[11px] text-zinc-600 dark:text-gray-400 mb-2">Vehicle serviced at Tesla Service Center - Palo Alto, CA. Multi-point inspection completed.</p>
                        <p class="text-[9px] text-zinc-600 dark:text-gray-500 font-bold uppercase tracking-widest">May 14, 2023 • 8,400 Miles</p>
                    </div>
                </div>
            </section>

            <section>
                <h2 class="text-xl font-bold tracking-tight text-zinc-900 dark:text-white mb-6">360° Interior Experience</h2>
                <div class="relative w-full aspect-video bg-white dark:bg-[#151518] rounded-xl overflow-hidden border border-zinc-200 dark:border-white/5">
                    <img src="https://images.unsplash.com/photo-1560958089-b8a1929cea89?q=80&w=1200&auto=format&fit=crop" alt="Tesla Interior" class="w-full h-full object-cover mix-blend-lighten opacity-80">
                    
                    <button class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-white/80 dark:bg-black/50 backdrop-blur-md border border-zinc-300 dark:border-white/20 hover:bg-white/10 hover:border-zinc-400 dark:border-white/40 text-zinc-900 dark:text-white text-[10px] font-bold uppercase tracking-widest py-3 px-6 rounded-lg transition flex items-center gap-3">
                        <svg class="w-4 h-4 fill-white" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"></path></svg>
                        Enter Virtual Cabin
                    </button>
                </div>
            </section>

        </div>

        <div class="lg:col-span-4">
            <div class="sticky top-28 space-y-6">
                
                <div class="bg-zinc-100 dark:bg-[#1a1a1e] border border-zinc-200 dark:border-white/5 rounded-2xl p-7 shadow-2xl">
                    <div class="mb-8">
                        <p class="text-[9px] text-zinc-600 dark:text-gray-400 font-bold uppercase tracking-widest mb-1.5">Listing Price</p>
                        <div class="text-4xl font-bold text-zinc-900 dark:text-white mb-1.5">$108,490</div>
                        <p class="text-[10px] text-orange-400 font-bold">Below Market Value</p>
                    </div>

                    <div class="space-y-4 mb-8 text-xs font-medium">
                        <div class="flex justify-between items-center">
                            <span class="text-zinc-600 dark:text-gray-400">Est. Monthly</span>
                            <span class="text-zinc-900 dark:text-white">$1,642/mo</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-zinc-600 dark:text-gray-400">Down Payment</span>
                            <span class="text-zinc-900 dark:text-white">$10,000</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-zinc-600 dark:text-gray-400">Term</span>
                            <span class="text-zinc-900 dark:text-white">72 Months</span>
                        </div>
                    </div>

                    <div class="space-y-3 mb-6">
                        <button class="w-full bg-[#a8c0f0] hover:bg-[#92ade0] text-black font-bold text-xs py-3.5 rounded transition">
                            Buy Now
                        </button>
                        <button class="w-full bg-zinc-200 dark:bg-[#2a2a2e] hover:bg-[#333338] text-zinc-900 dark:text-white font-bold text-xs py-3.5 rounded transition">
                            Finance Options
                        </button>
                    </div>

                    <div class="flex justify-center items-center gap-1.5 text-[9px] text-zinc-600 dark:text-gray-500 font-bold uppercase tracking-widest">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                        Secure Checkout Via Stripe
                    </div>
                </div>

                <div class="bg-transparent border border-orange-500/20 rounded-2xl p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <svg class="w-4 h-4 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                        <h4 class="text-xs font-bold text-orange-400">Kinetic Protection</h4>
                    </div>
                    <p class="text-[10px] text-zinc-600 dark:text-gray-400 leading-relaxed mb-4">
                        This vehicle includes a 12-month/12,000-mile limited warranty and a 7-day money-back guarantee.
                    </p>
                    <a href="#" class="text-[9px] font-bold text-orange-400 hover:text-orange-300 uppercase tracking-widest transition block">
                        Learn more about our trust pledge
                    </a>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection