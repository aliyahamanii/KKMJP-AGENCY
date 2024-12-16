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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="css/tooplate-little-fashion.css" rel="stylesheet">
       
<style>
        
    /* Header Section Styling */
        .site-header {
            background-image: url('images/famques.jpg'); /* Change to your desired image */
            background-size: cover; /* Cover the entire area */
            background-position: center;
            height: 80vh; /* Adjust height as needed */
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.7);
            position: relative;
            text-align: center;
            overflow: hidden; /* Ensures that the overlay doesn't overflow */
        }
        
    /* Blurred background effect */
        .site-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: inherit; /* Inherit from the header background */
            background-size: inherit; /* Use the same size as the background */
            background-position: inherit; /* Same positioning */
            filter: blur(8px); /* Blur effect */
            z-index: -1; /* Place behind the content */
            opacity: 0.6; /* Adjust the opacity for the blur effect */
        }
        
    /* Overlay for darker background */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4); /* Dark overlay */
            z-index: 0; /* Behind the text but above the blurred background */
        }
        
        .site-header h1 {
            font-size: 4rem; /* Adjust size as needed */
            font-weight: 900;
            z-index: 1; /* Make sure the text appears on top of the blurred background */
        }
        
    @media (max-width: 768px) {
        .site-header h1 {
                font-size: 2.5rem; /* Smaller size on smaller screens */
            }
    }
        
    @media (max-width: 576px) {
        .site-header h1 {
                font-size: 2rem; /* Further reduce size on extra small screens */
        }
    }
        
    /* Service Styles */
        .service-circle {
            width: 80px; /* Adjust size as needed */
            height: 80px;
            border-radius: 50%; /* Makes the div a circle */
            background-color: #007bff; /* Circle color */
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto; /* Center the circle */
            transition: background-color 0.3s;
            overflow: hidden; /* Ensures the image fits within the circle */
        }
        
        .service-circle:hover {
            background-color: #0056b3; /* Darker color on hover */
        }
          
        .service-section {
            text-align: center;
            color: #00bfbf;
        }

.service-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    justify-items: center;
    margin-top: 20px;
}

.service-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    font-size: 1rem;
    color: #00bfbf;
}

.service-item i {
    font-size: 2rem;
    margin-bottom: 10px;
}

.service-item p {
    margin: 0;
    font-size: 0.9rem;
    text-align: center;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: #00bfbf;
}

/* Ensure carousel stays within bounds */
#accordionProduct .accordion-collapse {
    overflow: hidden;
}

/* Set max width for carousel */
#serviceCarousel {
    max-width: 100%;
    margin: auto;
}

