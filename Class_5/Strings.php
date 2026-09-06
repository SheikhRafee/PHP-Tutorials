<?php


    $str = "Hello World";

    strrev($str); // strrev() function is used to reverse a string. It takes a string as input and returns the reversed string.

    echo $str . "<br>"; // output: Hello World
    echo strrev($str) . "<br>"; // output: dlroW olleH

    echo strlen($str) . "<br>"; // strl() function is used to get the length of a string. It takes a string as input and returns the length of the string. output: 11

    echo strpos($str,"W") . "<br>";

    echo str_replace("World","PHP", $str) . "<br>"; // str_replace() function is used to replace a string with another string. It takes three parameters, the first parameter is the string to be replaced, the second parameter is the string to replace with, and the third parameter is the string in which the replacement is to be done. It returns the modified string.
    
    echo trim($str) . "<br>"; // trim() function is used to remove whitespace from start and end of a string. It takes a string as input and returns the modified string.

    echo substr($str,0,5) . "<br>"; // substr() function is used to get a part of a string. It takes three parameters, the first parameter is the string, the second parameter is the starting position (0), and the third parameter is the length of the substring. It returns the substring.

?>