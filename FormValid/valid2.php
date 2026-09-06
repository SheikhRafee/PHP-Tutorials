<?php

//isset() function is used to check whether the variable is set or not. It returns true if the variable is set and not null, otherwise it returns false. it is used for php form validation. It is used to check whether the form data is submitted or not. If the form data is submitted, then it will display the form data, otherwise it will display the message "Please fill the form and submit".






if (isset($_POST["name"]) && !empty($_POST["name"])) // isset is checking here whether the name field is set or not and !empty is checking whether the name field is empty or not. If both conditions are true, then it will display the name, otherwise it will display the message "Please fill the Name field and submit the form".
    {
    $name = htmlspecialchars($_POST["name"]);
    echo "Name: " . $name . "<br>";
    } 

else {
    echo "Please fill the Name field and submit the form<br>";
}
if (isset($_POST["email"]) && !empty($_POST["email"])) {
    $email = htmlspecialchars($_POST["email"]);
    echo "Email: " . $email . "<br>";
} 

else {
    echo "Please fill the Email field and submit the form<br>";
}

if (isset($_FILES["myfile"]) && !empty($_FILES["myfile"]["name"])) {
    $fileName = $_FILES["myfile"]["name"];
    $fileType = $_FILES["myfile"]["type"];
    $fileSize = $_FILES["myfile"]["size"];
    echo "File Name: " . $fileName . "<br>";
    echo "File Type: " . $fileType . "<br>";
    echo "File Size: " . $fileSize . " bytes<br>";
} 

else {
    echo "Please upload required documents and submit<br>";
}

    echo $_SERVER['PHP_SELF'] . "<br>"; // Current script name
    echo $_SERVER['SERVER_NAME'] . "<br>"; // Server name
    echo $_SERVER['REQUEST_METHOD'] . "<br>"; // GET or POST


?>