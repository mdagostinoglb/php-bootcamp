<?php

class Bikes
{
 
    public $speed_var = '80 Km/h';
    public $canFly_var ="It can't fly";
    public $maxPassengers_var ='2';


    public function speed() {
        echo $this->speed_var;
        echo "<br>";
    }
    public function canFly() {
        echo $this->canFly_var;
        echo "<br>";
    }
    public function maxPassengers() {
        echo $this->maxPassengers_var;
        echo "<br>";
    }

}
?>
