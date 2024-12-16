<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>KKMJP AGENCY</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="css/slick.css"/>
        <link href="css/tooplate-little-fashion.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">



<style>
    /* General Typography */
    body {
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        color: #333; /* Neutral dark gray for default text */
    }

    h2, h4, h5 {
        font-family: 'Poppins', sans-serif;
    }

    h2 {
        font-size: 2.5rem;
        font-weight: 700; /* Bold for section titles */
        color: #212529; /* Professional dark color */
    }

    h4 {
        font-size: 1.8rem;
        font-weight: 600;
        color: #3c4858;
    }

    h5 {
        font-size: 1.25rem;
        font-weight: 600;
        color: #3c4858;
    }
    
    strong {
        font-size: 2rem;
        font-weight: 500;
        color: #6c757d;
    }

    /* Navbar Container */
    .navbar {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Add subtle shadow for depth */
    padding: 0.8rem 1rem; /* Add padding for better spacing */
    border-bottom: 3px solid #800000; /* Add a gold border for elegance */
    }

    /* Navbar Brand */
    .navbar-brand {
    font-size: 1.8rem; /* For the brand text */
    font-weight: 800;
    letter-spacing: 1px; /* Improve readability */
    color: #fff;
    text-transform: uppercase;
    }

    .navbar-brand span:first-child {
    font-size: 1.5rem; /* Larger font size specifically for KK MJP */
    color: #C49D19; /* Gold color matching about.php */
    font-weight: bold; /* Makes the text bold */
    }

    .navbar-brand span:last-child {
    font-size: 1.5rem; /* Larger font size specifically for KK MJP */
    color: white;
    font-weight: bold; /* Makes the text bold */
    }

    p {
    font-size: 1rem;
    line-height: 1.6; /* Enhance readability */
    color: #6c757d;
    }

    /* Highlight Text */
    .text-highlight {
    color: #ff7b00; /* Vibrant orange for emphasis */
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
    border-top: 2px solid #800000; /* Gold border at the top */
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

    /* Buttons */
    .btn {
    font-family: 'Poppins', sans-serif;
    font-size: 1rem;
    font-weight: 500;
    transition: all 0.3s ease;
    }

    .btn-warning {
    background-color: #C49D19; /* Gold color matching KKMJP word */
    color: white; /* Keeps text white */
    border: none; /* Removes the border */
    }

    .btn-warning:hover {
    background-color: #A67C15; /* A slightly darker gold for hover effect */
    color: white; /* Keeps text white on hover */
    }

    /* Modal Titles */
    .modal-title {
    font-size: 1.5rem;
    font-weight: bold;
    color: #212529;
    }

    /* Featured Section */
    .featured-product .section-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #212529;
    }

    .featured-product p {
    color: #6c757d;
    }

    /* Front Product Section */
    .front-product h4 {
    font-size: 2rem;
    font-weight: 600;
    color: #fff;
    }

    .front-product p {
    font-size: 1.2rem;
    line-height: 1.6;
    color: #f1f1f1;
    }

    /* Team Section */
    .team-thumb h5 {
    font-size: 1.25rem;
    font-weight: 600;
    color: #3c4858;
    }

    .team-thumb strong {
    color: #6c757d;
    }

    /* Section Padding */
    .section-padding {
        padding: 60px 0;
    }

    /* Rounded Images */
    .custom-circle-image {
    border-radius: 50%;
    width: 60px;
    height: 60px;
    object-fit: cover;
    }

    /* Shadows */
    .shadow-lg {
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    }

    /* Header Font Color */
    h2.section-title, h4 {
    color: #ff7b00; /* Orange color */
    }

    /* Paragraph Font Color */
    p {
    color: #333333; /* Dark Gray for better readability */
    }

    /* Link and Button Hover */
    a.btn-warning {
    color: white; /* Text color of the button */
    } 

    a.btn-warning:hover {
    background-color: #A67C15; /* Hover effect */
    color: #ffffff; /* Keeps text white */
    }

    /* Front Product Section Heading */
    .front-product h4 {
    color: #f1f1f1; /* Light color for heading text for better contrast */
    }

    /* Front Product Section Paragraph */
    .front-product p {
    color: #d1d1d1; /* Light gray for paragraph text */
    font-size: 16px; /* Set font size to 9px */
    }

    /* Button Text */
    a.btn-warning {
    color: white; /* Button text remains white */
    }  

    a.btn-warning:hover {
    background-color: #A67C15; /* Hover effect on button */
    color: white; /* Ensures text stays white on hover */
    }

    @keyframes popUp {
        0% {
            transform: translate(-50%, 20%);  /* Start below */
            opacity: 0;
        }
        100% {
            transform: translate(-50%, -50%);  /* End at the center */
            opacity: 1;
        }
    }

    .left-align {
    margin-left: -30px;  /* Adjust the value as needed */
    }

