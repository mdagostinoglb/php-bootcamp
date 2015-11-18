<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['arrive_date', 'leave_date', 'personal_ids', 'room_id'];
}
?>
