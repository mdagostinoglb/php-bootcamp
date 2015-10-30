<?php
include 'Bikes.php';
include 'Cars.php';
include 'Planes.php';



echo ("Bike: " . "Speed: ". Bikes::maxSpeed()."Km/h.<br/> ");
echo (Bikes::canFly()." <br/>");
echo (" Max Passengers: ". Bikes::maxPass().".<br/><br/>");

echo ("Car: " . "Speed: ". Cars::maxSpeed()."Km/h.<br/> ");
echo (Cars::canFly()." <br/>");
echo (" Max Passengers: ". Cars::maxPass().".<br/><br/>");

echo ("Plane: " . "Speed: ". Planes::maxSpeed()."Km/h.<br/> ");
echo (Planes::canFly()." <br/>");
echo (" Max Passengers: ". Planes::maxPass().".<br/><br/>");



?>
	