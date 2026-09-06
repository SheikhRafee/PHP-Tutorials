<?php
require "dbconn.php";

$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["password"]);

if(empty($name) || empty($email) || empty($password))
    {
        die("Please fill all the fields and submit the form.");
    }

$sql = "INSERT INTO registered_users (name, email, password) VALUES ('$name', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    // echo "New Insertion Done";
    header("Location: showData.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>