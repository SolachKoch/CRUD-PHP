<?php
include "conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  
</head>
<body>
    <div class="container my-5">
        <h1>CRUD PHP</h1>
    <div class="container">
        <a href="add.php" class="btn btn-primary float-end " role="button">New member</a>
    </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>FULL NAME</th>
                    <th>EMAIL</th>
                    <th>ADDRESS</th>
                    <th>ACTION</th>
                </tr>
                
            </thead>
          
            <tbody>
                <!--  STEP 2 query DB-->
                  <!-- query data from db -->
            <?php
                    $sql = "SELECT * FROM user";
                    $result = $conn->query($sql);
                    if(!$result)
                    {
                        die("Error query data from table users");
                    }
                    while ($row = $result->fetch_assoc()) {
                        echo"
                            <tr>
                                <td>$row[id]</td>
                                <td>$row[name]</td>
                                <td>$row[email]</td>
                                <td>$row[address]</td>
                                <td>
                                    <a href='' class='btn btn-primary btn-sm'>Edite</a>
                                    <a href=''  class='btn btn-danger btn-sm'>Delete</a>
                                </td>
                            </tr>
                        ";
                    }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>