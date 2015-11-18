<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Rooms;
use Validator;

class RoomsController extends Controller
{

    public function index()
    {
        return Rooms::all();
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Beds' => 'required|numeric',
            'Floor' => 'required|numeric',
            'Price_per_night' => 'required|numeric',
            'Free' => 'required|boolean'
        ]);
        
        if ($validator->fails()) {
            return $validator->errors()->all();
        }
        
        $newRooms = Rooms::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $room = Rooms::find($id);
        $room->Beds = $request->input('Beds');
        $room->Floor = $request->input('Floor');
        $room->Price_per_night = $request->input('Price_per_night');
        $room->Free = $request->input('Free');
        $room->save();
    }
}
