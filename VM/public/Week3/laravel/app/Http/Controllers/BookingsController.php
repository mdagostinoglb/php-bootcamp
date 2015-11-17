<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BookingsController extends Controller
{
    
    public function index()
    {
       return Guest::all(); 
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'dateArrive' => 'required|date',
            'dateLeaving' => 'required|date',
            'personalId' => 'required|numeric',
            'roomId' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            return $validator->errors()->all();
            //return response()->json("invalid_data",  401);
        }


        $newBooking = Room::create($request->all());
        return $newBooking;
    }


    public function update(Request $request, $id)
    {
        $booking = Guest::where('id' => $id)->get();
        $booking->dateArrive = $request->input('dateArrive');
        $booking->dateLeaving = $request->input('dateLeaving');
        $booking->personalId = $request->input('personalId');
        $booking->roomId = $request->input('roomId');
        $booking->save();
        return $booking;
    }

}
