<?php
// Include the database connection
include 'applicationdb.php';  // Ensure $conn is defined in this file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and assign form data to PHP variables
    $fullName = htmlspecialchars(trim($_POST['full_name'])) ?? ''; 
    $email = filter_var($_POST['email_address'], FILTER_SANITIZE_EMAIL) ?? '';
    $phone = preg_replace('/[^0-9]/', '', $_POST['phone_number'] ?? ''); // Only keep digits
    $positionApplied = $_POST['position_applied'] ?? '';  
    $employmentType = $_POST['employment_type'] ?? '';
    $internshipPeriod = $employmentType === 'Internship' ? ($_POST['internship_period'] ?? null) : null;
    $coverLetter = htmlspecialchars(trim($_POST['cover_letter'])) ?? '';

    // Handle Resume upload
    $resume = $_FILES['resume']['name'] ?? '';  // Get the file name if uploaded

    if (!empty($resume)) {
        // Define target directory for uploads
        $target_dir = "uploads/";
        $resumePath = $target_dir . basename($resume);

        // Move the uploaded file to the uploads directory
        if (move_uploaded_file($_FILES['resume']['tmp_name'], $resumePath)) {
            // File uploaded successfully
        } else {
            echo "There was an error uploading the resume.";
            $resume = ''; // Reset resume in case of upload failure
        }
    }

    // Now, insert all data into the database, including the resume file name if it was uploaded
    include 'applicationdb.php';

    $stmt = $conn->prepare("INSERT INTO applications (full_name, email_address, phone_number, position_applied, employment_type, internship_period, cover_letter, resume, submitted_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())");
    $stmt->bind_param("ssssssss", $fullName, $email, $phone, $positionApplied, $employmentType, $internshipPeriod, $coverLetter, $resume);
    
    if ($stmt->execute()) {
        // Redirect to thank you page
        header("Location: thankyouapp.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
    

    $stmt->close();
    $conn->close();
}
?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>KKMJP AGENCY - Job Application</title>

        <!-- CSS FILES -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="css/slick.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="css/tooplate-little-fashion.css" rel="stylesheet">
    </head>

<style> 

    /* Navbar Container */
    .navbar {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Add subtle shadow for depth */
    padding: 0.8rem 1rem; /* Add padding for better spacing */
    border-bottom: 3px solid #800000 ; /* Add a gold border for elegance */
    }


    /* Navbar Brand */
    .navbar-brand {
    font-size: 1.8rem;
    font-weight: 800;
    letter-spacing: 1px; /* Improve readability */
    color: #fff;
    text-transform: uppercase;
    }

    .navbar-brand span:first-child {
    color: #C49D19; /* Gold color for the first word */
    }

    .navbar-brand span:last-child {
    color: #fff; /* White for contrast */
    }

    /* Navbar Links */
    .navbar-nav .nav-link {
    font-size: 1.1rem; /* Slightly larger text */
    font-weight: 500; /* Medium weight for better clarity */
    color: #fff; /* White text */
    text-transform: capitalize; /* Professional casing */
    padding: 0.5rem 1rem; /* Add spacing for clickable area */
    transition: all 0.3s ease-in-out; /* Smooth hover effect */
    position: relative;
    }

    /* Navbar Link Hover Effect */
    .navbar-nav .nav-link:hover {
    color: #C49D19; /* Gold hover color */
    }

    .navbar-nav .nav-link:before {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 50%;
    width: 0;
    height: 2px;
    background-color: #C49D19; /* Gold underline effect */
    transition: width 0.4s ease, left 0.4s ease;
    }

    .navbar-nav .nav-link:hover:before {
    width: 100%;
    left: 0;
    }

    /* Navbar Toggler */
    .navbar-toggler {
    background-color: transparent;
    border: 1px solid #fff; /* White border for visibility */
    color: #fff; /* White icon */
    border-radius: 5px; /* Slightly rounded corners */
    font-size: 1.2rem;
    }

    .navbar-toggler:hover {
    background-color: #C49D19; /* Gold on hover */
    color: #fff;
    }

    /* Mobile Menu */
    .navbar-collapse {
    background-color: #af0d0d; /* Consistent red background */
    border-top: 2px solid #800000 ; /* Gold border at the top */
    padding: 1rem;
    }

    /* Mobile Links */
    .navbar-collapse .nav-link {
    color: #fff;
    padding: 0.5rem 1rem; /* Comfortable spacing */
    border-bottom: 1px solid rgba(255, 255, 255, 0.1); /* Separator lines */
    }

    .navbar-collapse .nav-link:hover {
    color: #C49D19;
    }

    /* User Icon */
    .custom-icon {
    font-size: 1.5rem;
    color: #fff;
    transition: color 0.3s ease;
    }

    .custom-icon:hover {
    color: #C49D19; /* Gold hover effect */
    }

    /* Active Link */
    .navbar-nav .nav-link.active {
    font-weight: 700; /* Bold for active link */
    color: #C49D19;
    }

</style>
    
<body>
    <!-- Preloader -->
        <section class="preloader">
            <div class="spinner">
                <span class="sk-inner-circle"></span>
            </div>
        </section>
    
    <!-- Main Content -->
        <main>
            <nav class="navbar navbar-expand-lg" style="background-color: #af0d0d;">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <strong><span>KKMJP</span> <span style="color: white;">Agency</span></strong>
                    </a>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="team.php">Our Team</a></li>
                            <li class="nav-item"><a class="nav-link" href="faq.php">FAQs</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                            <li class="nav-item"><a class="nav-link active" href="application.php">Application</a></li>
                        </ul>
                        <div class="d-none d-lg-block">
                            <a href="sign-in.php" class="bi-person custom-icon me-3"></a>
                        </div>
                    </div>
                </div>
            </nav>
 <!-- Job Application Form Section -->
<section class="application-form section-padding" style="background-color: #e5e5ce;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <h2 class="mb-4">Job Application Form</h2>
                <form action="application.php" method="post" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" id="name" name="full_name" placeholder="Enter your full name" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email_address" placeholder="Enter your email" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="phone">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone_number" placeholder="Enter your phone number" pattern="[0-9]+" inputmode="numeric" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="position">Position Applied For</label>
                        <select class="form-control" id="position" name="position_applied" required>
                            <option value="">Select a position</option>
                            <option value="Administrative">Administrative</option>
                            <option value="Sales">Sales & Management</option>
                            <option value="Social Media">Social Media Influencer</option>
                            <option value="Finance">Finance</option>
                            <option value="Multimedia">Multimedia</option>
                            <option value="Agent">Insurance Agent</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="employment-type">Employment Type</label>
                        <select class="form-control" id="employment-type" name="employment_type" onchange="toggleInternshipDuration()" required>
                            <option value="">Select employment type</option>
                            <option value="Full-time">Full-time</option>
                            <option value="Internship">Internship</option>
                        </select>
                    </div>

                    <div class="form-group mb-3" id="internship-duration" style="display: none;">
                        <label for="duration">Duration of Internship (Months)</label>
                        <input type="number" class="form-control" id="duration" name="internship_period" min="1" max="12" placeholder="Enter the internship duration (in months)">
                    </div>

                    <!-- Resume Upload Section -->
                    <div class="form-group mb-3">
                        <label for="resume">Upload Your Resume</label>
                        <input type="file" class="form-control" id="resume" name="resume" required>
                    </div>

                    <div class="form-group mb-4">
                        <label for="message">Cover Letter (optional)</label>
                        <textarea class="form-control" id="message" name="cover_letter" placeholder="Write a cover letter" rows="4"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit Application</button>
                </form>
            </div>
        </div>
    </div>
</section>
</main>

<!-- Footer -->
<footer class="site-footer" style="background-color: #000000;">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-10 me-auto mb-4">
                <h4 class="text-white mb-3"><a href="index.php">KKMJP</a> Agency</h4>
            </div>                  
            <div class="col-lg-5 col-8">      
                <ul class="footer-menu d-flex flex-wrap" style="color: white;">
                    <li class="footer-menu-item"><a href="index.php" class="footer-menu-link" style="color: white;">Home</a></li>
                    <li class="footer-menu-item"><a href="about.php" class="footer-menu-link" style="color: white;">About Us</a></li>
                    <li class="footer-menu-item"><a href="team.php" class="footer-menu-link" style="color: white;">Our Team</a></li>    
                    <li class="footer-menu-item"><a href="faq.php" class="footer-menu-link" style="color: white;">FAQs</a></li>
                    <li class="footer-menu-item"><a href="contact.php" class="footer-menu-link" style="color: white;">Contact Us</a></li>
                    <li class="footer-menu-item"><a href="application.php" class="footer-menu-link" style="color: white;">Application</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-4">
                <h5 class="text-white mb-3">Social</h5>
                    <ul class="social-icon">
                        <li><a href="https://wa.me/60168357258" class="social-icon-link bi-whatsapp" target="_blank"></a></li> <!-- WhatsApp Link -->
                        <li><a href="https://www.instagram.com/kkmjp_agency" class="social-icon-link bi-instagram" target="_blank"></a></li>
                        <li><a href="https://www.tiktok.com/@kkmjp_agency_agency" class="social-icon-link fab fa-tiktok" target="_blank"></a></li>
                        <li><a href="https://www.facebook.com/kkmjp?mibextid=LQQJ4d" class="social-icon-link fab fa-facebook" target="_blank"></a></li> <!-- Facebook Link -->
                    </ul>
            </div>
        </div>
    </div>
</footer>

<!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/Headroom.js"></script>
    <script src="js/jQuery.headroom.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleInternshipDuration() {
            const employmentType = document.getElementById("employment-type").value;
            const internshipDuration = document.getElementById("internship-duration");
            internshipDuration.style.display = employmentType === "Internship" ? "block" : "none";
        }
    </script>

</body>
</html>
