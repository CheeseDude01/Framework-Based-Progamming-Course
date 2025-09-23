<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/character', [CharacterController::class, 'index']);

Route::get('/character/create', function () {
    return view('character.create');
});

Route::get('/character/{id}', function ($id){

    return view('character.show', ["id" => $id]);
});
