<?php
$servername = "localhost";
$username = "root"; // Change if necessary
$password = ""; // Change if necessary
$database = "cable_company";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
