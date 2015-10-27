<?php
class Planes
{
    // Declaración de propiedades
 
    public $speed_var = '900 Km/h';
    public $canFly_var ='It can fly';
    public $maxPassengers_var ='650';

    // Declaración de métodos

    public function speed() {
        echo $this->speed_var;
        echo "<br>";
    }
    public function canFly() {
        echo $this->canFly_var;
        echo "<br>";
    }
    public function maxPassengers() {
        echo $this->maxPassengers_var;
        echo "<br>";
    }

}
?>
