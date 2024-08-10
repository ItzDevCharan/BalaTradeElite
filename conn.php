<?php
$servername = "localhost";
$username = "u711900092_bte"; // your database username
$password = "Nimda@062024"; // your database password
$dbname = "u711900092_bte"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If you want to echo a success message for testing purposes, uncomment the following line
echo "Connected successfully";

?>
