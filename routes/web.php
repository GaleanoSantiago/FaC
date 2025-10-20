<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\CarreraController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/carreras', function () {
//     return view('carreras.index');
// })->name('carreras.index');

// Ruta dinámica para cada carrera
// Route::get('/carreras/{id}', function ($id) {
//     return view('carreras.show', compact('id'));
// })->name('carreras.show');


// ================== Noticias ====================

Route::get('/noticias', [NoticiaController::class, 'index'])->name('noticias.index');
Route::get('/noticias/{id}', [NoticiaController::class, 'show'])->name('noticias.show');

// ================== Eventos ====================

Route::get('/eventos', [EventoController::class, 'index'])->name('eventos.index');
Route::get('/eventos/{id}', [EventoController::class, 'show'])->name('eventos.show');

// ================== Carreras ====================

Route::get('/carreras', [CarreraController::class, 'index'])->name('carreras.index');
Route::get('/carreras/{id}', [CarreraController::class, 'show'])->name('carreras.show');

