<?php
session_start();
$message = isset($_SESSION['submission_success']) ? $_SESSION['submission_success'] : "
    <div style='font-size: 3rem; line-height: 1.8; text-align: center; color: #333;'>
        <p style='margin-top: 10px;'>We appreciate your interest in joining <strong>KKMJP Agency</strong>. Your application has been successfully received.</p>
        <p>If shortlisted, our team will contact you via <strong>email</strong> or <strong>phone</strong> for the next steps. We look forward to connecting with you!</p>
    </div>
";
unset($_SESSION['submission_success']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>

    <link rel="stylesheet" href="styles.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/slick.css"/>
    <link href="css/tooplate-little-fashion.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
    
    /* Global font settings */
    body {
    font-family: 'Inter', sans-serif; /* Default font for body text */
    background-color: #e5e5ce;
    color: #333333;
    margin: 0;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    }

    main {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    min-height: calc(100vh - 150px); /* Adjust based on header/footer height */
    text-align: center;
    }

    .site-header {
    background-color: #e5e5ce;
    padding: 50px 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    width: 100%;
    }

    .site-header h1 {
    margin: 0;
    font-size: 3rem;
    font-weight: 900;
    color: #a80707;
    }
    
    .site-header p {
    font-size: 1.2rem;
    margin: 20px 0;
    line-height: 1.6;
    }

    .btn {
    display: inline-block;
    padding: 15px 35px;
    background-color: #ffffff;
    color: #a80707;
    text-decoration: none;
    border-radius: 30px;
    font-weight: bold;
    transition: background-color 0.3s, color 0.3s, transform 0.3s;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
    }

    .btn:hover {
    background-color: #a80707;
    color: #ffffff;
    transform: translateY(-3px);
    }

        /* Footer style */
    footer {
    padding: 50px 0;
    color: #ffffff;
    background-color: #000000;
    text-align: center;
    }

    .footer-menu a {
    color: #ffffff;
    text-decoration: none;
    margin: 0 15px;
    }

    .footer-menu a:hover {
    color: #a80707;
    }

    .social-icon a {
    color: #ffffff;
    margin: 0 15px;
    font-size: 1.5rem;
    transition: color 0.3s;
    }

    .social-icon a:hover {
    color: #f02a2a;
    }

    .nav-link {
    color: #ffffff !important;
    font-size: 1.1rem;
    font-family: 'Inter', sans-serif;
    }

    .nav-link:hover {
    color: #fbf6f6 !important;
    font-weight: bold;
    }

    /* Body content font */
    h1 {
    font-family: 'Roboto', sans-serif; /* A visually appealing font for headers */
    color: #800000; /* Maroon color */
    }

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

</head>
<body>

<section class="preloader">
    <div class="spinner">
        <span class="sk-inner-circle"></span>
    </div>
</section>

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

<header>
    <h1 style="color: #800000;">Thank You for Your Application!</h1>
        <div>
            <?php echo $message; ?>
        </div>
    <a href="index.php" class="btn">Return to Home</a>
</header>

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

</main>
</body>
</html>
