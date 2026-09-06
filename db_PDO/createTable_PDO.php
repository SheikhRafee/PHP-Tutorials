<?php

    require "dbConn_PDO.php";

    try{
        
        $sql = "CREATE TABLE Users(
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(50) NOT NULL,
            email VARCHAR(50) NOT NULL UNIQUE,
            password VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";

        //exec() executes an SQL statement in a single function call, returning the number of rows affected by the statement. If no rows were affected, exec() returns 0.
        $conn->exec($sql);

        echo "Table created successfully";
    }

    catch(Exception $e){
        echo "Error creating table: " . $e->getMessage();

    }


?>