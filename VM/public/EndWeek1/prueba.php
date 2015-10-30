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
    $i++;
  }   

//$DBH = null;
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BOOK PAGE</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>

  <body>
    <div class="row">
        <div class="large-6 columns">
          <div class="panel">
            <h1>Books in store<h1>
            <h4>Choose one of the books to know  it description and price.<h4>           
           <a class="button" href="#">
           <?php echo $var['1'];?> </a> 
            <a class="button" href="#">
           <?php echo $var['2']; ?> </a> 
           <a class="button" href="#">
           <?php echo $var['3']?> </a> 
           <a class="button" href="#">
           <?php echo $var['4']; ?> </a> 
           <a class="button" href="#">
           <?php echo $var['5']; ?> </a> 
          </div>
        </div>

        <div class="large-6 columns">
          <img src ="book.png">
        </div>
    </div> 

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>