</style>
    </head>
    
<body style="background-color: #e5e5ce;"> <!-- Replace with your desired color -->
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
                <a class="navbar-brand left-align" href="index.php">
                <strong><span>KKMJP</span> <span style="color: white;">Agency</span></strong>
                </a>
            
                <div class="d-lg-none">
                    <a href="sign-in.php" class="bi-person custom-icon me-3"></a>
                </div>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Home</a> 
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
                            <a class="nav-link" href="contact.php">Contact Us</a>
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
            
        <section class="slick-slideshow">
            <!-- Slide 1 -->
                <div class="slick-custom" style="position: relative;">
                    <img src="images/AIA/aiaa.JPG" class="img-fluid" alt="" style="width: 100%; height: 100vh; object-fit: cover; filter: brightness(70%);">
                        <div class="container text-center" style="position: absolute; top: 50%; left: 80%; transform: translate(-50%, -50%); color: white; opacity: 0; animation: popUp 1s ease-out forwards;">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <h1 class="slick-title" >Your Trusted Insurance Partner</h1>
                                        <p class="lead mt-3 mb-5" style="font-weight: bold; font-size: 1.2rem; opacity: 0.9; color: #F5F5DC;">Founded with a vision to offer tailored insurance solutions, empowering you to secure your future.</p> <!-- Beige and bold -->
                                            <a href="about.php" class="btn custom-btn">Discover Our Story</a>
                                </div>
                            </div>
                        </div>
                </div>
    
            <!-- Slide 2 -->
                <div class="slick-custom" style="position: relative;">
                    <img src="images/slideshow/team.jpeg" class="img-fluid" alt="" style="width: 100%; height: 100vh; object-fit: cover; filter: brightness(70%);"> 
                        <div class="container text-center" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white;">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <h1 class="slick-title">Join Our Dynamic Team</h1>
                                        <p class="lead mt-3 mb-5" style="font-weight: bold; font-size: 1.2rem; opacity: 0.9; color: #F5F5DC;">We’re looking for passionate individuals ready to grow and thrive in the world of insurance.</p>
                                            <a href="application.php" class="btn custom-btn">Start Your Career with Us</a>
                                </div>
                            </div>
                        </div>
                </div>
    
            <!-- Slide 3 -->
                <div class="slick-custom" style="position: relative;">
                    <img src="images/ckp.jpg" class="img-fluid" alt="" style="width: 100%; height: 100vh; object-fit: cover; filter: brightness(70%);">
                        <div class="container text-center" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white;">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                        <h1 class="slick-title">We’re Here for You</h1>
                                            <p class="lead mt-3 mb-5" style="font-weight: bold; font-size: 1.2rem; opacity: 0.9; color: #F5F5DC;">Have questions or need assistance? We are just a click away to help you with all your inquiries.</p>
                                                <a href="contact.php" class="btn custom-btn">Get in Touch</a>
                                </div>
                            </div>
                        </div>
                </div>
        </section>

        <section class="about section-padding">
            <div class="container">
                <div class="row">

                    <!-- Header Section -->
            <           <div class="col-12 text-center mb-5">
                            <h2 class="section-title" style="color: #000000;">Get Started with <span style="color: #C49D19;">KKMJP</span> Agency</h2>
                        </div>

                    <!-- Tab Navigation -->
                        <div class="col-lg-2 col-12 d-flex justify-content-center">
                            <ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                        Introduction
                                    </button>
                                </li>
                            </ul>
                        </div>

                    <!-- Main Content -->
                        <div class="col-lg-10 col-12">
                            <div class="tab-content mt-2" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="row">

                                        <!-- Image Section -->
                                            <div class="col-lg-7 col-12 mb-4 mb-lg-0">
                                                <img src="images/kkmjp2.jpg" class="img-fluid rounded-lg shadow-lg" alt="KKMJP Agency Image">
                                            </div>

                                        <!-- Text Section -->
                                            <div class="col-lg-5 col-12">
                                                <div class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5">
                                                    <h4 style="color: #800000;">Protecting What Matters <span style="color: #000000;">For Your Peace of Mind</span></h4>
                                                        <p class="text-dark">Explore our diverse range of solutions that offer peace of mind and secure your future. Join us in our journey of protection and growth.</p>
                                                        <p class="text-dark">At KKMJP, we offer tailored insurance packages suited to your needs. Whether health, life, or business, we're here to secure your future every step of the way.</p>
                                                        <a href="about.php" class="btn btn-warning rounded-pill">Learn More About Us<i class="bi-arrow-right ms-2"></i></a>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                           </div>
                        </div>   
                </div>
            </div>
        </section>

        <!-- Front Product Section -->
            <section class="front-product" style="background-color: #7b0a0a; color: white; position: relative;">
                <div class="container-fluid p-0">
                    <div class="row align-items-center">
                        <!-- Image Section -->
                            <div class="col-lg-6 col-12">
                                <img src="images/nn.jpg" class="img-fluid rounded-3 shadow-lg" alt="Job Application">
                            </div>
                        <!-- Text and Call to Action Section -->
                            <div class="col-lg-6 col-12">
                                <div class="px-5 py-5 text-white">
                        <!-- Heading -->
                            <h4 class="mb-3" style="color: #F5F5DC;">
                                Start Your <span style="color: #C49D19;">Journey</span> with Us
                            </h4>
                        <!-- Description Text -->
                            <p class="mb-3" style="color: #F8F8FF;">
                                Looking for a career that offers growth and stability? Explore how you can become part of KKMJP Agency.
                            </p>
                        <!-- Apply Now Button -->
                            <a href="application.php" class="btn btn-warning rounded-pill px-4 py-3 mt-3">
                                Apply Now
                                    <i class="bi-arrow-right ms-2"></i>
                            </a>
                                </div>
                            </div>
                    </div>
                </div>
            </section>


            <section class="featured-product section-padding">
                <div class="container">
                    <div class="row text-center mb-5">
                        <h2 class="section-title">
                            <span style="color: #000000;">Meet Our</span> <span style="color: #C49D19;">Team</span>
                        </h2>
                    </div>

                <div class="row">
                    <!-- Team Member 1 -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="team-thumb d-flex align-items-center bg-white border shadow-sm rounded-3 p-3">
                                    <img src="images/people/michael.jpg" class="img-fluid custom-circle-image team-image me-3" alt="Michael">
                                        <div class="team-info">
                                                <h6 class="mb-1 text-dark">Michael</h6>
                                                    <small class="text-muted d-block">Manager</small>
                                                        <button type="button" class="btn btn-danger btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#modalMichael">
                                                            <i class="bi-plus-circle-fill"></i> More Info
                                                        </button>
                                         </div>
                             </div>
                        </div>

                    <!-- Team Member 2 -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="team-thumb d-flex align-items-center bg-white border shadow-sm rounded-3 p-3">
                                <img src="images/people/syahin.jpg" class="img-fluid custom-circle-image team-image me-3" alt="Syahin">
                                    <div class="team-info">
                                        <h6 class="mb-1 text-dark">Syahin Wazien</h6>
                                            <small class="text-muted d-block">Insurance Agent</small>
                                                <button type="button" class="btn btn-danger btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#modalSyahin">
                                                    <i class="bi-plus-circle-fill"></i> More Info
                                                </button>
                                     </div>
                             </div>
                        </div>

                    <!-- Team Member 3 -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="team-thumb d-flex align-items-center bg-white border shadow-sm rounded-3 p-3">
                                <img src="images/people/jenny.jpg" class="img-fluid custom-circle-image team-image me-3" alt="Jenny">
                                    <div class="team-info">
                                        <h6 class="mb-1 text-dark">Jenny</h6>
                                            <small class="text-muted d-block">Insurance Agent</small>
                                                <button type="button" class="btn btn-danger btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#modalJenny">
                                                    <i class="bi-plus-circle-fill"></i> More Info
                                                </button>
                                    </div>
                            </div>
                        </div>

                        <div class="col-12 text-center mt-4">
                            <a href="team.php" class="btn btn-warning rounded-pill px-4 py-3 mt-3">
                                View All Team Members
                                    <i class="bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                </div>
            </section>

<!-- Modal Templates -->
<!-- Modal for Michael -->
<div class="modal fade" id="modalMichael" tabindex="-1" aria-labelledby="modalMichaelLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalMichaelLabel">Michael</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Michael is our experienced Manager. He ensures smooth operations and excellent client service.
            </div>
        </div>
    </div>
</div>

<!-- Modal for Syahin -->
<div class="modal fade" id="modalSyahin" tabindex="-1" aria-labelledby="modalSyahinLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalSyahinLabel">Syahin Wazien</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Syahin is an expert in guiding clients with the best insurance plans for their needs.
            </div>
        </div>
    </div>
</div>

<!-- Modal for Jenny -->
<div class="modal fade" id="modalJenny" tabindex="-1" aria-labelledby="modalJennyLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalJennyLabel">Jenny</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Jenny is another experienced agent, providing comprehensive assistance to our clients in choosing the right insurance plans.
            </div>
        </div>
    </div>
</div>


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
                            <li><a href="https://www.tiktok.com/@kkmjp_agency" class="social-icon-link fab fa-tiktok" target="_blank"></a></li> <!-- TikTok Link -->
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
