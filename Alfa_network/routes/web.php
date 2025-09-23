<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/character', [CharacterController::class, 'index'])->name('characters.index');

Route::get('/character/create', [CharacterController::class, 'create'])->name('characters.create');

Route::get('/character/{id}', [CharacterController::class, 'show'])->name('characters.show');
