<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="KK MJP Agency – A leading insurance agency in Kota Kinabalu, Malaysia">
    <meta name="author" content="KK MJP Agency">

    <title>KK MJP Agency</title>

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
      

        /* Header Section Styling */
        .site-header {
            background-image: url('images/aboutus.jpg');
            background-size: 100%; /* Adjust the percentage to control image size */
            background-position: center;
            height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.7);
            position: relative;
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
            font-size: 4rem;
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
            z-index: 0;
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

  /* General Section Styling */
  .products {
            padding: 60px 0;
            background-color: #f4f4f2;
        }

        .intro-section {
            margin-bottom: 30px; /* Reduced margin for intro section */
        }

        .intro-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #333;
            margin-bottom: 20px; /* Reduced margin for intro text */
            text-align: justify;
            font-family: 'Roboto', sans-serif;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #af0d0d;
            margin-bottom: 10px; /* Reduced margin */
            text-transform: uppercase;
            font-family: 'Montserrat', sans-serif;
        }

        .section-subtitle {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 30px; /* Reduced margin */
        }

        .vision-mission-card {
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
        }

        .vision-mission-card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15);
        }

        .vision-logo,
        .mission-logo {
            width: 80px;
            margin-bottom: 15px; /* Reduced margin below images */
        }

        .vision-mission-card h3 {
            font-size: 1.8rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px; /* Reduced margin below headings */
            font-family: 'Roboto', sans-serif;
        }

        .vision-mission-card p {
            font-size: 1rem;
            color: #555;
            line-height: 1.6;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .section-title {
                font-size: 2rem;
            }

            .vision-mission-card {
                padding: 20px;
            }

            .vision-logo,
            .mission-logo {
                width: 60px;
            }

            .vision-mission-card h3 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>

    <!-- Preloader -->
    <section class="preloader">
        <div class="spinner">
            <span class="sk-inner-circle"></span>
        </div>
    </section>

    <main>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg" style="background-color: #af0d0d;">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <strong><span>KKMJP</span> <span style="color: white;">Agency</span></strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" href="about.php">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="team.php">Our Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="faq.php">FAQs</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="application.php">Application</a></li>
                    </ul>
                    <div class="d-none d-lg-block">
                        <a href="sign-in.php" class="bi-person custom-icon me-3"></a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Header Section -->
        <header class="site-header">
            <h1>About Us</h1>
            <div class="overlay"></div>
        </header>

        <!-- Vision & Mission Section -->
<section class="products section-padding" id="vision-mission" style="background-color: #f7f7e6; padding: 60px 20px;">

<div class="container">
    <!-- Intro Section -->
    <div class="intro-section text-center mb-5" style="max-width: 800px; margin: 0 auto;">
        <p class="intro-text" style="font-size: 1.1rem; line-height: 1.8; color: #333;">
            KK MJP Agency is one of the agencies with AIA Berhad, based in Kota Kinabalu, East Malaysia. Led by our Unit Manager, Mr. Michael Jeyaraj Ponniah, we have become a fast-growing agency with a strong focus on customers and valuing people. Our aim is to help individuals prepare for uncertainties and secure their financial and protection needs for a brighter future.
        </p>
        <p class="intro-text" style="font-size: 1.1rem; line-height: 1.8; color: #333;">
            We are nurturing a new generation of agents to ensure they serve the community professionally. We emphasize personal growth by helping our people develop their skills and abilities while discovering new opportunities. We believe that when people are happy, they will pursue their careers with wholehearted enthusiasm and support our business with genuine interest, focused strength, and great ability—ultimately pleasing our customers and keeping them happy.
        </p>
    </div>

    
    <!-- Vision & Mission Title -->
<div class="row justify-content-center text-center mb-5">
    <div class="col-12">
        <h2 class="section-title" style="font-size: 2.5rem; color: #1d3557; font-weight: 700; margin-bottom: 1rem;">
            Our Vision & Mission
        </h2>
        <p class="section-subtitle" style="font-size: 1.2rem; color: #457b9d; max-width: 800px; margin: 0 auto; line-height: 1.8;">
            Guiding our journey towards success and impact.
        </p>
    </div>
</div>


    <!-- Vision and Mission Cards -->
<div class="row justify-content-center">
    <!-- Vision Section -->
    <div class="col-md-6 mb-4 d-flex align-items-stretch">
        <div class="vision-mission-card" style="background: #f0f8ff; padding: 30px; border-radius: 12px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); position: relative; overflow: hidden; display: flex; flex-direction: column; justify-content: center;">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 50%; background: #e6f7ff; transform: skewY(-5deg); transform-origin: top left; z-index: 0;"></div>
            <div style="position: relative; z-index: 1; text-align: center;">
                <img src="images/v.png" alt="Vision Logo" class="vision-logo mb-3" style="max-width: 80px;">
                <h3 style="font-size: 1.8rem; color: #004080;">Vision</h3>
                <p style="font-size: 1rem; color: #004d99; line-height: 1.6;">
                    To be a leader in providing innovative solutions that empower our community and foster sustainable growth.
                </p>
            </div>
        </div>
    </div>

    <!-- Mission Section -->
    <div class="col-md-6 mb-4 d-flex align-items-stretch">
        <div class="vision-mission-card" style="background: #fff8e1; padding: 30px; border-radius: 12px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); position: relative; overflow: hidden; display: flex; flex-direction: column; justify-content: center;">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 50%; background: #ffecd2; transform: skewY(-5deg); transform-origin: top left; z-index: 0;"></div>
            <div style="position: relative; z-index: 1; text-align: center;">
                <img src="images/mimi.png" alt="Mission Logo" class="mission-logo mb-3" style="max-width: 80px;">
                <h3 style="font-size: 1.8rem; color: #cc5200;">Mission</h3>
                <p style="font-size: 1rem; color: #e65c00; line-height: 1.6;">
                    To deliver high-quality services with integrity, passion, and a commitment to excellence, shaping a brighter future for all.
                </p>
            </div>
        </div>
    </div>
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
