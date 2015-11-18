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
		<div class="large-3 large-centered columns">
			<h1>
				<font color="DarkSlateGray"><strong><br>Edit Book</strong></font>
			</h1>
		</div>
	</div>
<?php
$bookId = $_POST['bookID'];

echo "<form action='success.php' method='POST'>
	  			 <div class='row'>
			<div class='large-6 columns'><input type='hidden' name='Book' value='$bookId'/>
	  			 <br/><dl><font color='DarkSlateGray'><strong><dt>Title:</dt></strong></font> <input type='text' name= 'tinfo'>
			<br/><font color='DarkSlateGray'><strong><dt>Description:</dt></strong></font> <textarea name = 'dinfo' ></textarea>
				 <br/><font color='DarkSlateGray'><strong><dt>Price:</dt></strong></font> <input type='text' name='pinfo'></dl>	
				 <br/><input type='submit' name='submit' value='Done!'>
				 </div>
		</div>
	  			 </form>";

?>


	<script src="js/vendor/jquery.js"></script>
	<script src="js/foundation.min.js"></script>
	<script>
      $(document).foundation();
    </script>

</body>
</html>
