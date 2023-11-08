<?php
// Database configuration
$host = "localhost"; // Change this to your database server name
$dbname = "client_db"; // Change this to your database name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password

// Create connection
$conn = mysqli_connect(hostname: $host, username: $username, password: $password, database: $dbname);

// Check connection
if ($mysqli_connect_error()) {
    die("Connection failed: " . $mysqli_connect_error());
}

?>
