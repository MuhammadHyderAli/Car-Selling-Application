<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $suggestedVehicles = [
        [
            'id' => 1,
            'year' => 2025,
            'make' => 'Nissan',
            'model' => 'Altima',
            'trim' => '2.5 SV',
            'mileage' => 18000,
            'price' => 21990,
            'monthly_payment' => 357,
            'delivery_text' => 'Free shipping Get it Saturday',
            'is_recent' => true,
            'image' => 'https://placehold.co/600x450/e2e8f0/475569?text=Altima'
        ],
        [
            'id' => 2,
            'year' => 2024,
            'make' => 'Nissan',
            'model' => 'Rogue',
            'trim' => 'SV',
            'mileage' => 19000,
            'price' => 23990,
            'monthly_payment' => 390,
            'delivery_text' => 'Free shipping Get it Sunday',
            'is_recent' => true,
            'image' => 'https://placehold.co/600x450/e2e8f0/475569?text=Rogue'
        ],
        // Add 2 more arrays here to fill the row...
    ];

    $priceDrops = [
        [
            'id' => 3,
            'year' => 2024,
            'make' => 'Ford',
            'model' => 'Escape',
            'trim' => 'Active',
            'mileage' => 13000,
            'price' => 21990,
            'original_price' => 22590,
            'price_drop' => true,
            'monthly_payment' => 357,
            'delivery_text' => 'Free shipping Get it Sunday',
            'image' => 'https://placehold.co/600x450/e2e8f0/475569?text=Escape'
        ],
        // Add more items here...
    ];

    return view('welcome', compact('suggestedVehicles', 'priceDrops'));
});