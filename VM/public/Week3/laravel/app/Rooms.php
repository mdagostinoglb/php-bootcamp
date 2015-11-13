<?php
namespace week3;
use Illuminate\Database\Eloquent\Model;

    class Rooms extends Model
    {
        protected $fillable = ['room_beds', 'room_floor', 'price_per_night', 'free'];
    }
