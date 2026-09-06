<?php
include "model.php";
include "view.php";

// Controller: Get data from model
$students = getStudents();

// Send data to view
showStudents($students);
?>