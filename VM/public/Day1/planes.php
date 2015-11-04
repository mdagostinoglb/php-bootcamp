<?php
class planes
{
    public $typeVehicle = 'Planes: ';
    public function displayvehicle()
    {
    echo $this->typevehicle;
    }

    public $value = '900';
    // Declaración de un método
    public function speed()
    {
    echo $this->value;
    }

    public $validation = 'It can fly. ';
    // Declaración de un método
    public function canFly()
    {
    echo $this->validation;
    }

    public $value2 = '650';
    // Declaración de un método
    public function maxPassengers()
    {
    echo $this->value2;
    }

}

// Instancia de la clase
$obj = new planes() ;
echo $obj->typeVehicle . "Speed: " ;
echo $obj->value . " km/H. " ;
echo $obj->validation . "Max passengers: " ;
echo $obj->value2 . " Passengers." ;

?>
