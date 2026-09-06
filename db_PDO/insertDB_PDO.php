<?php

require "dbConn_PDO.php";

$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["password"]);


try {

    $sql = "INSERT INTO Users (name, email, password) VALUES ('$name', '$email', '$password')";

    $conn->exec($sql);

    echo "Record inserted successfully";

    header("Location: showData_PDO.php");
} 

catch (Exception $e) {
    echo "Error inserting record: " . $e->getMessage();
}



?>