<?php
	
	class Cars{
		public function name(){
			if (get_class($this) == "Planes"){
				echo "Planes";
			}
			elseif (get_class($this) == "Cars"){
				echo "Cars";
			}
			elseif (get_class($this) == "Bikes"){
				echo "Bikes";
			}
		}
	
		public function speed() {
			if (get_class($this) == "Planes"){
				return 900;
			}
			elseif (get_class($this) == "Cars"){
				return 110;
			}
			elseif (get_class($this) == "Bikes"){
				return 30;
			}
		}
		
		public function canFly(){
			if (get_class($this) == "Planes"){
				echo "It can fly. ";
			}
			elseif (get_class($this) == "Cars"){
				echo "It can not fly. ";
			}
			elseif (get_class($this) == "Bikes"){
				echo "It can not fly. ";
			}
		}
		
		public function maxPassengers(){
			if (get_class($this) == "Planes"){
				return 600;
			}
			elseif (get_class($this) == "Cars"){
				return 6;
			}
			elseif (get_class($this) == "Bikes"){
				return 3;
			}
		}
		
	}
?>