/* Ensure only the arrows within #serviceCarousel are shown */
.carousel:not(#serviceCarousel) .carousel-control-prev,
.carousel:not(#serviceCarousel) .carousel-control-next {
    display: none;
}

.extra-controls .carousel-control-prev,
.extra-controls .carousel-control-next {
    display: none;
}

/* Default color for the button */
.accordion-button {
    color: #000; /* Set to your preferred default color */
}

/* When the accordion item is expanded (clicked) */
.accordion-button:not(.collapsed) {
    color: #007bff; /* Set to your preferred blue color */
}

/* When the button is focused (clicked) */
.accordion-button:focus {
    color: #007bff; /* Ensure it stays blue when clicked */
    box-shadow: none; /* Optional: remove any outline/focus effect */
}

 /* Adjusting font size to match "About Our Services" title */
 .accordion-item h2 {
        font-size: 1.5rem; /* Adjust this value to match the title size */
    }

    /* Moving the section slightly to the left */
    .faq {
        margin-left: -20px; /* Adjust this value as necessary to shift left */
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
                        <a class="nav-link active" href="faq.php">FAQs</a>
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

    <header class="site-header">
        <h1>
            <span>Frequently Asked</span><br>
            <span>Questions</span>
        </h1>
        <div class="overlay"></div>
    </header>
            
    <section class="faq section-padding" style="background-color: #e5e5ce;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <h2 class="mb-4 text-center">General <span style="color: #C49D19 ;">Information</span></h2>
                <div class="accordion" id="accordionGeneral">
                    <!-- Accordion Item 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionGeneralOne" aria-expanded="true" aria-controls="accordionGeneralOne">
                                <i class="fas fa-info-circle me-2"></i> What is KK MJP Agency?
                            </button>
                        </h2>
                        <div id="accordionGeneralOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionGeneral">
                            <div class="accordion-body">
                                <p><strong>KK MJP Agency</strong> is an insurance agency under the AIA Insurance company.</p>
                                <p>We offer a wide range of insurance, investment, and protection plans.</p>
                            </div>
                        </div>
                    </div>
 
                    <!-- Accordion Item 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionGeneralTwo" aria-expanded="false" aria-controls="accordionGeneralTwo">
                                <i class="fas fa-map-marker-alt me-2"></i> Where is it located?
                            </button>
                        </h2>
                        <div id="accordionGeneralTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionGeneral">
                            <div class="accordion-body">
                                <strong>Our Office</strong><br>
                                Suite 5.01, Level 5 Riverson Block B, AIA BHD, Kota Kinabalu, Malaysia
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mt-5">
                    <h2 class="text-center mb-4">About <span class="text-primary">Our Services</span></h2>
                    <div class="accordion" id="accordionProduct">
                        <!-- Accordion Item 3: Services Offered -->
                        <div class="accordion-item">
                           <h2 class="accordion-header" id="headingThree">
                               <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionProductOne" aria-expanded="false" aria-controls="accordionProductOne">
                                <i class="fas fa-cogs me-2"></i> What services are offered?
                               </button>
                            </h2>
                            <div id="accordionProductOne" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionProduct">
                                <div class="accordion-body">
                                    <div id="serviceCarousel" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <!-- Individual Protection Slide -->
                                            <div class="carousel-item active">
                                                <h5 class="text-center">Individual Protection</h5>
                                                <div class="service-grid">
                                                    <div class="service-item"><i class="fas fa-umbrella"></i><p>Life Insurance</p></div>
                                                    <div class="service-item"><i class="fas fa-medkit"></i><p>Medical Card</p></div>
                                                    <div class="service-item"><i class="fas fa-stethoscope"></i><p>Critical Illness</p></div>
                                                    <div class="service-item"><i class="fas fa-car-crash"></i><p>Personal Accident</p></div>
                                                    <div class="service-item"><i class="fas fa-plane"></i><p>Travel Insurance</p></div>
                                                    <div class="service-item"><i class="fas fa-piggy-bank"></i><p>Retirement</p></div>
                                                    <div class="service-item"><i class="fas fa-graduation-cap"></i><p>Education</p></div>
                                                    <div class="service-item"><i class="fas fa-file-invoice-dollar"></i><p>Estate Planning</p></div>
                                                    <div class="service-item"><i class="fas fa-motorcycle"></i><p>Motor</p></div>
                                                    <div class="service-item"><i class="fas fa-home"></i><p>Home</p></div>
                                                    <div class="service-item"><i class="fas fa-chart-line"></i><p>Wealth Management</p></div>
                                                </div>
                                            </div>
                                            
                                            <!-- Employee Benefits Slide -->
                                            <div class="carousel-item">
                                                <h5 class="text-center">Employee Benefits</h5>
                                                <div class="service-grid">
                                                    <div class="service-item"><i class="fas fa-umbrella"></i><p>Life Insurance</p></div>
                                                    <div class="service-item"><i class="fas fa-medkit"></i><p>Medical Card</p></div>
                                                    <div class="service-item"><i class="fas fa-stethoscope"></i><p>Critical Illness</p></div>
                                                    <div class="service-item"><i class="fas fa-car-crash"></i><p>Personal Accident</p></div>
                                                    <div class="service-item"><i class="fas fa-user-md"></i><p>Outpatient</p></div>
                                                    <div class="service-item"><i class="fas fa-key"></i><p>Keyman</p></div>
                                                    <div class="service-item"><i class="fas fa-building"></i><p>Commercial Insurance</p></div>
                                                    <div class="service-item"><i class="fas fa-briefcase"></i><p>Business Owner</p></div>
                                                </div>
                                            </div>

                                            <!-- Group Protection Slide -->
                                            <div class="carousel-item">
                                                <h5 class="text-center">Group Protection</h5>
                                                <div class="service-grid">
                                                    <div class="service-item"><i class="fas fa-suitcase-rolling"></i><p>By Trip (Short Term)</p></div>
                                                    <div class="service-item"><i class="fas fa-plane-departure"></i><p>Business/Leisure Trip</p></div>
                                                    <div class="service-item"><i class="fas fa-users"></i><p>Association/Religious Bodies</p></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Carousel Controls -->
                                        <button class="carousel-control-prev" type="button" data-bs-target="#serviceCarousel" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#serviceCarousel" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionProductTwo" aria-expanded="false" aria-controls="accordionProductTwo">
                                    <i class="fas fa-question-circle me-2"></i> How do I access the services?
                                </button>
                            </h2>
                            <div id="accordionProductTwo" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionProduct">
                                <div class="accordion-body">
                                    <p>To access our services, simply visit our office or contact us online to schedule a consultation. You can also get in touch with one of our agents who will guide you through the process and help you choose the best plan that suits your needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        </main>

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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>

</body>
</html>
