<?php

require 'dbConn_PDO.php';

//intval() is used to convert a variable to integer type. It is used here to prevent SQL injection attacks.

$id = intval($_POST['id']);

try{

    $sql = "DELETE FROM Users WHERE id=$id";

    $conn->exec($sql);

    header("Location: showData_PDO.php");


}
catch(Exception $e){
    echo "Error deleting record: " . $e->getMessage();
}

?>