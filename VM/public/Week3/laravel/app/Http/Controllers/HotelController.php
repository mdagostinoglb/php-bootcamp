<?php
    namespace week3\Http\Controllers;
    use DB;
    use Illuminate\Http\Request;
    use week3\Http\Requests;
    use Response;
    use week3\Http\Controllers\Controller;
    use week3\Rooms;
    use week3\Guests;
    use week3\Bookings;
    use Log;
    use Validator;
    
    class HotelController extends Controller
    {
        //ROOMS
	      public function rooms(Request $request)
	      {
            if ($request->input('free')=='true'){
                $free='1';
                return Rooms::where('free',$free)->get();
	          } elseif ($request->input('free')=='false') {
                $free='0';
                return Rooms::where('free',$free)->get();
            } else {
                return Rooms::all();
            }
        }
        public function room($id)
        {
            return Rooms::where('id',$id)->get();
        }
        public function uproom(Request $request, $id)
        {
            $validator = Validator::make($request->all(), [
                'room_beds' => 'required|numeric',
                'room_floor' => 'required|numeric',
                'price_per_night' => 'required|numeric',
                'free' => 'required|boolean'
            ]);
            if ($validator->fails()) {
                return $validator->errors()->all();
            }
            $room=Rooms::where('id',$id)->first();
            $room->room_beds = $request->input('room_beds');
            $room->room_floor = $request->input('room_floor');
            $room->price_per_night = $request->input('price_per_night');
            $room->free = $request->input('free');
            $room->save();
            return $room;
        }
        public function postroom(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'room_beds' => 'required|numeric',
                'room_floor' => 'required|numeric',
                'price_per_night' => 'required|numeric',
                'free' => 'required|boolean'
            ]);
            if ($validator->fails()) {
                return $validator->errors()->all();
            }
            $newRooms = Rooms::create($request->all());
            return $newRooms;
        }
	
        //GUESTS
        public function guests()
        {
            return Guests::all(); 
        }
        public function guest($id)
        {
            return Guests::where('id',$id)->get();
        }
        public function postguest(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'surname' => 'required|string',
                'name' => 'required|string',
                'age' => 'required|numeric',
                'room_id' => 'required|numeric'
            ]);
            if ($validator->fails()) {
                return $validator->errors()->all();
            }
            $room=$request->input('room_id');
            $false=Rooms::where('id', $room)->first();
            $false->free = 0;
            $false->save();
            $newGuests = Guests::create($request->all());
            return $newGuests;
        }
        public function upguest(Request $request, $id)
        {
            $validator = Validator::make($request->all(), [
                'surname' => 'required|string',
                'name' => 'required|string',
                'age' => 'required|numeric',
                'room_id' => 'required|numeric'
            ]);
            if ($validator->fails()) {
                return $validator->errors()->all();
            }
            $guest=Guests::where('id',$id)->first();
            $guest->surname = $request->input('surname');
            $guest->name = $request->input('name');
            $guest->age = $request->input('age');
            $guest->room_id = $request->input('room_id');
            $guest->save();
            $room=$request->input('room_id');
            $false=Rooms::where('id', $room)->first();
            $false->free = 0;
            $false->save();
            return $guest;
        }
	
        //BOOKINGS
        public function bookings()
        {
            return Bookings::all(); 
        }
        public function booking($id)
        {
            return Bookings::where('id',$id)->get();
        }
        public function postbooking(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'room_id' => 'required|numeric',
                'day_of_arrive' => 'required|date',
                'day_of_leaving' => 'required|date',
                'personal_ids' => 'required|string'
            ]);
            if ($validator->fails()) {
                return $validator->errors()->all();
            }
            $newBookings = Bookings::create($request->all());
            return $newBookings;
        }
        public function upbooking(Request $request, $id)
        {
            $validator = Validator::make($request->all(), [
                'room_id' => 'required|numeric',
                'day_of_arrive' => 'required|date',
                'day_of_leaving' => 'required|date',
                'personal_ids' => 'required|string'
            ]);
            if ($validator->fails()) {
                return $validator->errors()->all();
            }
            $booking=Bookings::where('id',$id)->first();
            $booking->room_id = $request->input('room_id');
            $booking->day_of_arrive = $request->input('day_of_arrive');
            $booking->day_of_leaving = $request->input('day_of_leaving');
            $booking->personal_ids = $request->input('personal_ids');
            $booking->save();
            return $booking;
        }
    }
?>
