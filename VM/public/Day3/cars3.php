<?php

class Cars extends Transport 
{
    public $name='Car';
    public $speed_var = '200';
    public $canFly_var ="It can't fly";
    public $maxPassengers_var ='5';

    public function calculate($minutes) {
    	$speed_var = '200';
        $total= $speed_var*$minutes/'60';
        return $total;
    }

}
?>    

