 	
    <form  name="form1" method="post" enctype="multipart/form-data">
    <p><strong><H2><font face= 'Arial'>Calculate the distance you have traveled:</H2>Travel using a:</font></strong></p>
    <input type="radio" name="var" value='1'><font face= 'Arial'>Plane <br></font>
	<input type="radio" name="var" value='2'><font face= 'Arial'>Car <br></font>
	<input type="radio" name="var" value='3'><font face= 'Arial'>Bike <br> </font>
	<br><strong><font face= 'Arial'>Enter the minutes of travel:</font></strong><br>
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
	echo "<li><font face= 'Arial' color=#FF0000>$name <br> </font></li>";
	echo "<font face= 'Arial'>Speed:</font>".$trans->speed();echo " km/h<br>";
	$total= round ($trans->calculate($new_min),2,PHP_ROUND_HALF_UP);
	echo "<br><span style='border-image: initial;
     			 border:1px solid #FF0000; 
     			 BACKGROUND-COLOR:#FFDAB9;
     			 margin: 20px;
     			 padding: 10px;'
     			<br><font face= 'Arial' size=2 color=#8B0000>
     			Distance: $total km</font><br></span>";
}
?>