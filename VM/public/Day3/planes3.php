<?php

class Planes extends Transport 
{
    public $name='Plane';
    public $speed_var = '900';
    public $canFly_var ='It can fly';
    public $maxPassengers_var ='450';

    public function calculate($minutes) {
    	$speed_var = '900';
        $total= $speed_var*$minutes/'60';
        return $total;
    }

}
?>    

