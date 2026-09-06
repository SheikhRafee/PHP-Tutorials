<?php
// View: Display student list
function showStudents($students)
{
    echo "<h2>Student List</h2>";
    echo "<table border='1' cellpadding='5'>";
    echo "<tr>
<th>ID</th>
<th>Name</th>
<th>Course</th>
</tr>";
    foreach ($students as $student) {
        echo "<tr>";
        echo "<td>" . $student['id'] . "</td>";
        echo "<td>" . $student['name'] . "</td>";
        echo "<td>" . $student['course'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>