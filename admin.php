<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Redirect to login page if user is not logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: sign-in.php");
    exit();
}

// Include the database connection file
include 'applicationdb.php'; // Make sure $conn is defined in this file

// Check if there's an alert message stored in the session
if (isset($_SESSION['alert'])) {
    echo "<script>alert('{$_SESSION['alert']}');</script>";
    unset($_SESSION['alert']); // Remove the alert from session after displaying
}

// Fetch total applications
$totalApplicationsResult = $conn->query("SELECT COUNT(*) as total FROM applications");
$totalApplications = $totalApplicationsResult->fetch_assoc()['total'];

// Fetch total contacts
$totalContactsResult = $conn->query("SELECT COUNT(*) as total FROM contact");
$totalContacts = $totalContactsResult->fetch_assoc()['total'];

// Fetch recent applications
$recentApplicationsResult = $conn->query("SELECT application_id, full_name, email_address, phone_number, position_applied, employment_type, internship_period, cover_letter, submitted_at, resume FROM applications ORDER BY application_id DESC LIMIT 10");

// Fetch statistics for positions applied
$positionStatsResult = $conn->query("SELECT position_applied, COUNT(*) as total FROM applications GROUP BY position_applied");

// Fetch statistics for employment types
$employmentTypeStatsResult = $conn->query("SELECT employment_type, COUNT(*) as total FROM applications GROUP BY employment_type");

// Email sending logic with prepared statements and added security
if (isset($_POST['send_email'])) {
    if (!empty($_POST['contact_id']) && !empty($_POST['reply_message'])) {
        $contactId = intval($_POST['contact_id']);
        $replyMessage = $conn->real_escape_string($_POST['reply_message']);

        // Fetch contact details securely
        $contactQuery = $conn->prepare("SELECT user_email FROM contact WHERE contact_id = ?");
        $contactQuery->bind_param("i", $contactId);
        $contactQuery->execute();
        $result = $contactQuery->get_result();
        $contact = $result->fetch_assoc();

        if ($contact) {
            $updateQuery = $conn->prepare("UPDATE contact SET reply = ?, status = 'replied' WHERE contact_id = ?");
            $updateQuery->bind_param("si", $replyMessage, $contactId);
            $updateQuery->execute();

            // Prepare and send the email
            $from = "kkmjpagency@gmail.com";
            $to = $contact['user_email'];
            $subject = "Internship Registration Form ";
            $message = "Dear " . htmlspecialchars($_POST['application_name']) . ",\n\nThank you for your interest in undertaking your internship with KKMJP Agency. To proceed with the registration process, please complete the attached registration form.
Once you have filled in the required details, kindly return the completed form to us at your earliest convenience.\n\n
Should you have any questions or need further assistance, feel free to reach out.
\n\nThank you, and we look forward to receiving your completed form.
\n\nBest regards,\nKKMJP Team";
            $headers = "From: $from";

            if (mail($to, $subject, $message, $headers)) {
                $_SESSION['alert'] = "Email sent successfully to " . htmlspecialchars($to);
            } else {
                $_SESSION['alert'] = "Email sending failed.";
            }
        } else {
            $_SESSION['alert'] = "Contact not found.";
        }
        $contactQuery->close();
        $updateQuery->close();

        // Redirect to avoid form resubmission
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        $_SESSION['alert'] = "Missing contact ID or reply message.";
    }
}


