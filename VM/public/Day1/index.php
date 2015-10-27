<?php

include("planes.php");
include("cars.php");
include("bikes.php");

echo'<font color="red"> Planes <br> </font>';
$Plane_1= new Planes();
echo 'Speed: ';$Plane_1->speed();
echo 'Can fly?: ';$Plane_1->canFly();
echo 'Max. Passengers: '; $Plane_1->maxPassengers();

echo '<font color="red"> Cars<br> </font>';
$Car_1= new Cars();
echo 'Speed: ';$Car_1->speed();
echo 'Can fly?: ';$Car_1->canFly();
echo 'Max. Passengers: ';$Car_1->maxPassengers();

echo '<font color="red"> Bikes <br> </font>';
$Bike_1= new Bikes();
echo 'Speed: ';$Bike_1->speed();
echo 'Can fly?: ';$Bike_1->canFly();
echo 'Max. Passengers: ';$Bike_1->maxPassengers();

?>
