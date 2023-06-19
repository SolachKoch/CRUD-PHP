<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
</head>
<body>
    <h1>Delete User</h1>
    <?php
    include "conn.php";

    // Check if the user ID is provided
    if (isset($_GET['id']))
     {
        $id = $_GET['id'];

        // Delete the user with the provided ID
        $sql = "DELETE FROM users WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            echo "User deleted successfully.";
        } else {
            echo "Error deleting user: " . $conn->error;
        }
    }

    // // Retrieve the updated list of users
    // $sql = "SELECT * FROM users";
    // $result = $conn->query($sql);

    // if ($result->num_rows > 0) {
    //     echo "<table>";
    //     echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Address</th><th>Action</th></tr>";
    //     while ($row = $result->fetch_assoc()) {
    //
    //         echo "<td>
    //            <a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
    //         echo "</tr>";
    //     }
    //     echo "</table>";
    // } else {
    //     echo "No users found.";
    // }

  
    ?>
</body>
</html>
