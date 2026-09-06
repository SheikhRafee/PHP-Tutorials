<?php


    //print returns 1 and echo does not return anything

    print "Hello"; //returns 1 but does not actually print 1 here

    echo "<br>";

    $test = print ("What");

    echo "<br>";

    echo $test; // actually prints 1 because print returns 1

    echo "<br>";

    $fruits = array("Apple", "Banana", "Mango");
    print_r($fruits); // prints the array in a human-readable format


?>