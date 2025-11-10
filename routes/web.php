<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;

Route::get('/', [MusicController::class, 'index'])->name('music.index');
Route::get('/music', [MusicController::class, 'index']);

Route::get('/music/genre/{genre}', [MusicController::class, 'genre'])->name('music.genre');

Route::get('/music/{id}', [MusicController::class, 'show'])->whereNumber('id')->name('music.show');

