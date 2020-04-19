<?php

    ini_set("xdebug.overload_var_dump", 1);
    /*
    Proměnné
    */
    $string = "Hello world!";
    $integer = 5;
    $float = 10.5;
    $boolean = TRUE;

    echo $string;
    echo "<br>";
    echo $integer;
    echo "<br>";
    print $float;
    print "<br>";
    print $boolean;
    print "<br>";
    /*
    spojování řetězců
    */
    $string1 = "Dobrý";
    $string2 = "den.";

    echo $string1. " ". $string2;
    echo "<br>";
    /*
    Použití html elementu <img> v php
    */
    echo "<img width=\"300px\" src='https://images.unsplash.com/photo-1585559605151-d4da31836a99?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80'>";
    echo "<br>";
    /*
    Zpětné lomítko
    */
    echo "\\";
    /*
    Operátory vypsané pomocí var_dump
    */
    $a = 5;
    $b = 10;
    var_dump($a + $b);
    var_dump($a - $b);
    var_dump($a / $b);
    var_dump($a * $b);
    echo "<br>";
    var_dump($a++);
    var_dump($a--);
    var_dump($a += $b);
    var_dump($a -= $b);
    var_dump($a /= $b);
    echo "<br>";
    var_dump($a == $b);
    var_dump($a != $b);
    var_dump($a > $b);
    var_dump($a < $b);
    echo "<br>";
    var_dump($a || $b);
    var_dump($a && $b);
    var_dump(!$b);
    echo "<br>";
?>