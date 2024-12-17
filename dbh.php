<?php
$servername = "localhost"; // Change if your database server is different
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "webdev"; // The name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
