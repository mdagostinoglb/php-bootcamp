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

	<div class="row">
		<div class="large-3 large-centered columns">
			<h1>
				<font color="DarkSlateGray"><strong><br>Book Info</strong></font>
			</h1>
		</div>
	</div>

<?php
$host = "localhost";
$dbname = "bookstore";
$user = "root";
$pass = "root";
$titleselec = $_POST['bookname'];

$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
$STH = $DBH->query("SELECT * FROM Books WHERE Title = '$titleselec'");
$STH->setFetchMode(PDO::FETCH_ASSOC);

echo "<div class='row'>
		<div class='large-8 large-centered columns'><div class='panel'>";

while ($row = $STH->fetch()) {
    
    echo "<dl>";
    echo "<dt>Book Title: </dt>" . $row['Title'] . "<br/>" . "<dt>Book Description: </dt>" . $row['Description'] . "<br/>" . "<dt>Price: </dt>" . "$" . $row['Price'] . "<br/>";
    echo "</dl>";
    $id = $row['ID'];
}

echo "</div></div>";


echo "<div class='row'>
		<div class='large-6 columns'> <form action='editBook.php' method='post'>
	  			<input type='hidden' name='bookID' value= '$id'/>
	  			<input type='submit' name='bookedit' value= 'Edit the book' class='linkButton' />
	  			</form></div></div>";

?>


	<script src="js/vendor/jquery.js"></script>
	<script src="js/foundation.min.js"></script>
	<script>
      $(document).foundation();
    </script>

</body>
</html>

