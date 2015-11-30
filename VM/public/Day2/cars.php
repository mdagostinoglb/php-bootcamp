<?php
class cars
{
    public $typeVehicle = 'Cars';
    public function displayvehicle()
    {
    echo $this->typevehicle;
    }
    
    public function canFly()
    {
	    return ("It cant fly");
	}
	public function maxPassengers()
	{
		return 5;
	}
	
	public function speed()
	{ 
		return 110;
		
	}
    
}

// Instancia de la clase
$obj2 = new cars() ;
