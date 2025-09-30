<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/character', [CharacterController::class, 'index'])->name('characters.index');

Route::get('/character/create', [CharacterController::class, 'create'])->name('characters.create');

Route::get('/character/{characters}', [CharacterController::class, 'show'])->name('characters.show');

Route::post('/character', [CharacterController::class, 'store'])->name('character.store');

Route::delete('/character/{characters}', [CharacterController::class, 'destroy'])->name('characters.destroy');
