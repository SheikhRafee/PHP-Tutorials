<?php
// ---------- STEP 1: START THE SESSION (must be the very first line) ----------
// session_start() creates a new session or resumes the existing one.
session_start();

// ---------- STEP 2: SAVE THE USER DATA IN THE SESSION ----------
// $_SESSION is stored on the server, so it is safer than a cookie.
if (!empty($_POST['name'])) {
    $_SESSION['username'] = htmlspecialchars(trim($_POST['name']));
}
if (!empty($_POST['email'])) {
    $_SESSION['email'] = htmlspecialchars(trim($_POST['email']));
}

// ---------- STEP 3: COOKIE FOR "REMEMBER ME" (still before any echo) ----------
if (!empty($_POST['remember_me']) && !empty($_POST['name'])) {
    $user = htmlspecialchars(trim($_POST['name']));
    setcookie('username', $user, time() + (30 * 60), '/'); // 30 minutes
    $cookieMessage = "You will be remembered for 30 minutes.";
} else {
    $cookieMessage = "Remember Me was not ticked, so no cookie was saved.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result</title>
</head>
<body>

<h1>Form Result</h1>

<?php
// ---------- STEP 4: VALIDATE AND DISPLAY ----------
if (!empty($_POST['name'])) {
    echo "Name: " . $_SESSION['username'] . "<br>";
} else {
    echo "Please fill the Name field and submit the form.<br>";
}

if (!empty($_POST['email'])) {
    if (filter_var($_SESSION['email'], FILTER_VALIDATE_EMAIL)) {
        echo "Email: " . $_SESSION['email'] . "<br>";
    } else {
        echo "The email address is not valid.<br>";
    }
} else {
    echo "Please fill the Email field and submit the form.<br>";
}

// ---------- STEP 5: HANDLE THE UPLOADED FILE ----------
if (!empty($_FILES['myfile']['name']) && $_FILES['myfile']['error'] == 0) {

    $fileName = $_FILES['myfile']['name'];
    $fileType = $_FILES['myfile']['type'];
    $fileSize = $_FILES['myfile']['size'];
    $fileTemp = $_FILES['myfile']['tmp_name'];

    echo "File Name: " . $fileName . "<br>";
    echo "File Type: " . $fileType . "<br>";
    echo "File Size: " . $fileSize . " bytes<br>";

} else {
    echo "Please upload the required document and submit.<br>";
}

// ---------- STEP 6: MESSAGES AND SERVER INFO ----------
echo "<br>" . $cookieMessage . "<br>";
echo "Session ID: " . session_id() . "<br><br>";

echo "Script Name: " . htmlspecialchars($_SERVER['PHP_SELF']) . "<br>";
echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "<br>";
?>

<br>
<a href="welcome.php">Go to Welcome page</a>

</body>
</html>