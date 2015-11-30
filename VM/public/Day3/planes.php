<?php

class planes extends vehicle
{
    public $typeVehicle = 'Planes';
    public function displayvehicle()
    {
    echo $this->typevehicle;
    }
    
	public function canFly()
    {
		return ("It can fly");
	}
    
	public function speed()
	{ 
    return 900;
    }
    
    public function maxPassengers()
    {
 	return 650;
	}
	

}

// Instancia de la clase
$obj = new planes() ;
?>
