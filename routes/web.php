<?php

use Illuminate\Support\Facades\Route;

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
