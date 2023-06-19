<?php


if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    include "conn.php";
    if (isset($_GET['id'])) {
        header('location:./index.php');
        exit;

    }
    $id=$_GET['id'];


    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $sql = "SELECT *from user WHERE id=$id";
    $result=$conn->query($sql);
    $row = $result->fetch_assoc();
    if(!$row) {
        die("Error get data for edit");
        header('location:./index.php');
        exit;
    }
    $name = $row['name'];
    $email = $row['email'];
    $address = $row['address'];

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
</head>
<style>
    .text_center{
        margin-left:30%;
    }
    .margin-left{
        margin-left:30%;
    }
</style>
<body>
    <div class="container">
        <h1>Edit User</h1>
        <form method="GET">
            <div class="mb-3">
                <a href="index.php" class="btn btn-primary">Back to home</a>
                
            </div>
            <div class="mb-3">
                <input type="text" name="name" class="form-control w-50 text_center mt-3" placeholder="Name">
            </div>
            <div class="mb-3">
                <input type="email" name="email" class="form-control w-50 text_center mt-3" placeholder="Email">
            </div>
            <div class="mb-3">
                <input type="text" name="address" class="form-control w-50 text_center mt-3" placeholder="Address">
            </div>
            <button type="submit" class="btn btn-primary margin-left mt-3">Edit</button>
        </form>
    </div>
</body>
</html>
