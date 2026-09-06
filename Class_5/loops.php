<?php

$fruits = array("apple", "banana", "orange", "grapes", "kiwi");

$i = 0;
foreach ($fruits as $fruit) {
    echo "Fruit " . ++$i . ": " . $fruit . "<br>";
}

for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        break; // exit the loop when $i is 3
    }
    echo "Number: $i <br>";
}

?>