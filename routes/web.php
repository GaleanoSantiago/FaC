<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');


Route::get('/carreras', function () {
    return view('carreras');
})->name('carreras');
