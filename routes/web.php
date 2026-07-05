<?php

use Illuminate\Support\Facades\Route;

Route::get('/library', function () {
    return view('library');
});

Route::get('/home', function () {
    return view('home');
});
