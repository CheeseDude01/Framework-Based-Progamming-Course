<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/character', [CharacterController::class, 'index']);

Route::get('/character/create', [CharacterController::class, 'create']);

Route::get('/character/{id}', [CharacterController::class, 'show']);
