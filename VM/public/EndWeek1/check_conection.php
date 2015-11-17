<?php  
function Conect()  
{  
   try {
      $con = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pass);
      print "Conexión exitosa!";
   }
   catch (PDOException $e) {
      print "¡Error!: " . $e->getMessage();
   die();
   }
   $con= null;
}  
?> 
