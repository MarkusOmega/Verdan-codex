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
        $character = character::find(1);	
        
        //$professionIds = [1, 2];
        //$character->professions()->attach($professionIds);
        
        dd($character->professions);
        //return view('agenda', ['name' => 'agenda' ,'user_tasks' => $user_tasks, 'damage_form' => $damage_form_car, 'user_id' => $user_id, 'brands' => $brands, 'points' => $points, 'points_connection' => $points_connection, 'task_user_name' => $task_user_name, 'todays_date' => $todays_date]);
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
