<?php
$servername = "localhost:5500"; // e.g., mysql.hostinger.com
$username = "u711900092_bte"; // Your Hostinger database username
$password = "Nimda@062024"; // Your Hostinger database password
$dbname = "u711900092_bte"; // Your Hostinger database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo "Connected successfully";
}
?>
