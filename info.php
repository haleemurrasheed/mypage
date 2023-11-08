<html>
<head>
    <title>informjationjj/title>
</head>
<body bgcolor="#FFFFFF" text="#000000" >

<?php 
// Capture the values posted to this php program from the text fields

$firstName = trim($_REQUEST['firstName']);
$lastName = trim($_REQUEST['lastName']);
$address = trim($_REQUEST['address']);
$streetName  = trim($_REQUEST['streetName']);
$streetNumber = trim($_REQUEST['streetNumber']);
$postalCode = trim($_REQUEST['postalCode']);
$cityName = trim($_REQUEST['cityName']);
$country = trim($_REQUEST['country']);
$message = trim($_REQUEST['comment']);
//$today = time();

//Build a SQL Query using the values from above

$query = "INSERT INTO inventory
  (/*cliendID,*/ firstName, lastName, address, streetName, streetNumber, postalCode, cityName, country, comment/*, time*/)
   VALUES (
   /*'$clientID',*/
   '$firstName', 
   '$lastName', 
   '$address',
   '$streetName',
   '$streetNumber',
   '$postalCode',
   '$cityName',
   '$country',
    '$message'
   /*/$today*/
    )";

// Print the query to the browser so you can see it
echo ($query. "<br>");

include 'db.php';

  echo 'Connected successfully to mySQL. <BR>'; 
  
//select a database to work with
$mysqli->select_db("Info");
   Echo ("Selected the Info database. <br>");

/* Try to insert the new car into the database */
if ($result = $mysqli->query($query)) {
    echo "<p>You have successfully entered $firstName $lastName into the database.</P>";
}
else
{
    echo "Error retrieving the database: " . $mysqli->error."<br>";
}
$mysqli->close();
include 'footer.php'
?>
