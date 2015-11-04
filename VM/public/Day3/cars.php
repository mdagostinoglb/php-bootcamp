<?php
class cars extends vehicle
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
    
    public function speed()
	{ 
    return 110;
    }

	public function maxPassengers()
    {
 	return 5;
	}

}

// Instancia de la clase
$obj2 = new cars() ;

?>
