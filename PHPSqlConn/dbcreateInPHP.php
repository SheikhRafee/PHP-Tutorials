<?php

    //Creating Connection
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $databaseName = "";

    //mysqli_connect() function opens a new connection to the MySQL server. and returns an object which represents the connection to the MySQL server. This object is used to perform queries and other operations on the database.
    $conn = mysqli_connect($serverName, $userName, $password, $databaseName);

    $sql = "CREATE DATABASE myDB";

    //mysqli_query() function performs a query against the database. It takes two parameters: the connection object and the SQL query string. It returns true if the query was successful, or false if there was an error.
    if(mysqli_query($conn, $sql)){
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . mysqli_error($conn);
    }

    
?>