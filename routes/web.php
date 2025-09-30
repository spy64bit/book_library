<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Route::middleware(['auth'])->get('/', function () {
//     return view('home');
// })->name('home');
