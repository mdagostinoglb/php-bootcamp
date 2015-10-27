<?php
	echo "
	<form action=\"two.php\" method=\"GET\">
		Travel using a:
		<br>
		<input type=\"radio\" name=\"vehicle\" value=\"1\">Plane
		<br>
		<input type=\"radio\" name=\"vehicle\" value=\"2\">Car
		<br>
		<input type=\"radio\" name=\"vehicle\" value=\"3\">Bike
		<br>
		Passengers: 
		<br>
		<input type=\"text\" name=\"passengers\" size=\"10\">
		<br>
		<input type=\"submit\" value=\"Travel!\">

	</form>
	";
	
	if (empty($_GET['vehicle'])) { $vehicle="";} else { $vehicle=$_GET['vehicle'];}
	if (empty($_GET['passengers'])) { $passengers="";} else { $passengers=filter_var($_GET['passengers'], FILTER_SANITIZE_NUMBER_INT);}
	
	
	
	function __autoload($nombre_clase) {
		include $nombre_clase . '.php';
	}
	if ($vehicle == "1"){
		$obj1 = new Planes();
		$maximum=$obj1->maxPassengers();
		if ($passengers > $maximum){
			echo "<script>alert('You can not travel on a Plane whit ".$passengers." passengers. The maximum number of allowed passengers for the selected transport is ".$obj1->maxPassengers().".');</script>"; 
		}
		else{
			echo "<script>alert('Ok! you can now travel. Bye');</script>"; 
		}
	}
	
		if ($vehicle == "2"){
		$obj2 = new Cars();
		$maximum=$obj2->maxPassengers();
		if ($passengers > $maximum){
			echo "<script>alert('You can not travel on a Car whit ".$passengers." passengers. The maximum number of allowed passengers for the selected transport is ".$obj2->maxPassengers().".');</script>"; 
		}
		else{
			echo "<script>alert('Ok! you can now travel. Bye');</script>"; 
		}
	}
	
	if ($vehicle == "3"){
		$obj3 = new Bikes();
		$maximum=$obj3->maxPassengers();
		if ($passengers > $maximum){
			echo "<script>alert('You can not travel on a Bike whit ".$passengers." passengers. The maximum number of allowed passengers for the selected transport is ".$obj3->maxPassengers().".');</script>"; 
		}
		else{
			echo "<script>alert('Ok! you can now travel. Bye');</script>"; 
		}
	}
	
?>
