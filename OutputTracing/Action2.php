<?php
session_start();
if (isset($_POST['submit'])) {
    $_SESSION['count']++;
    $name = $_POST['name'];
    if (empty($name)) {
        $_SESSION['message'] = "Name is required";
    } else {
        $_SESSION['message'] = "Hello, " .
            strtoupper($name);
    }
} elseif (isset($_POST['reset'])) {
    $_SESSION['count'] = 0;
    $_SESSION['message'] = "Session reset";
}
header("Location: trace.php");
exit();
?>