<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CVController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Page d'accueil
Route::get('/', [HomeController::class, 'index'])->name('home');

// CV (page imprimable / téléchargeable en PDF)
Route::get('/cv', [CVController::class, 'index'])->name('cv');

// Contact
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
