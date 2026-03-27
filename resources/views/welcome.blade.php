@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    
    <section class="mb-12">
        <h1 class="text-3xl font-extrabold text-gray-900 mb-6">Explore cars you'll love</h1>
        <div class="flex space-x-4 overflow-x-auto pb-4 scrollbar-hide">
            @php
                $categories = ['SUVs', 'Sedans', 'Trucks', 'EVs', 'Hybrids', 'Coupes', 'Hatchbacks'];
            @endphp
            @foreach($categories as $category)
                <button class="px-6 py-2 bg-white border border-gray-200 rounded-full font-medium text-gray-700 hover:border-blue-500 hover:text-blue-600 whitespace-nowrap transition">
                    {{ $category }}
                </button>
            @endforeach
        </div>
    </section>

    <section class="mb-12">
        <div class="flex justify-between items-end mb-6">
            <h2 class="text-2xl font-bold text-gray-900">Suggested Vehicles</h2>
            <a href="#" class="text-blue-600 font-medium hover:underline">View All</a>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($suggestedVehicles as $vehicle)
                <x-vehicle-card :vehicle="$vehicle" />
            @endforeach
        </div>
    </section>

    <section class="mb-12 bg-blue-50 rounded-2xl p-8 flex flex-col md:flex-row items-center justify-between border border-blue-100">
        <div>
            <h2 class="text-2xl font-bold text-gray-900 mb-2">Stay up to speed with your car's value</h2>
            <p class="text-gray-600 mb-4">Get personalized insights on your car's value and track it over time.</p>
            <button class="bg-blue-600 text-white px-6 py-3 rounded-lg font-bold hover:bg-blue-700 transition">Get Your Value</button>
        </div>
        <div class="hidden md:block w-48 h-32 bg-blue-200 rounded-lg opacity-50"></div>
    </section>

    <section class="mb-12">
        <div class="flex justify-between items-end mb-6">
            <h2 class="text-2xl font-bold text-gray-900">Recent Price Drops</h2>
            <p class="text-gray-500 text-sm hidden sm:block">We're always repricing inventory to make room for more vehicles.</p>
            <a href="#" class="text-blue-600 font-medium hover:underline">Shop All</a>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($priceDrops as $vehicle)
                <x-vehicle-card :vehicle="$vehicle" />
            @endforeach
        </div>
    </section>

</div>
@endsection