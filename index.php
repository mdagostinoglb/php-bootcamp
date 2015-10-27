<?php

    function __autoload($class_name)
    {
         include $class_name . '.php';
    }

    $obj1  = new cars();
    $obj2 = new planes(); 
    $obj3 = new bikes(); 
?>
