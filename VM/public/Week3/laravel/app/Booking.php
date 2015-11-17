<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['id','roomId', 'dateArrive', 'dateLeaving','personalId'];
}
