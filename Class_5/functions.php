<?php

function greet()
{
    echo "Hello, World!";
}
// Call the function
greet();

function see($name)
{
    echo "Hello, $name!" . "<br>";
}

see("Alif");
see("Jam");

function greet2($name = "Guest") //default parameter is used to assign a default value to a function parameter. If the function is called without an argument for that parameter, the default value will be used. In this case, if the greet2() function is called without an argument, the default value of "Guest" will be used for the $name parameter.
{
    echo "Hello, $name!" . "<br>";
}
greet2(); // Call the function without an argument, so the default value "Guest" will be used.
greet2("Nihan");


?>