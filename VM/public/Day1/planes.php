<?php

class Planes 
{
    // Declaración de propiedades
 	public $name='Plane';
    public $speed_var = '900 Km/h';
    public $canFly_var ='It can fly';
    public $maxPassengers_var ='650';

    // Declaración de métodos

    public function speed() {
        return $this->speed_var;
    }
    public function canFly() {
        return $this->canFly_var;
    }
    public function maxPassengers() {
        return ($this->maxPassengers_var);
    }
    public function getName() {
        return $this->name;
    }


}

?>