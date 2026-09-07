<html>

<head>
</head>

<body>
    <?php
    if (isset($_COOKIE['count'])) {
        echo "<p>You have visited " . $_COOKIE['count'] . "
times.</p>";
    } else {
        echo "Cookie has been reset or not initialized.";
    }
    ?>
    <button><a href="Action.php">Refresh Page</a></button>
</body>

</html>

// You have visited 1 times
// You have visited 2 times
// You have visited 3 times
// You have visited 4 times
// You have visited 5 times