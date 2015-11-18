<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bookings;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BookingsController extends Controller
{

    public function index()
    {
        return Bookings::all();
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Arrival_Date' => 'required|date',
            'Leaving_Date' => 'required|date',
            'Rooms_id' => 'required|numeric',
            'Guests_id' => 'required|numeric'
        ]);
        
        if ($validator->fails()) {
            return $validator->errors()->all();
        }
        
        $newBooking = Bookings::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $booking = Bookings::find($id);
        $booking->Arrival_Date = $request->input('Arrival_Date');
        $booking->Leaving_Date = $request->input('Leaving_Date');
        $booking->Rooms_id = $request->input('Rooms_id');
        $booking->Guests_id = $request->input('Guests_id');
        $booking->save();
    }
}
    