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

var_dump($firstName,$lastName,$address,$streetName,$streetNumber,$postalCode,$cityName,$country,$comment);

?>
