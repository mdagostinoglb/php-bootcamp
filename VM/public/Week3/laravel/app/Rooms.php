<?php
namespace week3;
use Illuminate\Database\Eloquent\Model;

    class Rooms extends Model
    {
        protected $table = "rooms";
    	protected $fillable = ['room_beds', 'room_floor', 'price_per_night', 'free'];
	
	    public function guests()
        {
            return $this->hasMany('week3\Guests')
        }
	
	    public function bookings()
        {
            return $this->hasMany('week3\Bookings')
        }
    }
