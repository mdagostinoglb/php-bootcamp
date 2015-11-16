<?php
namespace week3;
use Illuminate\Database\Eloquent\Model;

    class Guests extends Model
    {
        protected $table = "guests";
	    protected $fillable = ['surname', 'name', 'age', 'room_id'];
	
        public function room()
        {
            return $this->belongsTo('week3\Rooms')
        }
	
	    public function bookings()
        {
            return $this->hasMany('week3\Bookings')
        }
    }
