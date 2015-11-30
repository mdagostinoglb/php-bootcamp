<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\rooms;
use Log;
use Validator;

class RoomsController extends Controller
{
    public function index()
     {
            if ($request->input('free')=='true')
            {
                $free='1';
                return Room::where('free',$free)->get();
	        } 
            elseif ($request->input('free')=='false') 
            {
                $free='0';
                return Room::where('free',$free)->get();
            }
            else 
            {
                return Room::all();
            }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'beds' => 'required|numeric',
            'floor' => 'required|numeric',
            'price_per_night' => 'required|numeric',
            'free' => 'required|boolean'
        ]);
        if ($validator->fails()) {
            return $validator->errors()->all();
           
        }
        $newRoom = Room::create($request->all());
        return $newRoom;
    }
    
    public function room($id)
    {
        return Room::where('id',$id)->get();
    }

    public function update(Request $request, $id)
    {
        $room = Room::where('id' => $id)->get();
        $room->beds = $request->input('beds');
        $room->floor = $request->input('floor');
        $room->price_per_night = $request->input('price_per_night');
        $room->free = $request->input('free');
        $room->save();
        return $room;
    }
    
}
