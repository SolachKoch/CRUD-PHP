<?php
  
    include "conn.php";

    // Check if the user ID is provided
    if (isset($_GET['id']))
     {
        $id = $_GET['id'];

        // Delete the user with the provided ID
        $sql = "DELETE FROM user WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            echo "User deleted successfully.";
        } else {
            echo "Error deleting user: " . $conn->error;
        }
    }
    header('location:./index.php');
    exit;
    ?>

