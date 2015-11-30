<?php
class bikes
{
    public $typeVehicle = 'Bikes: ';
    public function displayvehicle()
    {
    echo $this->typevehicle;
    }

    public $value = '25';
    // Declaración de un método
    public function speed()
    {
    echo $this->value;
    }

    public $validation = 'It cant fly. ';
    // Declaración de un método
    public function canFly()
    {
    echo $this->validation;
    }

    public $value2 = '2';
    // Declaración de un método
    public function maxPassengers()
    {
    echo $this->value2;
    }

}

// Instancia de la clase
$obj = new bikes() ;
echo $obj->typeVehicle . "Speed: " ;
echo $obj->value . " km/H. " ;
echo $obj->validation . "Max passengers: " ;
echo $obj->value2 . " Passengers." ;

?>
