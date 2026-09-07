<?php
$var1 = 0;
$var2 = "123";
$var3 = null;
$var4 = "World";

if (is_int($var1) && empty($var3) && is_numeric($var2)) {
    echo "Condition 1 is true <br>"; //Condition 1 is false
} else {
    echo "Condition 1 is false <br>"; 
}


if (isset($var4) && ctype_alpha($var4) && empty($var4)) {
    echo "Condition 2 is true <br>";
} else {
    echo "Condition 2 is false <br>"; //Condition 2 is false
}


if (is_bool($var3) || (is_numeric($var2) && empty($var1))) {
    echo "Condition 3 is true <br>"; //condition 3 is true
} else {
    echo "Condition 3 is false <br>";
}
?>