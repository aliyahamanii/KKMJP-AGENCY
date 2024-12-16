<?php
session_start();
include 'userdb.php'; // Include database connection

// Ensure the user is logged in (you can add this check if needed)
if (!isset($_SESSION['loggedin'])) {
    header("Location: sign-in.php"); // Redirect to sign-in if not logged in
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['user_email'];
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];

    // Query to fetch the user data based on the email
    $stmt = $conn->prepare("SELECT user_password FROM users WHERE user_email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($old_password, $user['user_password'])) {
        // Hash the new password before storing it
        $new_password_hash = password_hash($new_password, PASSWORD_DEFAULT);

        // Update the password in the database
        $update_stmt = $conn->prepare("UPDATE users SET user_password = ? WHERE user_email = ?");
        $update_stmt->bind_param("ss", $new_password_hash, $email);
        if ($update_stmt->execute()) {
            echo "Password successfully updated.";
        } else {
            echo "Error updating password.";
        }
    } else {
        echo "Old password is incorrect.";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Change Password</title>
</head>
<body>
    <h1>Change Password</h1>
    <form method="post">
        <div>
            <label for="user_email">Email:</label>
            <input type="email" name="user_email" id="user_email" required>
        </div>
        <div>
            <label for="old_password">Old Password:</label>
            <input type="password" name="old_password" id="old_password" required>
        </div>
        <div>
            <label for="new_password">New Password:</label>
            <input type="password" name="new_password" id="new_password" required>
        </div>
        <button type="submit">Change Password</button>
    </form>
</body>
</html>
