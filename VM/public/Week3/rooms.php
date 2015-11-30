<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['beds', 'floor', 'price_per_night', 'free'];
}
?>
