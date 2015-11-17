<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Room;
use Log;
use Validator;

class RoomsController extends Controller
{

    public function index()
    {
       return Room::all(); 
    }

    public function store(Request $request)
    {
        //Log::info('RoomController@store:  request' . var_export($request->all(), true));
        //Log::info(Input::get('beds'));

/*
        $newRoom = new Room();
        $newRoom->beds = $request->input('beds');
        $newRoom->floor = $request->input('floor');
        $newRoom->price_per_night = $request->input('price_per_night');
        $newRoom->free = $request->input('free');
        $newRoom->save();

        return $newRoom;
*/

        $validator = Validator::make($request->all(), [
            'beds' => 'required|numeric',
            'floor' => 'required|numeric',
            'price_per_night' => 'required|numeric',
            'free' => 'required|boolean'
        ]);

        if ($validator->fails()) {
            return $validator->errors()->all();
            //return response()->json("invalid_data",  401);
        }


        $newRoom = Room::create($request->all());
        return $newRoom;
    }


    public function update(Request $request, $id)
    {
        $room = Rooms::where('id' => $id)->get();
        $room->beds = $request->input('beds');
        $room->floor = $request->input('floor');
        $room->price_per_night = $request->input('price_per_night');
        $room->free = $request->input('free');
        $room->save();
        return $room;
    }

}
