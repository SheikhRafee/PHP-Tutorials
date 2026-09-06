<?php

    // $name = "John";
    // $name = "Doe";

    // echo $name;

    //defining constants
    define("FNAME", "John");

    define("AMOUNT",20);

    echo FNAME;
    echo "<br>";
    echo AMOUNT;

    echo "<br>";

    echo 'Hello '.FNAME. '. Your Balance is: '.AMOUNT.'<br>';

    echo constant("FNAME")."<br>";

    echo "<br>";

    $text = "constant";

    echo "Your Name is ". $text("FNAME");  

?>