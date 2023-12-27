<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include "conn.php";

    // Collect form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // Update data in the database
    $sql = "UPDATE user SET name=?, email=?, address=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $name, $email, $address, $id);

    if ($stmt->execute()) {
        // Redirect to index.php after successful update
        header('location: ./index.php');
        exit;
    } else {
        // Handle errors, you might want to display an error message or log the error
        die("Error updating data");
    }
} else {
    // Redirect to index.php if the form is not submitted via POST
    header('location: ./index.php');
    exit;
}
?>
