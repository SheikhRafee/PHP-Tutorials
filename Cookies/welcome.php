<?php
session_start(); // resume the session created in process.php

// ---------- CASE 1: THE SESSION IS ALIVE ----------
if (isset($_SESSION['username'])) {

    echo "<h1>Welcome, " . $_SESSION['username'] . "</h1>";
    echo "Email: " . $_SESSION['email'] . "<br>";

    if (isset($_SESSION['file'])) {
        echo "Uploaded file: " . $_SESSION['file'] . "<br>";
    }

    echo "<br><a href='logout.php'>Logout</a>";

// ---------- CASE 2: SESSION GONE, BUT THE COOKIE IS STILL THERE ----------
} elseif (isset($_COOKIE['username'])) {

    echo "<h1>Welcome back, " . $_COOKIE['username'] . "</h1>";
    echo "Your session has ended, but you were remembered by a cookie.<br>";
    echo "<br><a href='form.html'>Fill the form again</a>";

// ---------- CASE 3: NOTHING FOUND ----------
} else {
    // No output has been printed yet in this branch, so header() works.
    header("Location: form.html");
    exit();
}
?>