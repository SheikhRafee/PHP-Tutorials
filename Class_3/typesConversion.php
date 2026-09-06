<?php
$x = "10"; // string
$y = 5; // integer
$z = $x + $y; // string "10" is converted to integer 10


echo $z . "<br>"; // Output: 15
var_dump($z); // Output: integer
echo "<br>";
echo $x . $y; // Output: 105 (string concatenation)

echo "<br>";
settype($x,"integer") . "<br>"; // output 1
echo gettype($x); // Output: integer only shows plain type not the value
?>