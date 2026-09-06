<?php

$name = htmlspecialchars($_POST["name"]); //htmlspecialchars used for sanitize
$email = htmlspecialchars($_POST["email"]); // accessing the form data inputs.html using $_POST superglobal
$fileName = $_FILES["myfile"]["name"]; // accessing the file name from the $_FILES superglobal
$fileType = $_FILES["myfile"]["type"];
$fileSize = $_FILES["myfile"]["size"];


echo "Name: ".$name;
echo "<br>";
echo "Email: ".$email;
echo "<br>";

echo "File Name: ".$fileName."<br>";
echo "File Type: ".$fileType."<br>";
echo "File Size: ".$fileSize." bytes<br>";

echo "<br>";
echo "<br>";

print_r($_FILES); // print_r used to print the array of $_FILES superglobal

?>