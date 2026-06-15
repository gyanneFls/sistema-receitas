<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReceitaController;

Route::resource('receitas', ReceitaController::class);


Route::view('/', 'welcome')->name('home');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('receitas.index', 'receitas.index')->name('dashboard');
});

require __DIR__.'/settings.php';
