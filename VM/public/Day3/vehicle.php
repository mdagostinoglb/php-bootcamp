<?php

function __autoload($nombre_clase)
    {
       include $nombre_clase . '.php';
       include 'index.php';
 	}

abstract class vehicle   	
{ 
        
   public function calculo()
       {
       $tiempo = filter_var($_POST['tiempo'], FILTER_SANITIZE_NUMBER_INT);
       if (filter_var($tiempo, FILTER_VALIDATE_INT))
       {
            echo "Distancia: " . $_POST['enviar']::speed() * ($tiempo * (1/60)) . " Km";
       }
       else
       {
			echo ('El valor ingresado no es válido'); 
       }
	   }
	
}

if (empty($_POST['enviar']))
{
	echo ('Por favor, seleccione un vehiculo'); 
}
else
    {
	$distancia = new $_POST['enviar']();
	$distancia -> calculo();
	}
?>
