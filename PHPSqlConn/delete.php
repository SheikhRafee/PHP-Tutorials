<?php

require_once 'dbconn.php';

//intval() is used to convert a variable to integer type. It is used here to prevent SQL injection attacks.

$id = intval($_POST['id']);

$sql = "DELETE FROM registered_users WHERE id=$id";

if(mysqli_query($conn, $sql))
    {
        header("Location: showData.php");
    }
    else
    {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);


?>