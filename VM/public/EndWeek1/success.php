<!doctype html>

<html class="no-js" lang="en">
<head>
<style>
.linkButton {
	background: none;
	border: none;
	color: #2c1b76;
	font-weight: bold;
	text-decoration: underline;
	cursor: pointer;
}
</style>
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
	
<?php
$host = "localhost";
$dbname = "bookstore";
$user = "root";
$pass = "root";
$title = $_POST['tinfo'];
$price = $_POST['pinfo'];
$desc = $_POST['dinfo'];
$idLast = $_POST['Book'];
$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
$STH = $DBH->query("UPDATE Books SET Title = '$title',
		Price = '$price', Description = '$desc' WHERE ID = '$idLast	'");

echo "<div class='row'>
		<div class='large-12 columns'>";

echo "<font color='white'><h1>All changes were done. You may want to go back to the </font><a href='index.php'>Book's Cathalogue</a></h1></div></div>";
?>


	<script src="js/vendor/jquery.js"></script>
	<script src="js/foundation.min.js"></script>
	<script>
      $(document).foundation();
    </script>

</body>
</html>

