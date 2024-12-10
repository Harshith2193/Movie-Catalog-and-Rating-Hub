<?php
$host = "localhost";
$username = "root";
$password = "mysql@123";
$database = "trial";

// Create a database connection
$connection = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
