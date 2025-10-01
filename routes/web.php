<?php

use App\Http\Controllers\Admin\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::middleware(['auth', 'role:1'])->prefix('admin')->as('admin.')->group(function () {
    Route::resource('books', BookController::class);
});
