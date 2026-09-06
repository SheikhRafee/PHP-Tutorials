<?php
session_start();

// Step 1: empty the session array.
$_SESSION = array();

// Step 2: destroy the session file on the server.
session_destroy();

// Step 3: delete the cookie by giving it a past expiry time.
setcookie('username', '', time() - 3600, '/');

// Step 4: go back to the form.
header("Location: form.html");
exit();
?>