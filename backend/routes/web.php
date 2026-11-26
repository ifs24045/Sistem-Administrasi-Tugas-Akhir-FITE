<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';

// Modul 1 (Kelompok 4 / Tim A): tambahkan require routes/modul1.php di sini.

// Modul 2 (Kelompok 5 / Tim B)
Route::middleware(['auth', 'verified'])
    ->prefix('asesmen')
    ->name('modul2.')
    ->group(__DIR__.'/modul2.php');
