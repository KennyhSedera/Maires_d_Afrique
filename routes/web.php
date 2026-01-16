<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SamcaController;


Route::get('/', [SamcaController::class, 'index'])->name('home');
Route::get('/samca/affiche', [SamcaController::class, 'affiche'])->name('samca.affiche');
Route::get('/samca/magazine', [SamcaController::class, 'magazine'])->name('samca.magazine');
