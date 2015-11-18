<?php
$host = "localhost";
$dbname = "bookstore";
$user = "root";
$pass = "root";

$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
$STH = $DBH->query("SELECT * FROM Books");
$STH->setFetchMode(PDO::FETCH_ASSOC);