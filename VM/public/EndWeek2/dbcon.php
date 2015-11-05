<?php
    $host="localhost"; 
    $dbname="books"; 
    $user="root"; 
    $pass="";
    $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $STH = $DBH->query('SELECT * FROM `books`');
    $STH->setFetchMode(PDO::FETCH_ASSOC);
?>
