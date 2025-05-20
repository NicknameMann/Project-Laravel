<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/katalog', function () {
    return view('katalog');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/tentangkami', function () {
    return view('tentangkami');
})->name('tentangkami');

Route::get('/booking', function () {
    // Tampilkan halaman awal berupa form booking
    return redirect()->route('bookings.create');
});

Route::resource('bookings', BookingController::class);
