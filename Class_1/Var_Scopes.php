<?php

    $globalVar = "<h2>I am a global variable</h2>";
    
    function test()
    {
        global $globalVar; //global keyword is used to access the global variable inside the function
        echo $globalVar;

        $localVar = "<h2>I am a local variable</h2>"; // local variable is only accessible inside the function
        echo $localVar;
    }

    test(); //calling the function to print the global variable

    var_dump($globalVar);
    
    echo "<br>";

    $checkVar = null;

    var_dump(is_null($checkVar));

?>