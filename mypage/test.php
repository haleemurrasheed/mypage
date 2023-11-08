<?php

// establish connection to MySQL database
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// check if connection to database is successful
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// prepare and bind statement
$stmt = mysqli_prepare($conn, "INSERT INTO table_name (column1, column2, column3) VALUES (?, ?, ?)");
mysqli_stmt_bind_param($stmt, "sss", $value1, $value2, $value3);

// set parameters and execute statement
$value1 = "value1";
$value2 = "value2";
$value3 = "value3";
mysqli_stmt_execute($stmt);

// check if data was inserted successfully
if (mysqli_affected_rows($conn) > 0) {
  echo "Data inserted successfully";
} else {
  echo "Error inserting data: " . mysqli_error($conn);
}

// close statement and database connection
mysqli_stmt_close($stmt);
mysqli_close($conn);

?>
