<?php

namespace App\Http\Controllers;

use App\Models\Characters;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index(){
        // route---> /character/
        $characters = Characters::orderBy('created_at', 'desc')->paginate(10);

        return view('character.index', ["characters" => $characters]);
    }

    public function show($id){
        // route --> /character/{id}
        $characters = Characters::findOrFail($id);

        return view('character.show', ["characters" => $characters]);
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
