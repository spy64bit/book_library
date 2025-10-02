<?php

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\BookController as PublicBookController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicBookController::class, 'latest'])->name('home');

Route::resource('books', PublicBookController::class)->only(['index', 'show']);

Route::middleware(['auth', 'role:1'])->prefix('admin')->as('admin.')->group(function () {
    Route::resource('books', BookController::class);
});
