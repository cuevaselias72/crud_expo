<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Ruta de bienvenida (opcional, por si quieres ver algo al entrar a localhost:8000)
Route::get('/', function () {
    return view('welcome');
});

// Ruta del Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// --- ESTE ES EL BLOQUE QUE TE FALTA ---
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// --------------------------------------

require __DIR__.'/auth.php';