<?php

use App\Http\Controllers\PalabraController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Ruta que devuelve todas las palabras de la tabla 'palabras'
Route::get('/palabras', [PalabraController::class, 'index'])->name('palabras.index');

//Ruta que devuelve todas las palabras de la tabla 'palabras' con estilos css
Route::get('/palabrasStyled', [PalabraController::class, 'indexStyled'])->name('palabras.index');

//Ruta que devuelve todas las palabras de la tabla 'palabras' con estilos css
Route::get('/palabrasBlade', [PalabraController::class, 'indexBlade'])->name('palabras.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
