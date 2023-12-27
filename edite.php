<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    include "conn.php";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM user WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if (!$row) {
            die("Error getting data for edit");
            header('location: ./index.php');
            exit;
        }

        $name = $row['name'];
        $email = $row['email'];
        $address = $row['address'];
    } else {
        header('location: ./index.php');
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
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
        <form method="POST" action="update.php">
            <div class="mb-3">
                <a href="index.php" class="btn btn-primary">Back to home</a>
            </div>
            <div class="mb-3">
                <input type="text" name="name" class="form-control w-50 text_center mt-3" placeholder="Name" value="<?php echo $name; ?>">
            </div>
            <div class="mb-3">
                <input type="email" name="email" class="form-control w-50 text_center mt-3" placeholder="Email" value="<?php echo $email; ?>">
            </div>
            <div class="mb-3">
                <input type="text" name="address" class="form-control w-50 text_center mt-3" placeholder="Address" value="<?php echo $address; ?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="submit" class="btn btn-primary margin-left mt-3">Edit</button>
        </form>
    </div>
</body>
</html>
