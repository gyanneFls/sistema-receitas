<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReceitaController;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return redirect()->route('receitas.index');
    })->name('dashboard');

    Route::resource('receitas', ReceitaController::class);
});

require __DIR__.'/settings.php';