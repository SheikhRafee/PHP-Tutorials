<?php
$a = 0;
$b = "0";
$c = "false";
$d = false;
$e = null;
$f = " ";
$g = 123;
if (($a == $b && $c == $d) || ($e === null && !empty($f))) {
    echo "Condition 1 is TRUE <br>"; //true
} else {
    echo "Condition 1 is FALSE <br>";
}


if ((isset($e) xor isset($f)) && ($b === $a || $d == $c)) {
    echo "Condition 2 is TRUE <br>";
} else {
    echo "Condition 2 is FALSE <br>"; //false
}


if ((!$a && $b) && ($g % 2 == 1) && ($c !== false)) {
    echo "Condition 3 is TRUE <br>"; 
} else {
    echo "Condition 3 is FALSE <br>"; //false
}


if ((empty($a) && !empty($b)) || (!isset($z) && $g > 100)) {
    echo "Condition 4 is TRUE <br>"; //true
} else {
    echo "Condition 4 is FALSE <br>";
}


if($b === $a || $d == $c)
    {
        echo "True";
    }
    else{
        echo "False";
    }
?>