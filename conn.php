<!--  STEP 1-->
<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'php-crud'; 
    $id="";
    $conn = new mysqli($host, $user, $password, $database);
    // Check connection
    if ($conn->connect_error) {
        die("Error connecting to the database: " . $conn->connect_error);
    }

    // Close the connection
    // $conn->close();
?>
