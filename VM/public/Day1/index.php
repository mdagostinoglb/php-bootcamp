<?php
include("planes.php");
include("cars.php");
include("bikes.php");
	
	for($i='1';$i<'4';$i++){
		switch ($i) {
    		case '1':
	        	$a= new Planes;
	        	break;
    		case '2':
	        	$a= new Cars;
	        	break;
    		case '3':
	        	$a= new Bikes;
	        	break;
        }
        $name= ($a->getName());

		echo "<li><font color=#FF0000>$name </font><br></li>";
		echo 'Speed: '.$a->speed();echo '<br>';
		echo 'Can fly?: '.$a->canFly();echo '<br>';
		echo 'Max. Passengers: '.$a->maxPassengers();echo '<br>';

    }
?>
