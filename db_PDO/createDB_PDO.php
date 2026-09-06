<?php

require "dbConn_PDO.php";

echo "<br>";

try{

$sql = "CREATE DATABASE myDB_PDO";

    //exec() executes an SQL statement in a single function call, returning the number of rows affected by the statement. If no rows were affected, exec() returns 0.
    $conn->exec($sql);

    echo "Database created successfully";
}

catch(Exception $e){
    echo "Error creating database: " . $e->getMessage();
}

?>