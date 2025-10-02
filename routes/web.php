<?php

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\BookController as PublicBookController;
use App\Http\Controllers\FavouriteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicBookController::class, 'latest'])->name('home');

Route::resource('books', PublicBookController::class)->only(['index', 'show']);

Route::middleware(['auth'])->group(function () {
    Route::post('books/{book}/favourite', [FavouriteController::class, 'toggle'])->name('books.toggleFavourite');
    Route::get('collection', [PublicBookController::class, 'userFavourites'])->name('collection.index');
});

Route::middleware(['auth', 'role:1'])->prefix('admin')->as('admin.')->group(function () {
    Route::resource('books', BookController::class);
});
