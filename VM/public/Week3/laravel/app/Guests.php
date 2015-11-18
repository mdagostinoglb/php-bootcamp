<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Guests extends Model
{

    protected $fillable = [
        'Surname',
        'Name',
        'Age',
        'Rooms_id'
    ];

    public function Rooms()
    {
        return $this->belongsTo('App\Rooms');
    }

    public function Bookings()
    {
        return $this->hasMany('App\Bookings');
    }
}