<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/a-propos', [PageController::class, 'aPropos'])->name('a_propos');
Route::get('/questions-frequentes', [PageController::class, 'questionsFrequentes'])->name('questions_frequentes');
Route::get('/notre-offre', [PageController::class, 'notreOffre'])->name('notre_offre');
Route::get('/tarifs', [PageController::class, 'tarifs'])->name('tarifs');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/home', [PageController::class, 'home'])->name('home');


