<?php
    abstract class Transport implements theFunctions
    {
        public function distance()
        {
            return $this->$hours;
        }
        
		public function name()
        {
            echo $this->$name;
        }
        
        public function speed()
        {
            return $this->$speed;
        }
		
        public function canFly()
        {
            return $this->$canfly;
        }
		
        public function maxPassengers()
        {
            return $this->$maxpassengers;
        }
    }
?>
