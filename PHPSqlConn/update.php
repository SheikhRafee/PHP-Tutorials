<?php

require_once 'dbconn.php';

$newId = intval($_POST['id']);
$newName = htmlspecialchars($_POST['name']);
$newEmail = htmlspecialchars($_POST['email']);
$newPassword = htmlspecialchars($_POST['password']);

$sql = "UPDATE registered_users SET name='$newName', email='$newEmail', password='$newPassword' WHERE id=$newId";

if(mysqli_query($conn, $sql)) {
    header("Location: showData.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>