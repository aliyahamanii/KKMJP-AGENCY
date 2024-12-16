<?php
session_start();
include 'userdb.php'; // Include the database connection

// Check if the admin is logged in
if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
    header("Location: sign-in.php"); // Redirect to sign-in page if not logged in
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];

    // Fetch the user's current password from the database
    $query = "SELECT * FROM users WHERE id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$_SESSION['user_id']]);
    $user = $stmt->fetch();

    // Verify the current password
    if ($user && password_verify($current_password, $user['password'])) {
        // Hash the new password and update it in the database
        $new_hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        $update_query = "UPDATE users SET password = ? WHERE id = ?";
        $stmt = $pdo->prepare($update_query);
        $stmt->execute([$new_hashed_password, $user['id']]);

        echo "Password changed successfully!";
    } else {
        echo "Incorrect current password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>

    <h1>Change Password</h1>
    <form method="POST">
        <div>
            <label for="current_password">Current Password:</label>
            <input type="password" name="current_password" id="current_password" required>
        </div>
        <div>
            <label for="new_password">New Password:</label>
            <input type="password" name="new_password" id="new_password" required>
        </div>
        <button type="submit">Change Password</button>
    </form>

</body>
</html>
