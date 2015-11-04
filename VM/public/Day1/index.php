<?php

function __autoload($class_name)
{
    include $class_name . '.php';
}


$obj1  = new cars() ;
echo "<br>";
$obj2 = new planes() ;
echo "<br>";
$obj3 = new bikes();


?>
