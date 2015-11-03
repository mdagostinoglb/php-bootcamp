<?php 
//include ("check_conection.php");

include ('data.php');
include('books.php');

$DBH = new PDO("mysql:host=$host;dbname=$db", $user, $pass); 
$STH = $DBH->query('SELECT title,id, price, description from books');
$STH->setFetchMode(PDO::FETCH_ASSOC); 

?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BOOKS PAGE</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>

  <body>
    <div class="row">
        <div class="large-6 columns">
          <div class="panel">
            <h1>Books in store</h1>
            <h4>Choose one of the books to know it description and price: <br></h4>           
            <div class="callout panel">
            <form  name="form1" method="post" enctype="multipart/form-data">
 
            <?php 
            while($row = $STH->fetch()) 
            {
              $tit= $row['title'];
              $id= $row['id'];
              echo "<input type='radio' name='var' value='$id'>$tit <br>";        
            }
            echo '<input type="submit" name="submit" value="More information" class="small round button"></form>';
            
          ?> 
          </form>
          <?php
          if (isset($_POST["submit"]))
          {
            $var= $_POST['var'];
            $DBH = new PDO("mysql:host=$host;dbname=$db", $user, $pass); 
            $STH = $DBH->query('SELECT title,id, price, description from books');
            $STH->setFetchMode(PDO::FETCH_ASSOC);
             while($row = $STH->fetch()) 
            {
              $tit= $row['title'];
              $i= $row['id'];
              $price= $row['price'];
              $descrip= $row['description'];
              if ($i==$var)
              {
                echo "<br><font face= 'Arial' size=2 >
                Title: $tit <br>Price: $price<br>Description: $descrip </font><br></span>";
    
              }        
            }
          }
          ?>

          </div>
          </a> 
          </div>
        </div>

        <div class="large-6 columns">
        <img src ="book.png">
        <div class="callout panel">
        <form  name="form1" method="post" enctype="multipart/form-data">
        <H3>Edit a product item: <br></H3>
        <input type="submit" name="new" value="New book" class="small round button"></form>        

        
        </form>
        <?php
        if (isset($_POST["new"]))
        {
          echo "<form  name='form2' method='post' enctype='multipart/form-data'>
                <label>Title: </label>
                <input type='text' name='tit'>";
          echo "<label>Price: </label>
                <input type='text' name='pri'> "; 
          echo "<label>Description: </label>
                <input type='text' name='des' >";
          echo '<input type="submit" name="ok" value="Ok" class="small round button"></form>';           
        }
        ?>
        </form>
        <?php
        if (isset($_POST["ok"]))
        {
          $new_id= ($id++);
          $ti= $_POST['tit'];
          $new_ti = filter_var($ti, FILTER_SANITIZE_STRING);
          $pr= $_POST['pri'];
          $new_pri = filter_var($pr, FILTER_SANITIZE_STRING);
          $de= $_POST['des'];
          $new_de = filter_var($de, FILTER_SANITIZE_STRING);
          $data = array($new_id,$new_ti,$new_pri,$new_de);
          $STH = $DBH->prepare("INSERT INTO folks (id, title, price,description ) values ($new_id,$new_ti,$new_pri,$new_de)");
          $STH->execute();
        }
        ?>

        </div>
    </div> 

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>

<?php 

$DBH = null;

?>