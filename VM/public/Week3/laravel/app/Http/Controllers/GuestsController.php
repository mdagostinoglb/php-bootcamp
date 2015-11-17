<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GuestsController extends Controller
{
    
    public function index()
    {
       return Guest::all(); 
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'surname' => 'required|string',
            'name' => 'required|string',
            'age' => 'required|numeric',
            'roomId' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            return $validator->errors()->all();
            //return response()->json("invalid_data",  401);
        }

        $newGuest = Guest::create($request->all());
        return $newGuest;
    }


    public function update(Request $request, $personalId)
    {
        $guest = Guest::where('personalId' => $personalId)->get();
        $guest->surname = $request->input('surname');
        $guest->name = $request->input('name');
        $guest->age = $request->input('age');
        $guest->roomId = $request->input('roomId');
        $guest->save();
        return $guest;
    }

}