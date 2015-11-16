<?php
namespace week3;
use Illuminate\Database\Eloquent\Model;

    class Bookings extends Model
    {
        protected $table = "bookings";
	    protected $fillable = ['room_id', 'day_of_arrive', 'day_of_leaving', 'personal_ids'];
	
	    public function room()
        {
            return $this->belongsTo('week3\Rooms')
        }
	
	    public function personal()
        {
            return $this->belongsTo('week3\Guests')
        }
    }
