<?php

class Plane extends Transport implements Travel
{
	public static function canFly(){
		
		return ("It can fly.");
	}
	public static function maxPass()
	{
		return 300;
	}
	
	public static function maxSpeed()
	{ 
		return 850;
		
	}

}