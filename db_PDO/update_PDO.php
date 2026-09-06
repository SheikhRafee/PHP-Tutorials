<?php

require "dbConn_PDO.php";

$newId = intval($_POST['id']);
$newName = htmlspecialchars($_POST['name']);
$newEmail = htmlspecialchars($_POST['email']);
$newPassword = htmlspecialchars($_POST['password']);

try{

    $sql = "UPDATE Users SET name='$newName', email='$newEmail', password='$newPassword' WHERE id=$newId";

    $conn->exec($sql);

    //echo "Record updated successfully";

    header("Location: showData_PDO.php");
}

catch(Exception $e){
    echo "Error updating record: " . $e->getMessage();
}



?>