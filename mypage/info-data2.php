<?php
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
//$mDate = date("H:i:s ") . date("Y/m/d") ;

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
  (firstName, lastName, address, streetName, streetNumber, postalCode, cityName, country, comment)
   VALUES ('$firstName', '$lastName', '$address', '$streetName', '$streetNumber', '$postalCode', '$cityName', '$country', '$comment')";

// $sql = "INSERT INTO clients
//   (firstName, lastName, address, streetName, streetNumber, postalCode, cityName, country, comment)
//    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

echo "First Name: " . $firstName . "<br>";
echo "Last Name: " . $lastName . "<br>";
echo "Street Name: " . $streettName . "<br>";
echo "Street Number: " . $streetNumber . "<br>";
echo "Postal Code: " . $postalCode . "<br>";
echo "City Name: " . $cityName . "<br>";
echo "Country: " . $country . "<br>";
echo "Comment: " . $comment . "<br>";


// Prepare the query

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {

    die(mysqli_error($conn));
}
  // Bind parameters
mysqli_stmt_bind_param( $stmt, "ssssissss", 
                        $firstName, 
                        $lastName, 
                        $address, 
                        $streetName, 
                        $streetNumber, 
                        $postalCode, 
                        $cityName, 
                        $country, 
                        $comment);
  
  // Execute the query
mysqli_stmt_execute($stmt);

if (mysqli_affected_rows($conn) > 0) {
  echo "Data inserted successfully";
} else {
  echo "Error inserting data: " . mysqli_error($conn);
}
// Close the statement and the connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>  