<?php

class Cars  extends vehicle
{
 
    public $speed_var = '200 Km/h';
    public $canFly_var ="It can't fly";
    public $maxPassengers_var ='5';

    protect function speed() {
        echo $this->speed_var;
        echo "<br>";
    }
    protect function canFly() {
        echo $this->canFly_var;
        echo "<br>";
    }
    protect function maxPassengers() {
        echo $this->maxPassengers_var;
        echo "<br>";
    }

}
?>