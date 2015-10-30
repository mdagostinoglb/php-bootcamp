<?php

 class Bike extends Transport implements Travel
{
	public static function canFly(){
		
		return ("It can NOT fly.");
	}
	public static function maxPass()
	{
		return 1;
	}
	
	public static function maxSpeed()
	{ 
		return 30;
		
	}

}

