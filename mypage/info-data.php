<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Capture the values posted to this php program from the text fields
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$address = $_POST['address'];
$streetName = $_POST['streetName'];
$streetNumber = $_POST['streetNumber'];
$postalCode = strtoupper($_POST['postalCode']); // Sanitize and convert to uppercase
$cityName = $_POST['cityName'];
$country = $_POST['country'];
$comment = $_POST['comment'];
$date = date('Y-m-d H:i:s'); // Example format: 2023-04-26 15:25:30


// Database configuration
$host = "localhost"; // Change this to your database server name
$dbname = "client_db"; // Change this to your database name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password

// Create connection
$conn = mysqli_connect( $host, $username,$password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//Build a SQL Query using the values from above

 $sql = "INSERT INTO clients
   (firstName, lastName, address, streetName, streetNumber, postalCode, cityName, country, comment, date_time)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";



// Prepare the query

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {

    die(mysqli_error($conn));
}
  // Bind parameters
mysqli_stmt_bind_param( $stmt, "ssssisssss", 
                        $firstName, 
                        $lastName, 
                        $address, 
                        $streetName, 
                        $streetNumber, 
                        $postalCode, 
                        $cityName, 
                        $country, 
                        $comment,
                        $date);
  

  // Execute the query
mysqli_stmt_execute($stmt);

if (mysqli_affected_rows($conn) > 0) {
  echo "Thanks for your feedback. We will contact you soon";
} else {
  echo "Error inserting data: " . mysqli_error($conn);
}
// Close the statement and the connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>  