<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

    <title>KKMJP Agency - Contact Page</title>

<!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="css/tooplate-little-fashion.css" rel="stylesheet">
        
        
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
        
    /* Header Section Styling */
    .site-header {
    background-image: url('images/contact.jpg'); /* Change to your desired image */
    background-size: 100%; /* Adjust the percentage to control image size */
    background-position: center;
    height: 80vh; /* Adjust height as needed */
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.7);
    position: relative;
    text-align: center;
    }
        
    /* Blurred background effect */
    .site-header::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: inherit;
    background-size: inherit;
    background-position: inherit;
    filter: blur(8px);
    z-index: -1;
    opacity: 0.6; /* Adjust the opacity for the blur effect */
    }
        
    .site-header h1 {
    font-size: 4rem; /* Adjust size as needed */
    font-weight: 900;
    z-index: 1; /* Make sure the text appears on top of the blurred background */
    }
        
    .site-header .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4);
    z-index: 0; /* Behind the text but above the blurred background */
    }
        
    /* Vision & Mission Section Styling */
    .vision-mission-card {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
    }
        
    .vision-mission-card:hover {
    transform: translateY(-10px);
    }

    iframe {
    width: 100%; /* Responsive width */
    height: 300px; /* Fixed height */
    border: 0; /* Remove default border */
    border-radius: 10px; /* Rounded corners for the iframe */
    }

    @media (max-width: 600px) {
        iframe {
            height: 200px; /* Adjust height for smaller screens */
        }
    }

    /* Contact Info Styling */
    .contact-info {
    border: 1px solid #e5e5e5; /* Light border for definition */
    padding: 20px; /* Padding around the content */
    background-color: #f9f9f9; /* Light background color */
    border-radius: 10px; /* Rounded corners */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    }

    .contact-info h6 {
    color: #333; /* Darker text color for the header */
    font-weight: bold; /* Bold header */
    margin-bottom: 10px; /* Spacing below header */
    }

    .contact-info p {
    color: #666; /* Muted text color for address */
    margin: 0; /* Remove default margin */
    }

    /* Map Container Styling */
    .map-container {
    position: relative; /* For positioning shadow */
    border-radius: 10px; /* Rounded corners */
    overflow: hidden; /* Ensure no overflow */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Subtle shadow */
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
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="team.php">Our Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="faq.php">FAQs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="contact.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="application.php">Application</a>
                        </li>
                    </ul>
                    <div class="d-none d-lg-block">
                        <a href="sign-in.php" class="bi-person custom-icon me-3"></a>
                    </div>
                </div>
            </div>
        </nav>

 
    <header class="site-header">
        <h1>
            <span>Your favorite questions</span><br>
            <span>and our answers to them</span>
        </h1>
            <div class="overlay"></div>
    </header>
                         
    <section class="contact section-padding" style="background-color: #e5e5ce;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h2 class="mb-4">Let's <span>begin</span></h2>
                        <form class="contact-form me-lg-5 pe-lg-3" action="contactdb.php" method="POST" role="form"> 
                            <div class="form-floating">
                                <input type="text" name="full_name" id="name" class="form-control" placeholder="Full name" required>
                                    <label for="name">Full name</label>
                            </div> 

                            <div class="form-floating my-4">
                                <input type="email" name="cust_email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>
                                    <label for="email">Email address</label>
                            </div>

                            <div class="form-floating my-4">
                                <input type="tel" name="phone_number" id="phone" class="form-control" placeholder="Phone Number" required>
                                    <label for="phone">Phone Number</label>
                            </div>

                            <div class="form-floating mb-4">
                                <textarea id="message" name="message" class="form-control" placeholder="Leave a message here" required style="height: 160px"></textarea>
                                    <label for="message">Message</label>
                            </div>

                            <div class="col-lg-5 col-6">
                                <button type="submit" class="form-control">Send</button>
                            </div>
                        </form>
                </div>

                <div class="col-lg-6 col-12 mt-5 ms-auto">
                    <div class="row">
                        <div class="col-12 contact-info mb-4">
                            <h6 class="mb-3">Our Office</h6>
                                <p class="text-muted">Suite 5.01, Level 5 Riverson Block B, AIA BHD, Kota Kinabalu, Malaysia</p>
                        </div>

                        <!-- Embedded Google Map -->
                            <div class="col-12">
                                <div class="map-container">
                                    <iframe 
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d992.0467198708192!2d116.06385086951333!3d5.96898113346016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x323b69c09afe39a5%3A0x6525f0594b05431d!2sRiverson%20The%20Walk!5e0!3m2!1sen!2smy!4v1728455857931!5m2!1sen!2smy" 
                                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                    </iframe>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                        <li><a href="https://www.instagram.com/kkmjp_agency" class="social-icon-link bi-instagram" target="_blank"></a></li><!-- Instagram Link -->
                        <li><a href="https://www.tiktok.com/@kkmjp_agency_agency" class="social-icon-link fab fa-tiktok" target="_blank"></a></li> <!-- TikTok Link -->
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
    
</body>
</html>

