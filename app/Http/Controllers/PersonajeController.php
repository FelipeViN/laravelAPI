<?php

namespace App\Http\Controllers;

use App\Models\Personaje;
use Illuminate\Http\Request;

class PersonajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Personaje::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'heroname' => 'required',
            'hero_img' => 'required',
            'name' => 'required',
            'role' => 'required',
            'description' => 'required',
            'primaryAtack' => 'required',
            'pA_img' => 'required',
            'secondaryAtack' => 'required',
            'sA_img' => 'required',
            'Ability_1' => 'required',
            'a1_img' => 'required',
            'Ability_2' => 'required',
            'a2_img' => 'required',
            'Ability_3' => 'required',
            'a3_img' => 'required',
            'UltimateAbility' => 'required',
            'a4_img' => 'required',
        ]);

        $personaje = new Personaje;
        $personaje->heroname = $request->heroname;
        $personaje->hero_img = $request->hero_img;
        $personaje->name = $request->name;
        $personaje->role = $request->role;
        $personaje->description = $request->description;
        $personaje->primaryAtack = $request->primaryAtack;
        $personaje->pA_img = $request->pA_img;
        $personaje->secondaryAtack = $request->secondaryAtack;
        $personaje->sA_img = $request->sA_img;
        $personaje->Ability_1 = $request->Ability_1;
        $personaje->a1_img = $request->a1_img;
        $personaje->Ability_2 = $request->Ability_2;
        $personaje->a2_img = $request->a2_img;
        $personaje->Ability_3 = $request->Ability_3;
        $personaje->a3_img = $request->a3_img;
        $personaje->UltimateAbility = $request->UltimateAbility;
        $personaje->a4_img = $request->a4_img;
    
        $personaje->save();
        return $personaje;
    }

    /**
     * Display the specified resource.
     */
    public function show(Personaje $personaje)
    {
        return $personaje;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personaje $personaje)
    {
        //dd($request->all());
        $request->validate([
            'heroname' => 'required',
            'hero_img' => 'required',
            'name' => 'required',
            'role' => 'required',
            'description' => 'required',
            'primaryAtack' => 'required',
            'pA_img' => 'required',
            'secondaryAtack' => 'required',
            'sA_img' => 'required',
            'Ability_1' => 'required',
            'a1_img' => 'required',
            'Ability_2' => 'required',
            'a2_img' => 'required',
            'Ability_3' => 'required',
            'a3_img' => 'required',
            'UltimateAbility' => 'required',
            'a4_img' => 'required',
        ]);
        
        $personaje->heroname = $request->heroname;
        $personaje->hero_img = $request->hero_img;
        $personaje->name = $request->name;
        $personaje->role = $request->role;
        $personaje->description = $request->description;
        $personaje->primaryAtack = $request->primaryAtack;
        $personaje->pA_img = $request->pA_img;
        $personaje->secondaryAtack = $request->secondaryAtack;
        $personaje->sA_img = $request->sA_img;
        $personaje->Ability_1 = $request->Ability_1;
        $personaje->a1_img = $request->a1_img;
        $personaje->Ability_2 = $request->Ability_2;
        $personaje->a2_img = $request->a2_img;
        $personaje->Ability_3 = $request->Ability_3;
        $personaje->a3_img = $request->a3_img;
        $personaje->UltimateAbility = $request->UltimateAbility;
        $personaje->a4_img = $request->a4_img;
    
        $personaje->update();
        return $personaje;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personaje $personaje)
    {
        $personaje->delete();
        return response()->noContent();
    }
}
