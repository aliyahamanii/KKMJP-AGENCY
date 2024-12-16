<?php
// Database connection details
$servername = "localhost";   // Most likely "localhost" if you're running on a local server
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "kkmjp";   // Replace with the name of your database

// Create a connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $dbname, 3307);

// Check connection for errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>



