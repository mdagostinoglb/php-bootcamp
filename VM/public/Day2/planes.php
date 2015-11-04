<?php

class planes
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
	public function maxPassengers()
	{
		return 650;
	}
	
	public function speed()
	{ 
		return 900;
		
	}
    
}

// Instancia de la clase
$obj = new planes() ;
?>
