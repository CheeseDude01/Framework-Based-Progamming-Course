<?php

namespace App\Http\Controllers;

use App\Models\Characters;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index(){
        // route---> /character/
        $character = Characters::orderBy('created_at', 'desc')->get();

        return view('character.index', ["character" => $character]);
    }

    public function show($id){
        // route --> /character/{id}
        $character = Characters::findOrFail($id);

        return view('character.show', ["character" => $character]);
    }

    public function create(){
        // route --> /character/create
        // render a create view (with web form) to users

        return view('character.create');
    }

    public function store(){

    }

    public function destroy($id){
        // --> /character/{id} (DELETE)
        // handle delete request to delete a ninja record from table
    }
}
