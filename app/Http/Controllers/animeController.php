<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\character_infoModel;

class animeController extends Controller
{
    public function createCharacter(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif:2048'
        ]);

        $charcterExist = character_infoModel::where('name', $request->name)->first();
        
        if($charcterExist){
            return back()->with('error', 'Character Already Created')->withInput();
        }

        if($request->hasFile('icon')){
            $imagePath = $request->file('icon')->store('characters', 'public');
        }

        character_infoModel::create([
            'name' => $request->name,
            'description' => $request->description,
            'icon' => $imagePath ?? null,
            'goals' => $request->goals,
            'anime' => $request->anime
        ]);
        return back()->with('success', 'Character Created Successfully');
    }

    public function getAnimeCharacters(){
        $getCharacters = character_infoModel::all();
        return view('/management', compact('getCharacters'));
    }
}
