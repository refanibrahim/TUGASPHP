<?php
    $a = 5;
    $b = 5;

    var_dump($a == $b);
    echo "<hr/>";

    var_dump($a === $b);
    echo "<hr/>";
    
    $b++;
    var_dump($a != $b);
    echo "<hr/>";

    $b--;
    var_dump($a !== $b);
    echo "<hr/>";

    $a +=5;
    var_dump($a > $b);
    echo "<hr/>";
    
    $a -= 7;
    var_dump($a < $b);
    echo "<hr/>";
    
    $a += 2;
    var_dump($a >= $b);
    echo "<hr/>";

    $a -= 1;
    var_dump($a <= $b);
    echo "<hr/>";
    
?>