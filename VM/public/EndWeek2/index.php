<!doctype html>

<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>BookStore</title>
<link rel="stylesheet" href="css/foundation.css" />
<link rel="stylesheet" href="css/normalize.css">
<script src="js/vendor/modernizr.js"></script>
</head>
<body>

	<div id="bg">
		<img src="img/book-back.jpg" alt="">
	</div>

	<div class="row">
		<div class="large-5 large-centered columns">
			<h1>
				<font color="DarkSlateGray"><strong><br>BookStore Catalogue</strong></font>
			</h1>
		</div>
	</div>

		
<?php
require_once __DIR__ . '/vendor/autoload.php';
use Silex\Provider\FormServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;

$app = new Silex\Application();
$app->register(new FormServiceProvider());
$app->register(new Silex\Provider\ValidatorServiceProvider());
$app->register(new Silex\Provider\TranslationServiceProvider(), array(
    'translator.domains' => array()
));
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/templatefolder',
    'twig.class_path' => __DIR__ . '/../vendor/twig/twig/lib'
));


$app['debug'] = true;
$app->get('/', function () {

    $host = "localhost";
    $dbname = "bookstore";
    $user = "root";
    $pass = "root";
    
    $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $STH = $DBH->query("SELECT ID, Title FROM Books");
    $STH->setFetchMode(PDO::FETCH_ASSOC);
    
    echo "<div class='row'>
		<div class='large-8 large-centered columns'><div class='panel'>
		    <h5>
				<font color='DimGray'>Choose a Book in order to view more info <br></font>
			</h5>";
    
    while ($row = $STH->fetch()) {
        
        echo "<ul><li><a href=\"index.php/bookInfo/" . $row['ID'] . "\">" . $row['Title'] . "</a></ul></li>";
    }
    echo "</div></div>
          <form action='searchRes.php' method='POST'>
		<div class='row'>
			<div class='large-4 columns'>
				<input type='text' name='search' placeholder='Book Title' /> <input
					type='submit' name='submit' value='Search' />
			</div>
		</div>
	</form>";
    return "";
});

$app->get('/bookInfo/{bookid}/', function ($bookid) {
    include 'allData.php';
    while ($row = $STH->fetch()) {
        if ($row['ID'] == $bookid) {
            echo "<div class='row'>
		<div class='large-8 large-centered columns'><div class='panel'>
		    <h5>
				<font color='DimGray'>Book Info <br></font>
			</h5>";
            echo "<ul><li>Title: " . $row['Title'] . "</li>";
            echo "<li>Price: " . $row['Price'] . "</li>";
            echo "<li>Description: " . $row['Description'] . "</li>";
            echo "</ul>";
            echo "<br><a href=\"editBook/\">Edit Book Info</a></div></div></div>";
        }
    }
    return "";
});

$app->match('/bookInfo/{bookid}/editBook/', function (Request $request,$bookid) use($app) {
    $data = array(
        'ID' => '',
        'Title' => '',
        'Description' => '',
        'Price' => ''
    );
    
    $form = $app['form.factory']->createBuilder('form', $data)
        ->add('Title')
        ->add('Description')
        ->add('Price')
        ->getForm();
    $form->handleRequest($request);
    
    if ($form->isValid()) {
        $data = $form->getData();
        $title = $data['Title'];
        $price = $data['Price'];
        $desc = $data['Description'];
        $host = "localhost";
        $dbname = "bookstore";
        $user = "root";
        $pass = "root";
        $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $STH = $DBH->query("UPDATE Books SET Title = '$title',
		Price = '$price', Description = '$desc' WHERE ID = '$bookid'");
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        echo ("All changes were done.");    
        
    }
    
    // display the form
    return $app['twig']->render('template.twig', array(
        'form' => $form->createView()
    ));
});

$app->run();
?>
	<script src="js/vendor/jquery.js"></script>
	<script src="js/foundation.min.js"></script>
	<script>
      $(document).foundation();
    </script>

</body>
</html>
