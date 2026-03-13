<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\animeController;

Route::get('/', function () {
    return view('home');
});
Route::get('/ratings', function () {
    return view('ratings');
});
Route::get('/management', function () {
    return view('management');
});

Route::post('/management', [animeController::class, 'createCharacter'])->name('add.character');
