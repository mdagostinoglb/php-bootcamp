<?php
	function __autoload($nombre_clase) {
		include $nombre_clase . '.php';
	}
	
	$one=array(new Planes,new Cars(),new Bikes());
	
	$i=0;
	while ($i<3){
		$obj1 = $one[$i];
		$obj1->name();
		echo ": Speed: ";
		echo $obj1->speed();
		echo ". ";
		$obj1->canFly();
		echo " Max Passengers: ";
		echo $obj1->maxPassengers();
		echo ".";
		echo "<br>";
		$i=$i+1;
	}
?>
