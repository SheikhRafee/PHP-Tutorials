<?php
$var1 = 42;
$var2 = "Hello123";
$var3 = false;
$var4 = "";
$var5 = "2023";
$var6 = null;


if (is_int($var1) && is_string($var2) && ctype_alpha($var2)) {
    echo "Condition 1 is true <br>";
} else {
    echo "Condition 1 is false <br>"; //false
}


if (isset($var6) && !empty($var5) || is_bool($var3)) {
    echo "Condition 2 is true <br>"; //true
} else {
    echo "Condition 2 is false <br>";
}


if (is_numeric($var5) && is_null($var4) || empty($var4)) {
    echo "Condition 3 is true <br>"; //true
} else {
    echo "Condition 3 is false <br>";
}
?>