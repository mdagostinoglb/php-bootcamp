<?php
namespace week3;
use Illuminate\Database\Eloquent\Model;

    class Guests extends Model
    {
        protected $fillable = ['surname', 'name', 'age', 'room_id'];
    }
