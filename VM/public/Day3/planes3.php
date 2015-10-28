<?php

class Planes extends Transport implements iT 
{

    public function speed() {
        return $speed_var = '900';
    }
    public function canFly() {
        return $canFly_var ='It can fly';

    }
    public function maxPassengers() {
        return $maxPassengers_var ='450';
    }
    public function getName() {
		return $name='Plane';
    }

    public function calculate($minutes) {
    	$speed_var = '900';
        $total= $speed_var*$minutes/'60';
        return $total;
    }

}
?>    

