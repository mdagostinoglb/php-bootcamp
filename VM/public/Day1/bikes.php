<?php


class Bikes extends vehicle
{
 
    public $speed_var = '80 Km/h';
    public $canFly_var ="It can't fly";
    public $maxPassengers_var ='2';


    protect function speed() {
        $this->speed_var;
    }
    protect function canFly() {
        $this->canFly_var;
    }
    protect function maxPassengers($num) {
        $num->maxPassengers_var;
    }

}
?>


