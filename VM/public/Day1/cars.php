<?php
class cars
{
    public $typeVehicle = 'Cars: ';
    public function displayvehicle()
    {
    echo $this->typevehicle;
    }

    public $value = '110';
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

    public $value2 = '5';
    // Declaración de un método
    public function maxPassengers()
    {
    echo $this->value2;
    }

}

// Instancia de la clase
$obj = new cars() ;
echo $obj->typeVehicle . "Speed: " ;
echo $obj->value . " km/H. " ;
echo $obj->validation . "Max passengers: " ;
echo $obj->value2 . " Passengers." ;

?>
