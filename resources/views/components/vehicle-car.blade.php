@props(['vehicle'])

<div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300 border border-gray-100 group cursor-pointer relative">
    
    <button class="absolute top-3 right-3 z-10 p-1.5 bg-white/80 rounded-full hover:bg-white transition">
        <svg class="w-5 h-5 text-gray-500 hover:text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
    </button>

    <div class="aspect-[4/3] bg-gray-200 overflow-hidden">
        <img src="{{ $vehicle['image'] }}" alt="{{ $vehicle['make'] }} {{ $vehicle['model'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
    </div>

    <div class="p-4">
        <div class="flex space-x-2 mb-2 min-h-[24px]">
            @if(isset($vehicle['is_recent']) && $vehicle['is_recent'])
                <span class="px-2 py-1 text-xs font-semibold border border-gray-300 rounded-md text-gray-600">Recent</span>
            @endif
            @if(isset($vehicle['price_drop']) && $vehicle['price_drop'])
                <span class="px-2 py-1 text-xs font-semibold bg-blue-100 text-blue-800 rounded-md">Price Drop</span>
            @endif
        </div>

        <h3 class="text-lg font-bold text-gray-900 truncate">{{ $vehicle['year'] }} {{ $vehicle['make'] }} {{ $vehicle['model'] }}</h3>
        <p class="text-sm text-gray-500 mb-3">{{ $vehicle['trim'] }} • {{ number_format($vehicle['mileage']) }} miles</p>

        <div class="flex items-end space-x-2 mb-1">
            <h4 class="text-xl font-bold text-gray-900">${{ number_format($vehicle['price']) }}</h4>
            @if(isset($vehicle['original_price']))
                <span class="text-sm text-gray-400 line-through mb-1">was ${{ number_format($vehicle['original_price']) }}</span>
            @endif
        </div>
        
        <p class="text-sm font-medium text-gray-600 border-t pt-2 mt-2 border-gray-100">
            ${{ $vehicle['monthly_payment'] }}/mo estimated
        </p>

        <p class="text-xs font-semibold text-green-600 mt-2 flex items-center">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            {{ $vehicle['delivery_text'] }}
        </p>
    </div>
</div>