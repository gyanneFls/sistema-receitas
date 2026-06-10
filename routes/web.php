<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'teste')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('', 'welcome')->name('home');
});

require __DIR__.'/settings.php';
