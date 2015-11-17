 	
    <form  name="form1" method="post" enctype="multipart/form-data">
    <p><strong>Travel using a:</strong></p>
    <input type="radio" name="var" value='1'>Plane <br>
	<input type="radio" name="var" value='2'>Car <br>
	<input type="radio" name="var" value='3'>Bike <br> 
	<br>Passengers:<br>
    <input type="text" name="num" value="" size="50"/><br/>
    <input type="submit" name="submit" value="Travel!"/>
</form>
 
<?php
include("planes2.php");
include("cars2.php");
include("bikes2.php");

if (isset($_POST["submit"])){
     $num= $_POST['num'];
     $new_num = filter_var($num, FILTER_SANITIZE_STRING);
	 $var= $_POST['var'];

	 switch ($var) {
    	case 1:
        	$a= new Planes;
        	break;
    	case 2:
        	$a= new Cars;
        	break;
    	case 3:
        	$a= new Bikes;
        	break;
}
		$max=($a->maxPassengers());
     	if ($new_num<=$max){
   			header('Location: okey.php');
    	 }
     	else {
     		$name= ($a->getName());
     		echo "<br><span style='border-image: initial;
     			 border:1px solid #FF0000; 
     			 BACKGROUND-COLOR:#FFDAB9;
     			 margin: 20px;
     			 padding: 10px;'
     			<br><font face= 'Arial' size=2 color=#8B0000>
     			You can't travel on a $name whit $new_num passengers. The maximun number of allowed passengers for the selected transport is $max </font><br></span>";
		
    	 }
    }   
?>