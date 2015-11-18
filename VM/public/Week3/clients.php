<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['surname', 'name', 'age', 'room_id'];
}
?>
