<?php
// Display all PHP errors for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database credentials
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "kkmjp"; 

// Create connection to MySQL database
$conn = new mysqli($servername, $username, $password, $dbname, 3307);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to insert contact form data into the database
function insertContactData($full_name, $phone_number, $cust_email, $message, $conn) {
    $stmt = $conn->prepare("INSERT INTO contact (full_name, phone_number, cust_email, message) VALUES (?, ?, ?, ?)");
    
    if ($stmt === false) {
        die("MySQL prepare error: " . $conn->error);
    }

    $stmt->bind_param("ssss", $full_name, $phone_number, $cust_email, $message);

    if ($stmt->execute()) {
        header("Location: thankyou.php");
        exit;
    } else {
        echo "Error inserting data: " . $stmt->error;
        return false;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = htmlspecialchars(trim($_POST['full_name']));
    $phone_number = htmlspecialchars(trim($_POST['phone_number']));  
    $cust_email = htmlspecialchars(trim($_POST['cust_email']));    
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate email
    if (!filter_var($cust_email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    insertContactData($full_name, $phone_number, $cust_email, $message, $conn);
}

$conn->close();
?>
