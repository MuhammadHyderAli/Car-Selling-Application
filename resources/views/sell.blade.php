@extends('layouts.app')

@section('content')

<div class="relative w-full bg-[#fafafa] dark:bg-[#0f0f11] border-b border-zinc-200 dark:border-white/5">
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
        <img src="https://images.unsplash.com/photo-1614200179396-2bdb77ebf81b?q=80&w=2000&auto=format&fit=crop" alt="Luxury Car Dark" class="w-full h-full object-cover opacity-20 mix-blend-lighten">
        <div class="absolute inset-0 bg-gradient-to-r from-[#0f0f11] via-[#0f0f11]/90 to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-[#0f0f11] via-transparent to-transparent"></div>
    </div>

    <div class="relative z-10 max-w-[1400px] mx-auto px-6 lg:px-8 py-20 lg:py-32">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-10 items-center">
            
            <div>
                <div class="inline-flex items-center gap-1.5 border border-orange-500/30 bg-orange-500/10 text-orange-400 text-[9px] font-bold uppercase tracking-widest px-2.5 py-1.5 rounded w-max mb-6">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Premium Appraisal Engine
                </div>
                
                <h1 class="text-5xl lg:text-7xl font-bold tracking-tight text-zinc-900 dark:text-white leading-[1.05] mb-6">
                    Get an <span class="text-[#a8c0f0]">Instant</span><br>
                    <span class="text-[#a8c0f0]">Offer</span> in Minutes.
                </h1>
                
                <p class="text-zinc-600 dark:text-gray-400 text-base leading-relaxed max-w-md mb-10">
                    Skip the showroom floor. Our technical valuation engine provides real-time market offers for your premium vehicle with zero friction.
                </p>

                <div class="flex flex-wrap gap-6 text-xs font-semibold text-zinc-900 dark:text-white">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-[#a8c0f0]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        60-Second Valuation
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-[#a8c0f0]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                        We Pick Up Your Car
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-[#a8c0f0]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        No Haggling
                    </div>
                </div>
            </div>

            <div class="lg:ml-auto w-full max-w-lg bg-white dark:bg-[#151518]/80 backdrop-blur-xl border border-zinc-200 dark:border-white/10 rounded-2xl p-8 shadow-2xl">
                
                <div class="flex items-center justify-between mb-8">
                    <div class="flex-1 flex items-center">
                        <div class="w-6 h-6 rounded-full bg-[#a8c0f0] text-black text-[10px] font-bold flex items-center justify-center">1</div>
                        <div class="flex-1 h-px bg-[#a8c0f0] mx-2"></div>
                    </div>
                    <div class="flex-1 flex items-center">
                        <div class="w-6 h-6 rounded-full bg-white/10 text-zinc-600 dark:text-gray-500 text-[10px] font-bold flex items-center justify-center">2</div>
                        <div class="flex-1 h-px bg-white/10 mx-2"></div>
                    </div>
                    <div class="w-6 h-6 rounded-full bg-white/10 text-zinc-600 dark:text-gray-500 text-[10px] font-bold flex items-center justify-center">3</div>
                </div>

                <h3 class="text-xl font-bold text-zinc-900 dark:text-white mb-2">Step 1: Vehicle Identity</h3>
                <p class="text-xs text-zinc-600 dark:text-gray-400 mb-6">Enter your VIN or License Plate to pull your vehicle's unique build profile and history.</p>

                <form class="space-y-5">
                    <div>
                        <label class="block text-[9px] text-zinc-600 dark:text-gray-500 font-bold uppercase tracking-widest mb-2">VIN or License Plate</label>
                        <div class="relative">
                            <input type="text" placeholder="e.g. 1HGCM82633A..." class="w-full bg-[#fafafa] dark:bg-[#0f0f11] border border-zinc-200 dark:border-white/10 rounded-lg py-3.5 pl-4 pr-10 text-sm text-zinc-900 dark:text-white placeholder-gray-600 focus:outline-none focus:border-[#a8c0f0] transition">
                            <button type="button" class="absolute right-3 top-1/2 -translate-y-1/2 text-[#a8c0f0] hover:text-zinc-900 dark:hover:text-white transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm14 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"></path></svg>
                            </button>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-[9px] text-zinc-600 dark:text-gray-500 font-bold uppercase tracking-widest mb-2">State / Region</label>
                            <div class="relative">
                                <select class="w-full bg-[#fafafa] dark:bg-[#0f0f11] border border-zinc-200 dark:border-white/10 rounded-lg py-3.5 px-4 text-sm text-zinc-900 dark:text-white appearance-none focus:outline-none focus:border-[#a8c0f0] transition cursor-pointer">
                                    <option>Select State</option>
                                    <option>California</option>
                                    <option>Texas</option>
                                    <option>Florida</option>
                                </select>
                                <svg class="w-4 h-4 absolute right-4 top-1/2 -translate-y-1/2 text-zinc-600 dark:text-gray-500 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </div>
                        </div>
                        <div>
                            <label class="block text-[9px] text-zinc-600 dark:text-gray-500 font-bold uppercase tracking-widest mb-2">Zip Code</label>
                            <input type="text" placeholder="90210" class="w-full bg-[#fafafa] dark:bg-[#0f0f11] border border-zinc-200 dark:border-white/10 rounded-lg py-3.5 px-4 text-sm text-zinc-900 dark:text-white placeholder-gray-600 focus:outline-none focus:border-[#a8c0f0] transition">
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-[#a8c0f0] hover:bg-[#92ade0] text-black font-bold uppercase tracking-widest text-xs py-4 rounded-lg transition mt-4 flex justify-center items-center gap-2">
                        Check Valuation
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </button>
                </form>

                <div class="mt-6 flex justify-center items-center gap-1.5 text-[8px] text-zinc-600 dark:text-gray-500 font-bold uppercase tracking-widest">
                    <svg class="w-3 h-3 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                    Secure Data Encryption
                </div>
            </div>

        </div>
    </div>
</div>

<div class="max-w-[1400px] mx-auto px-6 lg:px-8 py-20">

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-24">
        <div class="bg-white dark:bg-[#151518] border border-zinc-200 dark:border-white/5 p-8 rounded-xl hover:border-zinc-200 dark:border-white/10 transition">
            <div class="w-10 h-10 rounded bg-[#a8c0f0]/10 text-[#a8c0f0] flex items-center justify-center mb-6">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
            </div>
            <h3 class="text-lg font-bold text-zinc-900 dark:text-white mb-3">Fair Market Value</h3>
            <p class="text-sm text-zinc-600 dark:text-gray-400 leading-relaxed">
                Our AI analyzes thousands of real-time transactions to ensure your offer reflects true algorithmic luxury market value.
            </p>
        </div>
        
        <div class="bg-white dark:bg-[#151518] border border-zinc-200 dark:border-white/5 p-8 rounded-xl hover:border-zinc-200 dark:border-white/10 transition">
            <div class="w-10 h-10 rounded bg-orange-500/10 text-orange-400 flex items-center justify-center mb-6">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            </div>
            <h3 class="text-lg font-bold text-zinc-900 dark:text-white mb-3">No Haggling</h3>
            <p class="text-sm text-zinc-600 dark:text-gray-400 leading-relaxed">
                The price we offer is the price you get. No dealership back-and-forth, no hidden fees, just a clean professional transaction.
            </p>
        </div>

        <div class="bg-white dark:bg-[#151518] border border-zinc-200 dark:border-white/5 p-8 rounded-xl hover:border-zinc-200 dark:border-white/10 transition">
            <div class="w-10 h-10 rounded bg-[#a8c0f0]/10 text-[#a8c0f0] flex items-center justify-center mb-6">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
            </div>
            <h3 class="text-lg font-bold text-zinc-900 dark:text-white mb-3">7-Day Guarantee</h3>
            <p class="text-sm text-zinc-600 dark:text-gray-400 leading-relaxed">
                Take your time to decide. Every valuation from Kinetic Gallery is locked and guaranteed for 7 full days.
            </p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-24">
        
        <div class="relative aspect-square rounded-2xl overflow-hidden bg-white dark:bg-[#151518] border border-zinc-200 dark:border-white/5">
            <img src="https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?q=80&w=1200&auto=format&fit=crop" alt="Mercedes Interior" class="w-full h-full object-cover mix-blend-lighten grayscale opacity-80">
            
            <div class="absolute bottom-6 left-6 right-6 flex gap-4">
                <div class="flex-1 bg-[#fafafa] dark:bg-[#0f0f11]/80 backdrop-blur-md border border-zinc-200 dark:border-white/10 rounded-xl p-4">
                    <p class="text-[9px] text-zinc-600 dark:text-gray-500 font-bold uppercase tracking-widest mb-1">Efficiency</p>
                    <p class="text-lg font-bold text-[#a8c0f0]">100% Digital</p>
                </div>
                <div class="flex-1 bg-[#fafafa] dark:bg-[#0f0f11]/80 backdrop-blur-md border border-zinc-200 dark:border-white/10 rounded-xl p-4">
                    <p class="text-[9px] text-zinc-600 dark:text-gray-500 font-bold uppercase tracking-widest mb-1">Payment</p>
                    <p class="text-lg font-bold text-zinc-900 dark:text-white">Instant</p>
                </div>
            </div>
        </div>

        <div>
            <h2 class="text-4xl md:text-5xl font-bold tracking-tight text-zinc-900 dark:text-white leading-[1.1] mb-12">
                We've refined the trade-in <span class="text-orange-400">experience.</span>
            </h2>

            <div class="space-y-10">
                <div class="flex gap-6">
                    <div class="text-4xl font-bold text-zinc-900 dark:text-white/10 select-none">01</div>
                    <div>
                        <h4 class="text-lg font-bold text-zinc-900 dark:text-white mb-2">Digital Inspection</h4>
                        <p class="text-sm text-zinc-600 dark:text-gray-400 leading-relaxed">Upload a few photos. Our computer vision tech validates the condition and trim of your vehicle instantly.</p>
                    </div>
                </div>
                
                <div class="flex gap-6">
                    <div class="text-4xl font-bold text-zinc-900 dark:text-white/10 select-none">02</div>
                    <div>
                        <h4 class="text-lg font-bold text-zinc-900 dark:text-white mb-2">Concierge Pick-Up</h4>
                        <p class="text-sm text-zinc-600 dark:text-gray-400 leading-relaxed">We come to you. At your home or office, a specialist performs a final walk-around and initiates payment on the spot.</p>
                    </div>
                </div>

                <div class="flex gap-6">
                    <div class="text-4xl font-bold text-zinc-900 dark:text-white/10 select-none">03</div>
                    <div>
                        <h4 class="text-lg font-bold text-zinc-900 dark:text-white mb-2">Paperwork Solved</h4>
                        <p class="text-sm text-zinc-600 dark:text-gray-400 leading-relaxed">Loan payoffs, title transfers, and registrations—we handle the bureaucracy while you focus on your next drive.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="bg-gradient-to-br from-[#1a1c23] to-[#151518] rounded-3xl p-12 md:p-20 text-center border border-zinc-200 dark:border-white/5 relative overflow-hidden">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-[#a8c0f0] opacity-[0.04] blur-[100px] rounded-full pointer-events-none"></div>
        
        <h2 class="text-3xl md:text-5xl font-bold tracking-tight text-zinc-900 dark:text-white mb-6 relative z-10">
            Ready to upgrade your perspective?
        </h2>
        <p class="text-zinc-600 dark:text-gray-400 text-sm mb-10 max-w-xl mx-auto relative z-10">
            Your Kinetic valuation is waiting. Join the modern era of automotive luxury.
        </p>
        
        <div class="flex flex-col sm:flex-row justify-center gap-4 relative z-10">
            <button class="bg-zinc-900 text-white hover:bg-zinc-800 dark:bg-white dark:text-black dark:hover:bg-gray-200 font-bold uppercase tracking-widest text-xs py-4 px-8 rounded-lg transition">
                Start Appraisal
            </button>
            <button class="bg-transparent border border-zinc-300 dark:border-white/20 hover:border-zinc-400 dark:border-white/40 text-zinc-900 dark:text-white font-bold uppercase tracking-widest text-xs py-4 px-8 rounded-lg transition">
                Speak to Concierge
            </button>
        </div>
    </div>

</div>

@endsection