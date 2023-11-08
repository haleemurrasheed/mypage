<?php
// Database configuration
$host = "localhost"; // Change this to your database server name
$dbname = "client_db"; // Change this to your database name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Build a SQL Query to retrieve data from clients table
$sql = "SELECT * FROM clients";

// Execute the query and fetch data
$result = mysqli_query($conn, $sql);

// Check if any rows were returned
if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] . "<br>";
        echo "First Name: " . $row["firstName"] . "<br>";
        echo "Last Name: " . $row["lastName"] . "<br>";
        echo "Address: " . $row["address"] . "<br>";
        echo "Street Name: " . $row["streetName"] . "<br>";
        echo "Street Number: " . $row["streetNumber"] . "<br>";
        echo "Postal Code: " . $row["postalCode"] . "<br>";
        echo "City Name: " . $row["cityName"] . "<br>";
        echo "Country: " . $row["country"] . "<br>";
        echo "Comment: " . $row["comment"] . "<br><br>";
    }
} else {
    echo "0 results";
}

// Close the database connection
mysqli_close($conn);
?>
