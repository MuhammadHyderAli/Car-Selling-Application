<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/inventory', function () {
    return view('inventory');
})->name('inventory');
Route::get('/vehicle', function () {
    return view('vehicle');
})->name('vehicle.show');
Route::get('/sell', function () {
    return view('sell');
})->name('sell');
Route::get('/tradein', function () {
    return view('tradein');
})->name('tradein');

Route::get('/concierge', function () {
    return view('concierge');
})->name('concierge');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');