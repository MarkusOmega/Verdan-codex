<?php

namespace App\Http\Controllers;

use App\Models\character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $user = auth()->user();
        //$character = character::find(1);	

        //# add character to the current user
        //$user->characters()->save($character);
        
        
        
        //$user->characters()->attach([1]);
        //dd($user->characters);
        //$professionIds = [1, 2];
        // #add professions to a character (many to many)
        //$character->professions()->attach($professionIds);
       
        //dd($character->professions);
        if($user->characters()->exists()){
            return view('characters', ['characters' => $user->characters]);
        }
        else{
            return view('empty', ['type' => 'Characters']);            
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(character $character)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(character $character)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, character $character)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(character $character)
    {
        //
    }
}
