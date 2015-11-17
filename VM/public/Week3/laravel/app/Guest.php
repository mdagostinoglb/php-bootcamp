
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = ['personalId','surname', 'name', 'age','roomId'];
}

