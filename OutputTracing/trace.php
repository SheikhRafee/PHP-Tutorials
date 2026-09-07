<?php
session_start();
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}
$message = isset($_SESSION['message']) ?
    $_SESSION['message'] : "";
unset($_SESSION['message']);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Trace Test</title>
</head>

<body>
    <h3>Visit Count: <?php echo $_SESSION['count']; ?></h3>
    <form method="post" action="Action2.php">
        Name: <input type="text" name="name">
        <br><br>
        <button name="submit">Submit</button>
        <button name="reset">Reset</button>
    </form>
    <p><?php echo $message; ?></p>
</body>

</html>