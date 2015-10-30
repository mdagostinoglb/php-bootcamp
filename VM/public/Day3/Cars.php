<?php

class Car extends Transport implements Travel
{
	public static function canFly(){
		
		return ("It can NOT fly.");
	}
	public static function maxPass()
	{
		return 5;
	}
	
	public static function maxSpeed()
	{ 
		return 150;
		
	}

}
