@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-6 lg:px-8 py-12 flex flex-col lg:flex-row gap-10">

    <aside class="w-full lg:w-64 flex-shrink-0">
        <h2 class="text-[10px] text-zinc-600 dark:text-gray-500 uppercase tracking-widest font-bold mb-8">Filter Gallery</h2>

        <div class="mb-8">
            <div class="flex justify-between items-center mb-4 cursor-pointer">
                <h3 class="text-sm font-semibold text-zinc-900 dark:text-white">Make</h3>
                <svg class="w-4 h-4 text-zinc-600 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </div>
            <div class="space-y-3">
                <label class="flex items-center gap-3 cursor-pointer group">
                    <input type="checkbox" class="appearance-none w-4 h-4 border border-zinc-300 dark:border-white/20 rounded-[3px] checked:bg-[#a8c0f0] checked:border-[#a8c0f0] transition relative after:content-[''] after:absolute after:hidden checked:after:block after:left-[4px] after:top-[1px] after:w-[6px] after:h-[10px] after:border-r-2 after:border-b-2 after:border-black after:rotate-45">
                    <span class="text-sm text-zinc-600 dark:text-gray-400 group-hover:text-zinc-900 dark:group-hover:text-white transition">Porsche</span>
                </label>
                <label class="flex items-center gap-3 cursor-pointer group">
                    <input type="checkbox" class="appearance-none w-4 h-4 border border-zinc-300 dark:border-white/20 rounded-[3px] checked:bg-[#a8c0f0] checked:border-[#a8c0f0] transition relative after:content-[''] after:absolute after:hidden checked:after:block after:left-[4px] after:top-[1px] after:w-[6px] after:h-[10px] after:border-r-2 after:border-b-2 after:border-black after:rotate-45">
                    <span class="text-sm text-zinc-600 dark:text-gray-400 group-hover:text-zinc-900 dark:group-hover:text-white transition">Tesla</span>
                </label>
                <label class="flex items-center gap-3 cursor-pointer group">
                    <input type="checkbox" class="appearance-none w-4 h-4 border border-zinc-300 dark:border-white/20 rounded-[3px] checked:bg-[#a8c0f0] checked:border-[#a8c0f0] transition relative after:content-[''] after:absolute after:hidden checked:after:block after:left-[4px] after:top-[1px] after:w-[6px] after:h-[10px] after:border-r-2 after:border-b-2 after:border-black after:rotate-45">
                    <span class="text-sm text-zinc-600 dark:text-gray-400 group-hover:text-zinc-900 dark:group-hover:text-white transition">Lucid</span>
                </label>
            </div>
        </div>

        <hr class="border-zinc-200 dark:border-white/5 mb-8">

        <div class="mb-8">
            <div class="flex justify-between items-center mb-6 cursor-pointer">
                <h3 class="text-sm font-semibold text-zinc-900 dark:text-white">Price Range</h3>
                <svg class="w-4 h-4 text-zinc-600 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </div>
            <div class="relative h-1 bg-white/10 rounded-full mb-4">
                <div class="absolute left-1/4 right-0 h-full bg-[#a8c0f0] rounded-full"></div>
                <div class="absolute left-1/4 top-1/2 -translate-y-1/2 w-4 h-4 bg-[#a8c0f0] rounded-full border-2 border-[#0f0f11] shadow cursor-pointer"></div>
            </div>
            <div class="flex justify-between text-[10px] text-zinc-600 dark:text-gray-500 uppercase tracking-widest">
                <span>$50k</span>
                <span>$250k+</span>
            </div>
        </div>

        <hr class="border-zinc-200 dark:border-white/5 mb-8">

        <div class="mb-8">
            <div class="flex justify-between items-center cursor-pointer">
                <h3 class="text-sm font-semibold text-zinc-900 dark:text-white">Body Type</h3>
                <svg class="w-4 h-4 text-zinc-600 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </div>
        </div>

        <hr class="border-zinc-200 dark:border-white/5 mb-8">

        <div class="mb-8">
            <div class="flex justify-between items-center cursor-pointer">
                <h3 class="text-sm font-semibold text-zinc-900 dark:text-white">Advanced Tech</h3>
                <svg class="w-4 h-4 text-zinc-600 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </div>
        </div>

        <button class="w-full text-left text-xs font-bold text-[#a8c0f0] uppercase tracking-widest hover:text-zinc-900 dark:hover:text-white transition mt-4">
            Reset All Filters
        </button>
    </aside>

    <main class="flex-1">
        
        <h1 class="text-4xl md:text-5xl font-bold tracking-tight mb-8">Inventory</h1>

        <div class="relative mb-10">
            <input type="text" placeholder="Search by model, feature, or aesthetic..." class="w-full bg-white dark:bg-[#151518] border border-zinc-200 dark:border-white/5 rounded-xl py-4 pl-5 pr-12 text-sm text-zinc-900 dark:text-white placeholder-gray-600 focus:outline-none focus:border-zinc-300 dark:border-white/20 transition">
            <button class="absolute right-4 top-1/2 -translate-y-1/2 text-zinc-600 dark:text-gray-500 hover:text-zinc-900 dark:hover:text-white transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
            
            <div class="bg-white dark:bg-[#151518] border border-zinc-200 dark:border-white/5 rounded-xl overflow-hidden hover:border-zinc-200 dark:border-white/10 transition group flex flex-col">
                <div class="relative aspect-[3/2] bg-zinc-100 dark:bg-[#1a1a1e]">
                    <span class="absolute top-4 right-4 bg-zinc-900/95 text-white border border-zinc-700/60 shadow-sm backdrop-blur-md dark:bg-black/70 dark:border-white/15 dark:text-white text-[9px] uppercase tracking-widest font-bold px-3 py-1.5 rounded z-10">
                        Available Now
                    </span>
                    <img src="https://images.unsplash.com/photo-1646567799137-b1e1508b6b96?q=80&w=2340&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-full h-full object-cover mix-blend-lighten group-hover:scale-105 transition duration-700" alt="Porsche 911">
                </div>
                
                <div class="p-5 flex flex-col flex-grow">
                    <div class="flex justify-between items-end mb-1">
                        <span class="text-[#a8c0f0] text-xs font-semibold tracking-widest">2024</span>
                        <span class="text-xl font-bold text-[#a8c0f0]">$131,700</span>
                    </div>
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-base font-bold text-zinc-900 dark:text-white">Porsche 911 Carrera S</h3>
                        <span class="text-[10px] text-zinc-600 dark:text-gray-500 font-medium">EST. $1,840/MO</span>
                    </div>
                    
                    <div class="flex gap-5 text-xs text-zinc-600 dark:text-gray-400 mb-6">
                        <div class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-zinc-600 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="font-medium">3.5s (0-60)</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-zinc-600 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            <span class="font-medium">443 HP</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-3 mt-auto">
                        <a href="#" class="bg-[#a8c0f0] hover:bg-[#92ade0] text-black text-xs font-bold uppercase tracking-wider py-3 rounded text-center transition">View Details</a>
                        <a href="#" class="border border-zinc-200 dark:border-white/10 hover:border-white/30 text-zinc-900 dark:text-white text-xs font-bold uppercase tracking-wider py-3 rounded text-center transition">Prequalify</a>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-[#151518] border border-zinc-200 dark:border-white/5 rounded-xl overflow-hidden hover:border-zinc-200 dark:border-white/10 transition group flex flex-col">
                <div class="relative aspect-[3/2] bg-zinc-100 dark:bg-[#1a1a1e]">
                    <span class="absolute top-4 right-4 bg-indigo-500/20 border border-indigo-500/30 text-indigo-300 backdrop-blur-md text-[9px] uppercase tracking-widest font-bold px-3 py-1.5 rounded z-10">
                        Rare Find
                    </span>
                    <img src="https://images.unsplash.com/photo-1617788138017-80ad40651399?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover mix-blend-lighten group-hover:scale-105 transition duration-700" alt="Lucid Air">
                </div>
                
                <div class="p-5 flex flex-col flex-grow">
                    <div class="flex justify-between items-end mb-1">
                        <span class="text-[#a8c0f0] text-xs font-semibold tracking-widest">2023</span>
                        <span class="text-xl font-bold text-[#a8c0f0]">$154,000</span>
                    </div>
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-base font-bold text-zinc-900 dark:text-white">Lucid Air Grand Touring</h3>
                        <span class="text-[10px] text-zinc-600 dark:text-gray-500 font-medium">EST. $2,180/MO</span>
                    </div>
                    
                    <div class="flex gap-5 text-xs text-zinc-600 dark:text-gray-400 mb-6">
                        <div class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-zinc-600 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1"></path></svg>
                            <span class="font-medium">516mi Range</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-zinc-600 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            <span class="font-medium">819 HP</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-3 mt-auto">
                        <a href="#" class="bg-[#a8c0f0] hover:bg-[#92ade0] text-black text-xs font-bold uppercase tracking-wider py-3 rounded text-center transition">View Details</a>
                        <a href="#" class="border border-zinc-200 dark:border-white/10 hover:border-white/30 text-zinc-900 dark:text-white text-xs font-bold uppercase tracking-wider py-3 rounded text-center transition">Prequalify</a>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-[#151518] border border-zinc-200 dark:border-white/5 rounded-xl overflow-hidden hover:border-zinc-200 dark:border-white/10 transition group flex flex-col">
                <div class="relative aspect-[3/2] bg-zinc-100 dark:bg-[#1a1a1e]">
                    <img src="https://images.unsplash.com/photo-1560958089-b8a1929cea89?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover mix-blend-lighten group-hover:scale-105 transition duration-700" alt="Tesla Interior">
                </div>
                
                <div class="p-5 flex flex-col flex-grow">
                    <div class="flex justify-between items-end mb-1">
                        <span class="text-[#a8c0f0] text-xs font-semibold tracking-widest">2024</span>
                        <span class="text-xl font-bold text-[#a8c0f0]">$89,990</span>
                    </div>
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-base font-bold text-zinc-900 dark:text-white">Tesla Model S Plaid</h3>
                        <span class="text-[10px] text-zinc-600 dark:text-gray-500 font-medium">EST. $1,420/MO</span>
                    </div>
                    
                    <div class="flex gap-5 text-xs text-zinc-600 dark:text-gray-400 mb-6">
                        <div class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-zinc-600 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="font-medium">1.99s (0-60)</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-zinc-600 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            <span class="font-medium">1,020 HP</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-3 mt-auto">
                        <a href="#" class="bg-[#a8c0f0] hover:bg-[#92ade0] text-black text-xs font-bold uppercase tracking-wider py-3 rounded text-center transition">View Details</a>
                        <a href="#" class="border border-zinc-200 dark:border-white/10 hover:border-white/30 text-zinc-900 dark:text-white text-xs font-bold uppercase tracking-wider py-3 rounded text-center transition">Prequalify</a>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-[#151518] border border-zinc-200 dark:border-white/5 rounded-xl overflow-hidden hover:border-zinc-200 dark:border-white/10 transition group flex flex-col">
                <div class="relative aspect-[3/2] bg-zinc-100 dark:bg-[#1a1a1e]">
                    <img src="https://images.unsplash.com/photo-1695192111167-dfcf2a6d0815?q=80&w=2428&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-full h-full object-cover mix-blend-lighten group-hover:scale-105 transition duration-700" alt="Porsche Taycan">
                </div>
                
                <div class="p-5 flex flex-col flex-grow">
                    <div class="flex justify-between items-end mb-1">
                        <span class="text-[#a8c0f0] text-xs font-semibold tracking-widest">2023</span>
                        <span class="text-xl font-bold text-[#a8c0f0]">$194,900</span>
                    </div>
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-base font-bold text-zinc-900 dark:text-white">Porsche Taycan Turbo S</h3>
                        <span class="text-[10px] text-zinc-600 dark:text-gray-500 font-medium">EST. $2,840/MO</span>
                    </div>
                    
                    <div class="flex gap-5 text-xs text-zinc-600 dark:text-gray-400 mb-6">
                        <div class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-zinc-600 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            <span class="font-medium">750 HP</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-zinc-600 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1"></path></svg>
                            <span class="font-medium">222mi Range</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-3 mt-auto">
                        <a href="#" class="bg-[#a8c0f0] hover:bg-[#92ade0] text-black text-xs font-bold uppercase tracking-wider py-3 rounded text-center transition">View Details</a>
                        <a href="#" class="border border-zinc-200 dark:border-white/10 hover:border-white/30 text-zinc-900 dark:text-white text-xs font-bold uppercase tracking-wider py-3 rounded text-center transition">Prequalify</a>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-[#151518] border border-zinc-200 dark:border-white/5 rounded-xl overflow-hidden hover:border-zinc-200 dark:border-white/10 transition group flex flex-col">
                <div class="relative aspect-[3/2] bg-zinc-100 dark:bg-[#1a1a1e]">
                    <img src="https://images.unsplash.com/photo-1606152421802-db97b9c7a11b?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover mix-blend-lighten group-hover:scale-105 transition duration-700" alt="Audi RS Q8">
                </div>
                
                <div class="p-5 flex flex-col flex-grow">
                    <div class="flex justify-between items-end mb-1">
                        <span class="text-[#a8c0f0] text-xs font-semibold tracking-widest">2024</span>
                        <span class="text-xl font-bold text-[#a8c0f0]">$125,800</span>
                    </div>
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-base font-bold text-zinc-900 dark:text-white">Audi RS Q8</h3>
                        <span class="text-[10px] text-zinc-600 dark:text-gray-500 font-medium">EST. $1,840/MO</span>
                    </div>
                    
                    <div class="flex gap-5 text-xs text-zinc-600 dark:text-gray-400 mb-6">
                         <div class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-zinc-600 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="font-medium">3.7s (0-60)</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-zinc-600 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            <span class="font-medium">591 HP</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-3 mt-auto">
                        <a href="#" class="bg-[#a8c0f0] hover:bg-[#92ade0] text-black text-xs font-bold uppercase tracking-wider py-3 rounded text-center transition">View Details</a>
                        <a href="#" class="border border-zinc-200 dark:border-white/10 hover:border-white/30 text-zinc-900 dark:text-white text-xs font-bold uppercase tracking-wider py-3 rounded text-center transition">Prequalify</a>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-[#151518] border border-zinc-200 dark:border-white/5 rounded-xl overflow-hidden hover:border-zinc-200 dark:border-white/10 transition group flex flex-col">
                <div class="relative aspect-[3/2] bg-zinc-100 dark:bg-[#1a1a1e]">
                    <img src="https://images.unsplash.com/photo-1744782558437-4cea963e8327?q=80&w=2340&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-full h-full object-cover mix-blend-lighten group-hover:scale-105 transition duration-700" alt="BMW M8">
                </div>
                
                <div class="p-5 flex flex-col flex-grow">
                    <div class="flex justify-between items-end mb-1">
                        <span class="text-[#a8c0f0] text-xs font-semibold tracking-widest">2024</span>
                        <span class="text-xl font-bold text-[#a8c0f0]">$138,800</span>
                    </div>
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-base font-bold text-zinc-900 dark:text-white">BMW M8 Competition</h3>
                        <span class="text-[10px] text-zinc-600 dark:text-gray-500 font-medium">EST. $2,020/MO</span>
                    </div>
                    
                    <div class="flex gap-5 text-xs text-zinc-600 dark:text-gray-400 mb-6">
                        <div class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-zinc-600 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="font-medium">3.0s (0-60)</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-zinc-600 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            <span class="font-medium">617 HP</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-3 mt-auto">
                        <a href="#" class="bg-[#a8c0f0] hover:bg-[#92ade0] text-black text-xs font-bold uppercase tracking-wider py-3 rounded text-center transition">View Details</a>
                        <a href="#" class="border border-zinc-200 dark:border-white/10 hover:border-white/30 text-zinc-900 dark:text-white text-xs font-bold uppercase tracking-wider py-3 rounded text-center transition">Prequalify</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-16 pt-8 border-t border-zinc-200 dark:border-white/5 flex items-center justify-center space-x-6 text-sm font-semibold tracking-wider text-zinc-600 dark:text-gray-500">
            <button class="flex items-center gap-2 hover:text-zinc-900 dark:hover:text-white transition uppercase text-xs">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                Previous
            </button>
            
            <div class="flex space-x-4">
                <a href="#" class="text-[#a8c0f0] border-b-2 border-[#a8c0f0] pb-1">01</a>
                <a href="#" class="hover:text-zinc-900 dark:hover:text-white transition pb-1">02</a>
                <a href="#" class="hover:text-zinc-900 dark:hover:text-white transition pb-1">03</a>
                <span>...</span>
                <a href="#" class="hover:text-zinc-900 dark:hover:text-white transition pb-1">12</a>
            </div>

            <button class="flex items-center gap-2 text-zinc-900 dark:text-white hover:text-[#a8c0f0] transition uppercase text-xs">
                Next
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </button>
        </div>

    </main>
</div>
@endsection