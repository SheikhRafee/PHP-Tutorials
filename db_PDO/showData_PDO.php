<?php

    require_once "dbConn_PDO.php";

    $sql = "SELECT * FROM Users";

    //query() executes an SQL statement in a single function call, returning the result set (if any) as a PDOStatement object. If the query fails, it returns false. Use it for SELECT statements, while exec() is used for INSERT, UPDATE, DELETE, and other statements that don't return a result set.
    $result = $conn->query($sql);

    if ($result && $result->rowCount() > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Created At</th>
                </tr>";
                //mysqli_fetch_assoc() fetches a result row as an associative array. it returns an associative array of strings representing the fetched row or NULL if there are no more rows in result set.
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
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

    <form action="delete_PDO.php" method="post">
        <label for="id">Enter ID to delete:</label>
        <input type="number" name="id" id="id" required>
        <input type="submit" value="Delete">
    </form>

    <h1>Update Data</h1>

    <form action= "update_PDO.php" method = "post">
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