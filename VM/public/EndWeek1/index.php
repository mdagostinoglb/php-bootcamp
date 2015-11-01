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
                    <li><a href="#two">Add New Book</a></li>
                    <li><a href="#three">Books you must read</a></li>						
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
        <div id="wrapper">
            <div id="main">
                <section id="one">
                    <div class="container">
                        <header class="major">
                            <h2>Books</h2>
                        </header>
                            <?php
                                $host="localhost";
                                $dbname="books";
                                $user="root";
                                $pass="";

                                try {
                                    $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
                                    $STH = $DBH->query('SELECT * FROM `books`');
                                    $STH->setFetchMode(PDO::FETCH_ASSOC);
                                    echo "<center>";
                                    echo "<table>";
                                    while($row = $STH->fetch()) {
                                        $file="";
                                        $file = fopen("archivo".$row['id'].".html", "w+");
                                        fwrite($file, $row['title'] . "<br><br> Price: " . $row['price'] . "<br><br> Description: " . $row['description'] .
                                        "<br>
                                        <form action=\"change.php\" method=\"GET\">
                                            <h3 style=\"color:red\">Edit:</h3>
                                            <input style=\"width:200px\" type=\"hidden\" name=\"sid\" value=\"".$row['id']."\"><br>
                                            Title:<br><input style=\"width:200px\" type=\"text\" name=\"stitle\" value=\"".$row['title']."\"><br>
                                            Price:<br><input style=\"width:200px\" type=\"text\" name=\"sprice\" value=\"".$row['price']."\"><br>
                                            Description:<br><input style=\"width:200px\" type=\"text\" name=\"sdesc\" value=\"".$row['description']."\"><br>
                                            <input type=\"submit\" value=\"Ready!\">
                                        </form><br>
                                        <form action=\"delete.php\" method=\"GET\">
                                            <input style=\"width:200px\" type=\"hidden\" name=\"tid\" value=\"".$row['id']."\"><br>
                                            <input type=\"submit\" value=\"Delete!\">
                                        </form>". PHP_EOL);
                                        fclose($file);
                                        echo "<tr><td>";
                                        echo "<a href=\"archivo".$row['id'].".html\">".$row['title'] . "</a>";
                                        echo "</td></tr>";
                                    }
                                    echo "</table>";
                                    echo "</center>";
                                }
                                catch(PDOException $e) {
                                    echo $e->getMessage();
                                }
                            ?>	
                        </div>
                    </section>
                    <section id="two">
                        <div class="container">
                            <form action="correct.php">
                                <h2>Add new book.</h2>
                                Title: <input type="text" name="ntitle"><br>
                                Price: <input type="text" name="nprice"><br>
                                Description: <input type="text" name="ndesc"><br>
                                <input type="submit" value="Ready!">
                            </form>
                        </div>
                    </section>
                    <section id="three">
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
                <section id="footer">
                    <div class="container">
                        <ul class="copyright">
                            <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                        </ul>
                    </div>
                </section>
            </div>
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrollzer.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>
    </body>
</html>
