<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{

    protected $fillable = [
        'Arrival_Date',
        'Leaving_Date',
        'Rooms_id',
        'Guests_id'
    ];

    public function Rooms()
    {
        return $this->belongsTo('App\Rooms');
    }

    public function Guests()
    {
        return $this->belongsTo('App\Guests');
    }
}