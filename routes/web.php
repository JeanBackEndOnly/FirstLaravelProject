<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\animeController;

// GET Navigations ================================================
Route::get('/', function () {
    return view('home');
});
Route::get('/ratings', function () {
    return view('ratings');
});
Route::get('/management', function () {
    return view('management');
});

// POST ================================================
Route::post('/management', [animeController::class, 'createCharacter'])->name('add.character');

// GET =================================================
Route::get('/management', [animeController::class, 'getAnimeCharacters']);