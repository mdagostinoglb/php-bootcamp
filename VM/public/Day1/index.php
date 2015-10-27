<?php
//PLANE
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

echo'<font color="red"> Planes <br> </font>';
$Plane_1= new Planes();
echo 'Speed: ';$Plane_1->speed();
echo 'Can fly?: ';$Plane_1->canFly();
echo 'Max. Passengers: '; $Plane_1->maxPassengers();

//CARS
class Cars
{
 
    public $speed_var = '200 Km/h';
    public $canFly_var ="It can't fly";
    public $maxPassengers_var ='5';


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

echo '<font color="red"> Cars<br> </font>';
$Car_1= new Cars();
echo 'Speed: ';$Car_1->speed();
echo 'Can fly?: ';$Car_1->canFly();
echo 'Max. Passengers: ';$Car_1->maxPassengers();

//BIKES
class Bikes
{
 
    public $speed_var = '80 Km/h';
    public $canFly_var ="It can't fly";
    public $maxPassengers_var ='2';


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

echo '<font color="red"> Bikes <br> </font>';
$Bike_1= new Cars();
echo 'Speed: ';$Bike_1->speed();
echo 'Can fly?: ';$Bike_1->canFly();
echo 'Max. Passengers: ';$Bike_1->maxPassengers();
?>
