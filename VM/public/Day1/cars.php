<?php

class Cars  
{
 
    public $name='Car';
    public $speed_var = '200 Km/h';
    public $canFly_var ="It can't fly";
    public $maxPassengers_var ='5';

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