<?php	
	class Bikes extends Transport implements theFunctions{
		public function distance(){
			if(empty($_GET['hours'])) { $hours="";} else { $hours=filter_var($_GET['hours'], FILTER_VALIDATE_FLOAT);}
			return $hours;
		}
		
		public function name(){
			echo $name="Bikes";
		}
	
		public function speed() {
			return $speed=30;
		}
		
		public function canFly(){
			echo $canfly="It can not fly";
		}
		
		public function maxPassengers(){
			return $maxpassengers=3;
		}
		
	}
?>
