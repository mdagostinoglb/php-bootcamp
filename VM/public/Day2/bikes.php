<?php
class bikes
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
	public function maxPassengers()
	{
		return 2;
	}
	
	public function speed()
	{ 
		return 25;
		
	}
}
// Instancia de la clase
$obj3 = new bikes() ;
?>
