<?php

namespace App\Http\Controllers;

use App\Models\Characters;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index(){
        // route---> /character/
        $characters = Characters::orderBy('created_at', 'desc')->get();

        return view('character.index', ["characters" => $characters]);
    }

    public function show($id){

    }

    public function create(){

    }

    public function store(){

    }
}
