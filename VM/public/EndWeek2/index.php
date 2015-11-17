<?php
require_once __DIR__.'/vendor/autoload.php'; 
    use Silex\Provider\FormServiceProvider;
    use Silex\Provider\TwigServiceProvider;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\HttpFoundation\RedirectResponse;

$app = new Silex\Application();
$app->register(new Silex\Provider\FormServiceProvider());

$app->get('/', function () 
{
  echo '<html class="no-js" lang="en">
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
            <h1>Books page</h1>
            <h4>Choose one of the options: <br></h4>           
            <div class="callout panel">
            <form  name="form1" method="post" enctype="multipart/form-data">
            <h2><a href=\EndWeek2/books\ class="small round button">Books in store</a><br>
            <a href="\EndWeek2/new_book/\" class="small round button">New book</a></h2></center></form>';
  return "";

            
});

$app->get('/books/', function () {
      include ('data.php');
      $DBH = new PDO("mysql:host=$host;dbname=$db", $user, $pass); 
      $STH = $DBH->query('SELECT title,id, price, description from books');
      $STH->setFetchMode(PDO::FETCH_ASSOC);
      echo '<html class="no-js" lang="en">
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
                      <h1>Books in store</h1>';
      while($row = $STH->fetch()) 
            { 
              echo '<a type="submit" name="submit" value="$id" class="small round button" 
                      href=\EndWeek2/books/'.$row["id"].'\>'.$row["title"].'</a><br></form>';
                      }  
      return '';                      
     } );

//mostrar datos libro
$app->get('/books/{id}/', function (Silex\Application $app, $id) {
    include ('data.php');
      $DBH = new PDO("mysql:host=$host;dbname=$db", $user, $pass); 
      $STH = $DBH->query('SELECT title,id, price, description from books');
      $STH->setFetchMode(PDO::FETCH_ASSOC);
      while($row = $STH->fetch()){
          if ($row['id']==$id){
            $post = $row;
          }}
       
    return  "<h3>Title: {$post['title']}</h3>".
            "<p>Price: {$post['price']}</p>".
            "<p>Description: {$post['description']}</p>";
});
/*nuevo libro
$app->post('/feedback', function (Request $request) {
    $message = $request->get('message');
    mail('feedback@yoursite.com', '[YourSite] Comentarios', $message);
 
    return new Response('Gracias por tus comentarios', 201);
});
*/ 
$app->run();
?>