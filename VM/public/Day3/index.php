<?php
	abstract class Transport{
		abstract protected function distance();
		abstract protected function name();
		abstract protected function speed();
		abstract protected function canFly();
		abstract protected function maxPassengers();	
	}
	
	class Planes extends Transport{
		public function distance(){
			if (empty($_GET['hours'])) { $hours="";} else { $hours=filter_var($_GET['hours'], FILTER_VALIDATE_FLOAT);}
			return $hours;
		}
		
		public function name(){
			echo "Planes";
		}
	
		public function speed() {
			return 900;
		}
		
		public function canFly(){
			echo "It can fly";
		}
		
		public function maxPassengers(){
			return 600;
		}
	}
	
	class Cars extends Transport{
		public function distance(){
			if (empty($_GET['hours'])) { $hours="";} else { $hours=filter_var($_GET['hours'], FILTER_VALIDATE_FLOAT);}
			return $hours;
		}
		
		public function name(){
			echo "Cars";
			}
		
	
		public function speed(){
			return 110;
		}
		
		public function canFly(){
			echo "It can not fly";
		}
		
		public function maxPassengers(){
			return 6;
		}
		
	}
	
	class Bikes extends Transport{
		public function distance(){
			if (empty($_GET['hours'])) { $hours="";} else { $hours=filter_var($_GET['hours'], FILTER_VALIDATE_FLOAT);}
			return $hours;
		}
		
		public function name(){
			echo "Bikes";
		}
	
		public function speed() {
			return 30;
		}
		
		public function canFly(){
			echo "It can not fly";
		}
		
		public function maxPassengers(){
			return 3;
		}
		
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
		echo ". Max Passengers: ";
		echo $obj1->maxPassengers();
		echo ".";
		echo "<br>";
		$i=$i+1;
	}
	
	echo "<br><br><br>";
	
	echo "
	<form action=\"index.php\" method=\"GET\">
		Choose a vehicle:
		<br>
		<input type=\"radio\" name=\"vehicle\" value=\"1\" checked>Plane
		<br>
		<input type=\"radio\" name=\"vehicle\" value=\"2\">Car
		<br>
		<input type=\"radio\" name=\"vehicle\" value=\"3\">Bike
		<br>
		Choose minutes: 
		<br>
		<input type=\"text\" name=\"hours\" size=\"15\" value=\"1\">
		<br>
		<input type=\"submit\" value=\"Calculate Distance\">

	</form>
	";
	if (empty($_GET['vehicle'])) { $vehicle="";} else { $vehicle=$_GET['vehicle'];}
	
	if ($vehicle == "1"){
		$nobj1= new Planes();
		$maxspeed=$nobj1->speed();
		$resultado=$maxspeed*$nobj1->distance()/60;
		echo "<div style=\"color:#FF0404; background-color:#EEBE3D; width:250px; border: solid; padding:4px;    \" class=\"alert alert-danger\">
			You can travel ".$resultado."Km. in ".$nobj1->distance()." minutes if you choose a Plane.
			</div>";
		//echo $resultado;
	}
	
	if ($vehicle == "2"){
		$nobj1= new Cars();
		$maxspeed=$nobj1->speed();
		$resultado=$maxspeed*$nobj1->distance()/60;
		echo "<div style=\"color:#FF0404; background-color:#EEBE3D; width:250px; border: solid; padding:4px;    \" class=\"alert alert-danger\">
			You can travel ".$resultado."Km. in ".$nobj1->distance()." minutes if you choose a Car.
			</div>";
		//echo $resultado;
	}
	
	if ($vehicle == "3"){
		$nobj1= new Bikes();
		$maxspeed=$nobj1->speed();
		$resultado=$maxspeed*$nobj1->distance()/60;
		echo "<div style=\"color:#FF0404; background-color:#EEBE3D; width:250px; border: solid; padding:4px;    \" class=\"alert alert-danger\">
			You can travel ".$resultado."Km. in ".$nobj1->distance()." minutes if you choose a Bike.
			</div>";
		//echo $resultado;
	}
?>
