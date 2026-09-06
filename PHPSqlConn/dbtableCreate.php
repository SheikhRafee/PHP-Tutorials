<?php

require "dbconn.php";

echo "<br>";

$sql = "CREATE TABLE registered_users(
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

if (mysqli_query($conn, $sql)) {
    echo "Registered User Table successfully created";
} else {
    echo "Error creating table" . mysqli_error($conn);
}


?>