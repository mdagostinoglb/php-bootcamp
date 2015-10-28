 	
    <form  name="form1" method="post" enctype="multipart/form-data">
    <p><strong><H2>Calculate the distance you have traveled:</H2>Travel using a:</strong></p>
    <input type="radio" name="var" value='1'>Plane <br>
	<input type="radio" name="var" value='2'>Car <br>
	<input type="radio" name="var" value='3'>Bike <br> 
	<br><strong>Enter the minutes of travel:</strong><br>
    <input type="text" name="min" value="" size="50"/><br/>
    <input type="submit" name="submit" value="Calculate"/>
</form>
 
<?php
include("interface.php");
include("transport.php");
include("planes3.php");
include("cars3.php");
include("bikes3.php");

if (isset($_POST["submit"])){
    $min= $_POST['min'];
    $new_min = filter_var($min, FILTER_SANITIZE_STRING);
	$var= $_POST['var'];

	switch ($var) {
		case '1':
			$trans= new Planes();
			$name=$trans->getName();
			break;
		case '2':
			$trans= new Cars();
			$name=$trans->getName();
			break;
		case '3':
			$trans= new Bikes();
			$name=$trans->getName();
			break;	
	}
	echo "<li><font color=#FF0000>$name <br> </font></li>";
	$total=($trans->calculate($new_min));
	echo "<br><span style='border-image: initial;
     			 border:1px solid #FF0000; 
     			 BACKGROUND-COLOR:#FFDAB9;
     			 margin: 20px;
     			 padding: 10px;'
     			<br><font face= 'Arial' size=2 color=#8B0000>
     			Distance: $total km</font><br></span>";
}
?>