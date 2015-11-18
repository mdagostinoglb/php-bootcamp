<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{

    protected $fillable = [
        'Beds',
        'Floor',
        'Price_per_night',
        'Free'
    ];

    public function Bookings()
    {
        return $this->hasMany('App\Bookings');
    }

    public function Guests()
    {
        return $this->hasMany('App\Guests');
    }
}