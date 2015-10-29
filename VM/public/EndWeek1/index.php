<!DOCTYPE HTML>

<html>
	<head>
		<title>Bookstore</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
			<section id="header">
				<header>
					<span class="image avatar"><img src="http://oi66.tinypic.com/x4hh06.jpg" alt="" /></span>
					<h1 id="logo"><a href="#">Bookstore</a></h1>
					<p>All the books<br />
					you want</p>
				</header>
				<nav id="nav">
					<ul>
						<li><a href="#one" class="active">Books</a></li>
						<li><a href="#two">Books you must read</a></li>
						
						<li><a href="#four">Contact</a></li>
					</ul>
				</nav>
				<footer>
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
					</ul>
				</footer>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one">
								<div class="container">
									<header class="major">
										<h2>Books</h2>
									</header>
									<?php
										class Books{
											public function server(){
												$link = mysql_connect('localhost', 'root', '') or die('No se pudo conectar al servidor: ' . mysql_error());
												mysql_select_db('books') or die('No se pudo seleccionar la base de datos');
												mysql_query("SET NAMES 'utf8'");
										
												$query="SELECT `id`,`title` FROM `books`";
												$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
												echo "<center>";
												echo "<table>\n";
												echo "<tr> <td><center>ID</center></td><td><center>Title</center></td></td>";
												while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
													echo "\t<tr>\n";
													foreach ($line as $col) {
														$req="SELECT `title`,`price`,`description` FROM `books` where `id` =" . $line['id'];
														$result1 = mysql_query($req) or die('Consulta fallida: ' . mysql_error());
														$line1 = mysql_fetch_array($result1, MYSQL_ASSOC);
														
														$file="";
														$file = fopen("archivo".$line['id'].".html", "w+");
														fwrite($file, $line1['title'] . "<br><br> Price: " . $line1['price'] . "<br><br> Description: " . $line1['description'] .
														"<br><br>
														<form action=\"change.php\" method=\"GET\">
														<h3 style=\"color:red\">Edit:</h3>
														<input style=\"width:200px\" type=\"hidden\" name=\"sid\" value=\"".$line['id']."\"><br>
														Title:<br><input style=\"width:200px\" type=\"text\" name=\"stitle\" value=\"".$line1['title']."\"><br>
														Price:<br><input style=\"width:200px\" type=\"text\" name=\"sprice\" value=\"".$line1['price']."\"><br>
														Description:<br><input style=\"width:200px\" type=\"text\" name=\"sdesc\" value=\"".$line1['description']."\"><br>
														<input type=\"submit\" value=\"Ready!\">
														</form><br>
														<form action=\"delete.php\" method=\"GET\">
															<input style=\"width:200px\" type=\"hidden\" name=\"tid\" value=\"".$line['id']."\"><br>
															<input type=\"submit\" value=\"Delete!\">
														</form>
														" 
														. PHP_EOL);
														fclose($file);
														echo "\t\t<td><center><a href=\"archivo".$line['id'].".html\">$col</td>\n </a></center>";
														//echo $line['id'];
														
													}
													echo "\t</tr>\n";
												}
												echo "</table>\n";
												echo "</center>";
												mysql_free_result($result);
												mysql_close($link);
											}
										}
										$obj1=new Books();
										$obj1->server();
									?>	
									<form action="correct.php">
										<h2>Add new book.</h2>
										Title: <input type="text" name="ntitle"><br>
										Price: <input type="text" name="nprice"><br>
										Description: <input type="text" name="ndesc"><br>
										<input type="submit" value="Ready!">
									</form>
								</div>
							</section>

						<!-- Two -->
							<section id="two">
								<div class="container">
									<h3>Books you must read</h3>
									<ul class="feature-icons">
										<li class="fa-code">Harry Potter</li>
										<li class="fa-cubes">Game of Thrones</li>
										<li class="fa-book">Percy Jackson</li>
										<li class="fa-coffee">Hunger Games</li>
										<li class="fa-bolt">Narnia</li>
										<li class="fa-users">Not Twilight</li>
									</ul>
								</div>
							</section>

						<!-- Four -->
							<section id="four">
								<div class="container">
									<h3>Contact Me</h3>
									<form method="post" action="#">
										<div class="row uniform">
											<div class="6u 12u(xsmall)"><input type="text" name="name" id="name" placeholder="Name" /></div>
											<div class="6u 12u(xsmall)"><input type="email" name="email" id="email" placeholder="Email" /></div>
										</div>
										<div class="row uniform">
											<div class="12u"><input type="text" name="subject" id="subject" placeholder="Subject" /></div>
										</div>
										<div class="row uniform">
											<div class="12u"><textarea name="message" id="message" placeholder="Message" rows="6"></textarea></div>
										</div>
										<div class="row uniform">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" class="special" value="Send Message" /></li>
													<li><input type="reset" value="Reset Form" /></li>
												</ul>
											</div>
										</div>
									</form>
								</div>
							</section>

					</div>

				<!-- Footer -->
					<section id="footer">
						<div class="container">
							<ul class="copyright">
								<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
