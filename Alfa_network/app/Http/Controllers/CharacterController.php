<?php

namespace App\Http\Controllers;

use App\Models\Characters;
use App\Models\Faction;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index(){
        // route---> /character/
        $characters = Characters::with('faction')->orderBy('created_at', 'desc')->paginate(10);

        return view('character.index', ["characters" => $characters]);
    }

    public function show($id){
        // route --> /character/{id}
        $characters = Characters::with('faction')->findOrFail($id);

        return view('character.show', ["characters" => $characters]);
    }

    public function create(){
        // route --> /character/create
        // render a create view (with web form) to users
        $factions = Faction::all();

        return view('character.create', ["factions" => $factions]);
    }

    public function store(){

    }

    public function destroy($id){
        // --> /character/{id} (DELETE)
        // handle delete request to delete a ninja record from table
    }
}
