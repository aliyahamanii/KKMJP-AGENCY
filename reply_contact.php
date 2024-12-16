<?php
// Include database connection
require 'contactdb.php'; // Update this to the correct path to your db connection file

if (isset($_GET['id'])) {
    $customer_id = $_GET['customer_id'];

    // Fetch the contact details
    $stmt = $conn->prepare("SELECT * FROM contact WHERE customer_id = ?");
    $stmt->bind_param("i", $customer_id); // Bind the parameter (integer)
    $stmt->execute();
    $contact = $stmt->get_result()->fetch_assoc();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $replyMessage = $_POST['reply'];

        // Insert the reply into the database
        $replyStmt = $conn->prepare("INSERT INTO replies (customer_id, reply_message, reply_date) VALUES (?, ?, NOW())");
        $replyStmt->bind_param("is", $contactId, $replyMessage); // Bind parameters (integer and string)
        $replyStmt->execute();

        // Code to send email notification to the user
        mail($contact['cust_email'], "Reply to Your Message", $replyMessage);

        echo "Reply sent successfully!";
    }
}
?>

<!-- Reply Form -->
<?php if (isset($contact)): ?>
    <form method="post">
        <h3>Reply to <?php echo htmlspecialchars($contact['full_name']); ?></h3>
        <textarea name="reply" required></textarea>
        <button type="submit" class="btn btn-primary">Send Reply</button>
    </form>
<?php else: ?>
    <p>Contact not found.</p>
<?php endif; ?>
