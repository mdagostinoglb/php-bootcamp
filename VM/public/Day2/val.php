<?php

include 'index.php';
include 'planes.php';
include 'cars.php';
include 'bikes.php';

if (isset($_POST['submit'])) {
			if (empty($_POST['passengers'])) {
            {	
				echo ("Please enter a valid vehicle.");
			}}
			else 
            {
                $enviar = $_POST['enviar'];
		        $cant = filter_var($_POST['passengers'], FILTER_SANITIZE_NUMBER_INT);
            }
            }
           
if (empty($_GET['passengers'])) 
{ 
    $cant="";
} 
             else 
             { 
             $cant=filter_var($_GET['passengers'], FILTER_SANITIZE_NUMBER_INT);
             }

if(isset($_POST['enviar']) && isset($_POST['passengers'])) 
              {
              $enviar = $_POST["enviar"];
              $cant = $_POST["passengers"];
                
        if($enviar == 'Plane')              
        $obj = new planes();
        $maxPass=$obj->maxPassengers();
        if ($cant > $maxPass)
        {
			echo ("You cant travel on a Plane whit ".$cant." passengers. The maximum number of allowed passengers for the selected transport is  ".$obj->maxPassengers()."."); 
        }
		else
        {
			echo ('Ok! you can now travel. Bye'); 
		} 
        
        {
        if ($enviar == 'Car') 
		$obj2 = new cars();
		$maxPass=$obj2->maxPassengers();
		if ($cant > $maxPass)
        {
			echo ("You cant travel on a Car whit ".$cant." passengers. The maximum number of allowed passengers for the selected transport is   ".$obj->maxPassengers()."."); 
        }
		else
        {
			echo ('Ok! you can now travel. Bye'); 
		} 
        }
        {
        if($enviar == 'Bike') 
		$obj3 = new bikes();
		$maxPass=$obj3->maxPassengers();
		if ($cant > $maxPass)
        {
			echo ("You cant travel on a Bike whit ".$cant." passengers. The maximum number of allowed passengers for the selected transport is   ".$obj->maxPassengers()."."); 
        }
		else
        {
			echo ('Ok! you can now travel. Bye'); 
		} 
        }
    
}
?> 


