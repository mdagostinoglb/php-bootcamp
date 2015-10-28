<?php

class Bikes extends Transport implements iT
{

    public function speed() {
        return $speed_var = '80';
    }
    public function canFly() {
        return $canFly_var ="It can't fly";

    }
    public function maxPassengers() {
        return $maxPassengers_var ='2';
    }
    public function getName() {
		return $name='Bike';
    }

    public function calculate($minutes) {
    	$speed_var = '80';
        $total= $speed_var*$minutes/'60';
        return $total;
    }

}
?>    

