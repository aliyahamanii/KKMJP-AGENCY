<?php
include 'userdb.php'; // Include your database connection

// Predefined username and password
$user_email = "kkmjp@gmail.com";
$password = password_hash("Aia@123", PASSWORD_DEFAULT); // Hash the password

// Prepare an SQL statement
$stmt = $conn->prepare("INSERT INTO users (user_email, password) VALUES (?, ?)");
$stmt->bind_param("ss", $user_email, $password);

if ($stmt->execute()) {
    echo "User created successfully.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
