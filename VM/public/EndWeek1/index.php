<!doctype html>

<html class="no-js" lang="en">
<head>
<style>
.linkButton {
	background: none;
	border: none;
	color: #7a7a7a;
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
		<div class="large-5 large-centered columns">
			<h1>
				<font color="DarkSlateGray"><strong><br>BookStore Catalogue</strong></font>
			</h1>
			<h5>
				<font color="DimGray">Choose a Book in order to view more info <br></font>
			</h5>
		</div>
	</div>

		
<?php
$host = "localhost";
$dbname = "bookstore";
$user = "root";
$pass = "root";

$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
$STH = $DBH->query("SELECT ID, Title FROM Books");
$STH->setFetchMode(PDO::FETCH_ASSOC);


echo "<div class='row'>
		<div class='large-8 large-centered columns'><div class='panel'>";
while ($row = $STH->fetch()) {
    
    $titleLink = $row['Title'];
    echo "<div class='row'>
		<div class='large-6 columns'><form action='bookinfo.php' method='post'>
  			<input type='submit' name='bookname' value= '$titleLink' class='linkButton' /></form></div>
	</div>";
}
echo "</div></div>";

?>	

        <form action="searchRes.php" method="POST">
		<div class="row">
			<div class="large-4 columns">
				<input type="text" name="search" placeholder="Book Title" /> <input
					type="submit" name="submit" value="Search" />
			</div>
		</div>
	</form>

	<script src="js/vendor/jquery.js"></script>
	<script src="js/foundation.min.js"></script>
	<script>
      $(document).foundation();
    </script>

</body>
</html>
