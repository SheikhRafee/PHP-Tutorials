<?php

    //Creating Connection
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $databaseName = "myDB_PDO";

    try{
        $conn = new PDO("mysql:host=$serverName;dbname=$databaseName", $userName, $password);

        // set the PDO error mode to exception
        // This line sets the error reporting mode for the PDO connection. By setting it to PDO::ERRMODE_EXCEPTION, any errors that occur during database operations will throw exceptions, allowing for better error handling and debugging.
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo  "connected successfully";
    }

    //PDOException is a built-in class in PHP that represents an exception thrown by the PDO (PHP Data Objects) extension. It is used to handle errors related to database operations when using PDO for database interactions.
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }


?>