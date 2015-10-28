<?php

class Cars extends Transport implements iT
{

    public function speed() {
        return $speed_var = '200';
    }
    public function canFly() {
        return $canFly_var ="It can't fly";

    }
    public function maxPassengers() {
        return $maxPassengers_var ='5';
    }
    public function getName() {
		return $name='Plane';
    }

    public function calculate($minutes) {
    	$speed_var = '200';
        $total= $speed_var*$minutes/'60';
        return $total;
    }

}
?>    

