<?php
	abstract class Transport implements theFunctions{
		public function distance(){
			if (empty($_GET['hours'])){ $hours="";} else { $hours=filter_var($_GET['hours'], FILTER_VALIDATE_FLOAT);}
			return $hours;
		}
		public function name(){
			echo $this->$name;
		}
		public function speed(){
			return $this->$speed;
		}
		public function canFly(){
			return $this->$canfly;
		}
		public function maxPassengers(){
			return $this->$maxpassengers;
		}
	}
?>
