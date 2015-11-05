<?php
    $host="localhost"; 
    $dbname="books"; 
    $user="root"; 
    $pass="";
    try{
        $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $STH = $DBH->query('SELECT * FROM `books`');
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        echo "<center><table>";
        echo "<th align=center>Titles</th>";
        while($row = $STH->fetch()) {
            echo "<tr><td align=center>";
            echo "<a href=\"index.php/libro/".$row['id']."\">".$row['title']."</a>";
            echo "</td></tr>";
        }
        echo "</table></center>";
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
?>
