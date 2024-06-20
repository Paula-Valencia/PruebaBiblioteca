<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BibliotecaController;

// Middleware de autenticación
Route::middleware(['auth'])->group(function () {
    Route::get('/bibliotecalistar', [BibliotecaController::class, 'index'])->name('bibliotecas.index');
    Route::get('/bibliotecacrear', [BibliotecaController::class, 'create'])->name('bibliotecas.create');
    Route::post('/bibliotecastore', [BibliotecaController::class, 'store'])->name('bibliotecas.store');
});