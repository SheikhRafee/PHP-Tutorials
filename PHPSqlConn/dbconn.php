<?php

    //Creating Connection
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $databaseName = "testdbconn";

    $conn = mysqli_connect($serverName, $userName, $password, $databaseName);

    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "connected successfully";

?>