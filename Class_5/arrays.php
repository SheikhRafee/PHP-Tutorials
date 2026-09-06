<?php

    $fruits = array("apple", "banana", "orange", "grapes", "kiwi");

    //or

    $cars = ["Volvo", "BMW", "Toyota"];

    echo $fruits[2] . "<br>";

    echo $cars[1] . "<br>";

    array_push($cars, "Mercedes", "Audi"); // array_push() function is used to add one or more elements to the end of an array. It takes two parameters: the first parameter is the array to which you want to add elements, and the second parameter is the element(s) you want to add. It returns the new number of elements in the array after adding the new element(s).

    echo $cars[3] . " " . $cars[4] . "<br>";

    echo array_pop($fruits) . "<br>"; // array_pop() function is used to remove the last element from an array. It takes one parameter: the array from which you want to remove the last element. It returns the value of the removed element.

    //associative array are custom keys or indexes for the array elements. It is used to store data in key-value pairs. The key is a unique identifier for each element in the array, and the value is the data associated with that key. Associative arrays are useful when you want to access data using meaningful names instead of numeric indexes.

    $age = [
        "Peter" => "35",
        "Ben" => "37",
        "Joe" => "43"
    ];

    echo $age["Joe"] . "<br>";

    echo "<br>";
    echo "<br>";

    $company = array("Bloomberg", "Google", "Microsoft", "Apple", "Facebook");

    echo array_shift($company) . "<br>"; // array_shift() function is used to remove the first element from an array. It takes one parameter: the array from which you want to remove the first element. It returns the value of the removed element.

    $findMicrosoft = array_search("Microsoft", $company); // array_search() function is used to search for a specific value in an array. It takes two parameters: the first parameter is the value you want to search for, and the second parameter is the array in which you want to search. It returns the key of the first matching value found in the array, or false if the value is not found.


    echo array_push($company, "Tesla") . "<br>"; // array_push() function is used to add one or more elements to the end of an array. It takes two parameters: the first parameter is the array to which you want to add elements, and the second parameter is the element(s) you want to add. It returns the new number of elements in the array after adding the new element(s).

    echo array_pop($company) . "<br>"; // array_pop() function is used to remove the last element from an array. It takes one parameter: the array from which you want to remove the last element. It returns the value of the removed element. 

    print_r($company);
?>