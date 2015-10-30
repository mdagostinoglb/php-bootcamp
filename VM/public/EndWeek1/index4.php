
<?php 
//include ("check_conection.php");

//Datos de conexión a la base de datos
$host = '127.0.0.1';
$db = 'bookstore';
$user = 'root';
$pass = 'root';
$DBH = new PDO("mysql:host=$host;dbname=$db", $user, $pass); 
$STH = $DBH->query('SELECT title, price from books');
$STH->setFetchMode(PDO::FETCH_ASSOC); 
$i='1';
while($row = $STH->fetch()) {
  $var[$i]= $row['title'];
  echo $var[$i].'<br>';
    $i++;
  }   

$DBH = null;
?>
