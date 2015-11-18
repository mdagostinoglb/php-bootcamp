<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\bookings;
use Log;
use Validator;

class BookingsController extends Controller
{
    public function index()
    {
       return Booking::all(); 
    }

    public function store(Request $request)
    {
         $validator = Validator::make($request->all(), [
                'arrive_date' => 'required|date',
                'leave_date' => 'required|date',
                'personal_ids' => 'required|string',
                'room_id' => 'required|numeric'
            ]);
            if ($validator->fails()) {
                return $validator->errors()->all();
            }
            $newBooking = Booking::create($request->all());
            return $newBooking;
    }
    
    public function booking($id)
    {
        return Booking::where('id',$id)->get();
    }

    public function update(Request $request, $id)
    {
            $booking=Booking::where('id',$id)->first();
            $booking->arrive_date = $request->input('arrive_date');
            $booking->leave_date = $request->input('leave_date');
            $booking->personal_ids = $request->input('personal_ids');
            $booking->room_id = $request->input('room_id');
            $booking->save();
            return $booking;
    }
    
}
