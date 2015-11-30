<?php
class bikes extends vehicle
{
    public $typeVehicle = 'Bikes';
    public function displayvehicle()
    {
    echo $this->typevehicle;
    }
    
    public function canFly()
    {
		return ("It cant fly");
	}
    
    public function speed()
	{ 
    return 25;
    }

	public function maxPassengers()
    {
 	return 2;
	}

}
// Instancia de la clase
$obj3 = new bikes() ;
?>
