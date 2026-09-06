<?php

    require_once "dbconn.php";

    $sql = "SELECT * FROM registered_users";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Created At</th>
                </tr>";
                //mysqli_fetch_assoc() fetches a result row as an associative array. it returns an associative array of strings representing the fetched row or NULL if there are no more rows in result set.
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["email"] . "</td>
                    <td>" . $row["password"] . "</td>
                    <td>" . $row["created_at"] . "</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "No records found.";
    }


?>

    <h1>Delete Data</h1>

    <form action="delete.php" method="post">
        <label for="id">Enter ID to delete:</label>
        <input type="number" name="id" id="id" required>
        <input type="submit" value="Delete">
    </form>

    <h1>Update Data</h1>

    <form action= "update.php" method = "post">
        <label for="id">Enter ID to update:</label>
        <input type="number" name="id" id="id" required>
        <label for="name">Enter new Name:</label>
        <input type="text" name="name" id="name" required>
        <label for="email">Enter new Email:</label>
        <input type="email" name="email" id="email" required>
        <label for="password">Enter new Password:</label>
        <input type="password" name="password" id="password" required>
        <input type="submit" value="Update">
    </form>