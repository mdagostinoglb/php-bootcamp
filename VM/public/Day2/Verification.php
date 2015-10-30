<style>
.wrong {
    margin-top: 5px;
    padding: 10px;
    background-color: #F0C3C3;
    border: 2px solid #FF0000;
    width: 600px;
    color: #E10000;
}
</style>
<?php
include 'Bikes.php';
include 'index.php';
include 'Planes.php';
include 'Cars.php';


//Validation and sanitization of data
			if (empty($_POST['travelBy'])){	
				echo ("<div class=\"wrong\">Please enter a valid vehicle.</div>");
			}
			else {
				
				$vehicle = $_POST['travelBy'];
		$passengers = filter_var($_POST['passengers'], FILTER_SANITIZE_NUMBER_INT);
			if (filter_var($passengers, FILTER_VALIDATE_INT)){
			
			
				switch ($vehicle){
				case "Bike" :                                  //Actions for the Bike	
					if ($passengers > Bikes::maxPass() or $passengers < 0){
							
						echo   ("<div class=\"wrong\">You can't travel in a bike with ".$passengers ." passengers. The maximum of allowed passengers for the selected transport is ". Bikes::maxPass().". And the minimum is 1 </div>");
					}
					
					else { 
								header('Location: Success.php');    
								exit();
							}
					
				break;
					
				case "Car" : 	                               //Actions for the Car
					if ($passengers > Cars::maxPass() or $passengers < 0){
							
						echo  ("<div class=\"wrong\">You can't travel in a Car with ". $passengers." passengers. The maximum of allowed passengers for the selected transport is ". Cars::maxPass().". And the minimum is 1</div>");
					}
					
					else {
						header('Location: Success.php');
						exit();}
				break;
				
				case "Plane" :                                //Actions for the Plane
					if ($passengers > Planes::maxPass()or $passengers < 0){
							
						echo   ("<div class=\"wrong\">You can't travel in a Plane with ". $passengers." passengers. The maximum of allowed passengers for the selected transport is ". Planes::maxPass().". And the minimum is 1</div>");
					}
					
					else {
						header('Location: Success.php');                 //Redirect to a new page "Success.php"	
						exit();}
				break;
				}
			}
			else { echo ("<div class=\"wrong\">The value you entered isn't a valid passengers amount.</div>");
				}
			}
			