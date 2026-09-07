<?php
$value1 = 0.0;
$value2 = "0";
$value3 = false;
$value4 = "Hello";

//ctype_alpha checks whether there is a alphabet. Than return true(1) or false(0)
if (empty($value1) && is_string($value2) && ctype_alpha($value2)) {
    echo "Conditions 1 is true <br>";
} else {
    echo "Conditions 1 is false <br>"; //Condition 1 is false
}

//is_numeric() finds whether there is a number or number string
if (isset($value3) && empty($value1) && is_numeric($value2)) {
    echo "Conditions 2 is true <br>"; // Condition 2 is true
} else {
    echo "Conditions 2 is false <br>";
}
if (isset($value4) && !empty($value4) && is_string($value3)) {
    echo "Conditions 3 is true <br>";
} else {
    echo "Conditions 3 is false <br>"; // condition 3 is false
}


var_dump($value1, $value2, $value3, $value4);

echo "<br>";

echo is_numeric($value2). "<br>";

echo empty($value1). "<br>";

?>