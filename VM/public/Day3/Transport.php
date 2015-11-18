<style>
.info {
    margin= 0;
    padding: 10px;
    background-color: #B2A8F0;
    border: 2px solid #180D5A;
    width: 190px;
    color: #180D5A;
}
</style>
<style>
.wrong {
    margin-top: 5px;
    padding: 10px;
    background-color: #F0C3C3;
    border: 2px solid #FF0000;
    width: 190px;
    color: #E10000;
}
</style>


<?php

include 'Bikes.php';
include 'index.php';
include 'Planes.php';
include 'Cars.php';


abstract class Transport     			//It contains the shared method Calc
{
	public function calc(){
		
		
		
			$time = filter_var($_POST['time'], FILTER_SANITIZE_NUMBER_INT);
		if (filter_var($time, FILTER_VALIDATE_INT)){

		
		echo "<div class=\"info\">Distance: " . $_POST['travelBy']::maxSpeed() * ($time/60) . " Km</div>";
		echo ("<div class=\"info\">Your Selection was:<br/> ". $_POST['travelBy'] . ".<br/>"."Speed: ". $_POST['travelBy']::maxSpeed()."Km/h.<br/>Max Passengers: ". $_POST['travelBy']::maxPass()."<br/>". $_POST['travelBy']::canFly(). "<br/></div>");
		
		}
		
		else
		{
			echo ("<div class=\"wrong\">The value you entered isn't a valid time amount.</div>");
		}
	}
	
}


interface Travel 						//It contains the methods of the vehicles
{
	
	public static function canFly();
	public static function maxSpeed();
	public static function maxPass();	
}



if (empty($_POST['travelBy'])){
	echo ("<div class=\"wrong\">Please enter a valid vehicle.</div>");
}
else {
	$distance = new $_POST['travelBy']();
	$distance -> calc();
	}