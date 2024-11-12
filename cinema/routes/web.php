<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FilmeController;
use App\Http\Controllers\ComidaController;
use App\Http\Controllers\PromocaoController;
use App\Http\Controllers\GeneroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/filmes', function () {
    return view('filmes');
})->middleware(['auth', 'verified'])->name('filmes');
Route::get('/comidas', function () {
    return view('comidas');
})->middleware(['auth', 'verified'])->name('comidas');
Route::get('/generos', function () {
    return view('generos');
})->middleware(['auth', 'verified'])->name('generos');
Route::get('/promocaos', function () {
    return view('promocaos');
})->middleware(['auth', 'verified'])->name('promocaos');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
