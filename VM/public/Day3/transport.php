<?php


abstract class Transport implements iT
{
    public $name ;
    public $speed_var;
    public $canFly_var;
    public $maxPassengers_var;


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

    public function calculate($minutes) {
    	return $this->$total;
    }

}
?>