// Delete applicant logic
if (isset($_POST['delete_applicant'])) {
    $applicationId = intval($_POST['application_id']); // Ensure it's an integer

    // Prepare the delete query
    $deleteQuery = $conn->prepare("DELETE FROM applications WHERE application_id = ?");
    $deleteQuery->bind_param("i", $applicationId);

    if ($deleteQuery->execute()) {
        $_SESSION['alert'] = "Applicant deleted successfully.";
    } else {
        $_SESSION['alert'] = "Error deleting record: " . $deleteQuery->error;
    }
    $deleteQuery->close();

    // Redirect to avoid form resubmission
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Delete contact logic
if (isset($_POST['delete_contact_id'])) {
    $deleteId = intval($_POST['delete_contact_id']); // Ensure it's a valid integer
    $deleteQuery = $conn->prepare("DELETE FROM contact WHERE contact_id = ?");
    $deleteQuery->bind_param("i", $deleteId);

    if ($deleteQuery->execute()) {
        $_SESSION['alert'] = "Contact deleted successfully.";
    } else {
        $_SESSION['alert'] = "Failed to delete contact: " . $conn->error;
    }
    $deleteQuery->close();

    // Redirect to avoid form resubmission
    header("Location: " . $_SERVER['PHP_SELF']); // Redirect back to the same page
    exit();
}

?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>KKMJP Admin Dashboard</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <style>

        :root {
            --primary-color: #af0d0d;
            --hover-color: #ff4500;
            --bg-light: #f8f9fa;
            --shadow-color: rgba(0, 0, 0, 0.1);
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #e5e5ce;
            color: #343a40;
        }

        .sidebar {
            height: 100vh;
            width: 250px;
            background-color: var(--primary-color);
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
            color: white;
        }

        .sidebar h2 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 30px;
        }

        .nav-item {
            margin: 15px 0;
        }

        .nav-link {
            color: white;
            padding: 10px 15px;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .nav-link:hover {
            background-color: var(--hover-color);
        }

        .main-content {
            margin-left: 250px;
            padding: 30px;
        }

        .header {
            background-color: var(--primary-color);
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            text-align: center;
        }

        .info-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px var(--shadow-color);
            padding: 20px;
            margin: 10px 15px 10px 0;
            flex: 1;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: var(--primary-color);
            color: white;
        }

        .nav-tabs .nav-link.active {
            background-color: var(--primary-color);
            color: white;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
            }
            .main-content {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>

<div class="sidebar">
    <h2>KKMJP Admin</h2>
    <nav class="navbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="admin.php">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
    </nav>
</div>

<div class="main-content">
    <div class="header">
        <h1>Welcome to Admin Page!</h1>
        <p><strong>Today:</strong> <?php echo date("d M Y"); ?></p>
    </div>

    <!-- Info Cards for Total Applications and Contacts -->
    <div class="d-flex flex-wrap">
        <div class="info-card me-3">
            <h3>Total Applications</h3>
            <p class="display-4"><?php echo $totalApplications; ?></p>
        </div>
        <div class="info-card">
            <h3>Total Contacts</h3>
            <p class="display-4"><?php echo $totalContacts; ?></p>
        </div>
    </div>

    <!-- Navigation Tabs -->
    <ul class="nav nav-tabs mt-4" id="adminTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="applications-tab" data-bs-toggle="tab" href="#applications" role="tab" aria-controls="applications" aria-selected="true">Manage Applications</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Manage Contacts</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="statistics-tab" data-bs-toggle="tab" href="#statistics" role="tab" aria-controls="statistics" aria-selected="false">View Statistics</a>
        </li>
    </ul>

    <div class="tab-content mt-3" id="adminTabContent">
 

    <!-- Applications Tab -->
<div class="tab-pane fade show active" id="applications" role="tabpanel" aria-labelledby="applications-tab">
    <h2>Recent Applications</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Position</th>
                <th>Employment Type</th>
                <th>Internship Period</th>
                <th>Cover Letter</th>
                <th>Date Applied</th>
                <th>Resume</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($application = $recentApplicationsResult->fetch_assoc()) : ?>
                <tr>
                    <td><?php echo $application['application_id']; ?></td>
                    <td><?php echo htmlspecialchars($application['full_name']); ?></td>
                    <td><?php echo htmlspecialchars($application['email_address']); ?></td>
                    <td><?php echo htmlspecialchars($application['phone_number']); ?></td>
                    <td><?php echo htmlspecialchars($application['position_applied']); ?></td>
                    <td><?php echo htmlspecialchars($application['employment_type']); ?></td>
                    <td><?php echo !empty($application['internship_period']) ? htmlspecialchars($application['internship_period']) : 'N/A'; ?></td>
                    <td>
                        <?php if (!empty($application['cover_letter'])): ?>
                            <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#coverLetterModal<?php echo $application['application_id']; ?>">
                                View Cover Letter
                            </button>
                        <?php else: ?>
                            No Cover Letter
                        <?php endif; ?>
                    </td>
                    <td><?php echo date('d M Y', strtotime($application['submitted_at'])); ?></td>
                    <td>
                        <?php if (!empty($application['resume']) && file_exists("uploads/" . $application['resume'])): ?>
                            <a href="uploads/<?php echo htmlspecialchars($application['resume']); ?>" target="_blank">View Resume</a>
                        <?php else: ?>
                            No Resume
                        <?php endif; ?>
                    </td>
                    <td>
                       <!-- Link to open Gmail compose with mailto link -->
<a href="mailto:<?php echo htmlspecialchars($application['email_address']); ?>?subject=Internship%20Registration%20Form&body=Dear%20<?php echo urlencode($application['full_name']); ?>%2C%0A%0AThank%20you%20for%20your%20interest%20in%20undertaking%20your%20internship%20with%20KKMJP%20Agency.%20To%20proceed%20with%20the%20registration%20process%2C%20please%20complete%20the%20attached%20registration%20form.%0AOnce%20you%20have%20filled%20in%20the%20required%20details%2C%20kindly%20return%20the%20completed%20form%20to%20us%20at%20your%20earliest%20convenience.%0A%0AShould%20you%20have%20any%20questions%20or%20need%20further%20assistance%2C%20feel%20free%20to%20reach%20out.%0A%0AThank%20you%2C%20and%20we%20look%20forward%20to%20receiving%20your%20completed%20form.%0A%0ABest%20regards%2C%0AKKMJP%20Team" class="btn btn-primary btn-sm" target="_blank">Send Email</a>

                        <!-- Form to delete applicant -->
                        <form method="POST" action="" style="display:inline;">
    <input type="hidden" name="application_id" value="<?php echo htmlspecialchars($application['application_id']); ?>">
    <button type="submit" name="delete_applicant" class="btn btn-danger btn-sm">Delete</button>
</form>

                    </td>
                </tr>

                <!-- Modal for the cover letter -->
                <div class="modal fade" id="coverLetterModal<?php echo $application['application_id']; ?>" tabindex="-1" aria-labelledby="coverLetterModalLabel<?php echo $application['application_id']; ?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="coverLetterModalLabel<?php echo $application['application_id']; ?>">Cover Letter</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <?php echo nl2br(htmlspecialchars($application['cover_letter'])); ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<!-- Contacts Tab -->
<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
    <h2>Manage Contacts</h2>

    <?php
    // Check if a delete request was submitted
    if (isset($_POST['delete_contact_id'])) {
        
        // Print out the $_POST array for debugging
        print_r($_POST);

        $deleteId = intval($_POST['delete_contact_id']); // Ensure it's a valid integer
        $deleteQuery = "DELETE FROM contact WHERE contact_id = $deleteId";
        $deleteResult = $conn->query($deleteQuery); // Execute the delete query

        if ($deleteResult) {
            echo "<script>alert('Contact deleted successfully.');</script>";
        } else {
            echo "<script>alert('Failed to delete contact: " . $conn->error . "');</script>";
        }
        
    }

    // Query to fetch recent contacts
    $recentContact = $conn->query("SELECT contact_id, full_name, cust_email, phone_number, created_at, message FROM contact ORDER BY contact_id DESC LIMIT 10");

    if ($recentContact && $recentContact->num_rows > 0) : ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Date</th>
                    <th>Inbox</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($contact = $recentContact->fetch_assoc()) : ?>
                    <tr>
                        <td><?php echo $contact['contact_id']; ?></td>
                        <td><?php echo $contact['full_name']; ?></td>
                        <td><?php echo $contact['cust_email']; ?></td>
                        <td><?php echo $contact['phone_number']; ?></td>
                        <td><?php echo $contact['created_at']; ?></td>
                        <td><?php echo $contact['message']; ?></td>
                        <td>
                            <form method="post" style="display:inline;">
                                <input type="hidden" name="delete_contact_id" value="<?php echo $contact['contact_id']; ?>">
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this contact?');">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>No recent contacts found.</p>
    <?php endif; ?>
</div>


     <!-- Statistics Tab -->
<div class="tab-pane fade" id="statistics" role="tabpanel" aria-labelledby="statistics-tab">
    <div class="statistics-container">
        <h2 class="statistics-title">Statistics Overview</h2>
        
        <!-- Card for Positions Applied -->
        <div class="card mb-4">
            <div class="card-header">
                <h3>Positions Applied</h3>
            </div>
            <div class="card-body">
                <canvas id="positionsChart" style="max-width: 100%; height: auto;"></canvas>
            </div>
        </div>

        <!-- Card for Employment Types -->
        <div class="card">
            <div class="card-header">
                <h3>Employment Types</h3>
            </div>
            <div class="card-body">
                <canvas id="employmentTypesChart" style="max-width: 100%; height: auto;"></canvas>
            </div>
        </div>
    </div>
</div>

<!-- Link to Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Data for Positions Applied Chart
        const positionLabels = [];
        const positionData = [];

        <?php while ($row = $positionStatsResult->fetch_assoc()) : ?>
            positionLabels.push("<?php echo $row['position_applied']; ?>");
            positionData.push(<?php echo $row['total']; ?>);
        <?php endwhile; ?>

        const positionsChart = new Chart(document.getElementById('positionsChart'), {
            type: 'bar',
            data: {
                labels: positionLabels,
                datasets: [{
                    label: 'Number of Applications',
                    data: positionData,
                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Data for Employment Types Chart
        const employmentLabels = [];
        const employmentData = [];

        <?php while ($row = $employmentTypeStatsResult->fetch_assoc()) : ?>
            employmentLabels.push("<?php echo $row['employment_type']; ?>");
            employmentData.push(<?php echo $row['total']; ?>);
        <?php endwhile; ?>

        const employmentTypesChart = new Chart(document.getElementById('employmentTypesChart'), {
            type: 'pie',
            data: {
                labels: employmentLabels,
                datasets: [{
                    label: 'Number of Applications',
                    data: employmentData,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    });
</script>

<style>
    /* Custom Styles for Statistics Tab */
    .statistics-title {
        text-align: center;
        font-size: 1.5em;
        margin-bottom: 20px;
        color: #333;
    }

    .card {
        background: #f5e6e1 ;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin-bottom: 20px;
    }

    .card-header {
        background:  #800000 ;
        color: #fff;
        padding: 15px;
        font-size: 1.25em;
    }

    .card-body {
        padding: 20px;
    }

    /* Make charts responsive */
    #positionsChart, #employmentTypesChart {
        width: 100% !important;
        height: auto !important;
    }
</style>


<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
