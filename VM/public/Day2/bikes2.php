<?php


class Bikes 
{
    public $name = 'Bike';
    public $speed_var = '80 Km/h';
    public $canFly_var ="It can't fly";
    public $maxPassengers_var ='2';


    public function speed() {
        return $this->speed_var;
    }
    public function canFly() {
        return $this->canFly_var;

    }
    public function maxPassengers() {
        return ($this->maxPassengers_var);
    }
    public function getName() {
        return $this->name;
    }

}
?>


