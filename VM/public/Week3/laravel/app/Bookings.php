<?php
namespace week3;
use Illuminate\Database\Eloquent\Model;

    class Bookings extends Model
    {
        protected $fillable = ['room_id', 'day_of_arrive', 'day_of_leaving', 'personal_ids'];
    }
