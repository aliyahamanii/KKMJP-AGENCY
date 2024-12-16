<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

    <title>KKMJP AGENCY - OUR TEAM MEMBER</title>

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
    .site-header {
    background-image: url('images/ORGA.JPEG'); /* Change to your desired image */
    background-size: cover; /* Ensure the image covers the entire background */
    background-position: center;
    height: 80vh; /* Adjust height as needed */
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.7);
    position: relative;
    text-align: center;
    overflow: hidden;    
    }
        
    .header-image {
    position: absolute; /* Position the image absolutely */
    top: 0; /* Align to the top */
    left: 0; /* Align to the left */
    width: 100%; /* Make the image cover the width */
    height: 100%; /* Make the image cover the height */
    object-fit: cover; /* Cover the entire header area */
    z-index: 0; /* Place the image behind other content */
    }
        
    .header-info {
    position: relative; /* Position relative to the header */
    z-index: 1; /* Bring this above the image */
    text-align: center; /* Center the text */
    color: white; /* Change text color as needed */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Optional text shadow for readability */
    }
        
    .header-info h1 {
    font-size: 4rem; /* Adjust font size as needed */
    margin: 0; /* Remove default margin */
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

    /* Text Styling */
    .site-header h1 {
    font-size: 4rem; /* Adjust size as needed */
    font-weight: 900;
    z-index: 1; /* Make sure the text appears on top of the blurred background */
    }

   /* Overlay effect */
    .site-header .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4); /* Slightly darken the overlay */
    z-index: 0; /* Behind the text but above the blurred background */
    }

    .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4); /* Adjust if needed */
    z-index: 0; /* This should be below the button */
    }

    button {
    pointer-events: auto;
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

   .team-thumb {
    display: flex;
    align-items: center;
    }

    .team-image {
    width: 250px; /* Adjust to your desired size */
    height: 10px; /* Ensure it matches width for circular shape */
    border-radius: 15px; /* Makes the image circular */
    object-fit: cover; /* Ensures the image scales proportionally */
    border: 1px solid #ccc; /* Optional border for aesthetics */
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
                            <a class="nav-link active" href="team.php">Our Team</a>
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

        <header class="site-header">
            <h1>
                <span>Our</span><br>
                <span>Organization</span>
            </h1>
            <div class="overlay"></div>
        </header>
            
        <section class="team section-padding" style="background-color: #e5e5ce;">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="mb-5">Meet our <span>team</span></h2>
                    </div>

                    <!-- First Row: Manager (Centered) -->
                        <div class="row justify-content-center">
                        <!-- Team Member 1 - Manager -->
                            <div class="col-lg-4 col-md-6 mb-4 text-center">
                                <div class="team-thumb d-flex align-items-center bg-white border shadow-sm rounded-3 p-4">
                                    <img src="images/people/michael.jpg" class="img-fluid custom-circle-image team-image me-3" alt="Michael">
                                        <div class="team-info">
                                            <h5 class="mb-1 text-dark">Michael J Ponniah</h5>
                                                <strong class="text-muted d-block">Manager</strong>
                                                    <button type="button" class="btn btn-danger btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#modalMichael">
                                                        <i class="bi-plus-circle-fill"></i> More Info
                                                    </button>
                                        </div>
                                </div>
                            </div>
                        </div>

                    <!-- Team Member 2 -->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="team-thumb d-flex align-items-center bg-white border shadow-sm rounded-3 p-4">
                                    <img src="images/people/jenny.jpg" class="img-fluid custom-circle-image team-image me-3" alt="Jenny">
                                        <div class="team-info">
                                            <h5 class="mb-1 text-dark">Jenny</h5>
                                                <strong class="text-muted d-block">Insurance Agent</strong>
                                                    <button type="button" class="btn btn-danger btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#modalJenny">
                                                        <i class="bi-plus-circle-fill"></i> More Info
                                                    </button>
                                        </div>
                                </div>
                            </div>

                    <!-- Team Member 3 -->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="team-thumb d-flex align-items-center bg-white border shadow-sm rounded-3 p-4">
                                    <img src="images/people/amirul.jpg" class="img-fluid custom-circle-image team-image me-4" alt="Amirul">
                                        <div class="team-info">
                                            <h5 class="mb-1 text-dark">Amirul</h5>
                                                <strong class="text-muted d-block">Insurance Agent</strong>
                                                    <button type="button" class="btn btn-danger btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#modalAmirul">
                                                        <i class="bi-plus-circle-fill"></i> More Info
                                                    </button>
                                        </div>
                                </div>
                            </div>

                    <!-- Team Member 4 -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="team-thumb d-flex align-items-center bg-white border shadow-sm rounded-3 p-4">
                                <img src="images/people/alnie.jpg" class="img-fluid custom-circle-image team-image me-3" alt="Alnie">
                                    <div class="team-info">
                                        <h5 class="mb-1 text-dark">Alnie</h5>
                                            <strong class="text-muted d-block">Insurance Agent</strong>
                                                <button type="button" class="btn btn-danger btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#modalAlnie">
                                                    <i class="bi-plus-circle-fill"></i> More Info
                                                </button>
                                    </div>
                            </div>
                        </div>

                     <!-- Team Member 5 -->
                     <div class="col-lg-4 col-md-6 mb-4">
                                <div class="team-thumb d-flex align-items-center bg-white border shadow-sm rounded-3 p-4">
                                    <img src="images/people/syahin.jpg" class="img-fluid custom-circle-image team-image me-3" alt="Syahin">
                                        <div class="team-info">
                                            <h5 class="mb-1 text-dark">Syahin Wazien</h5>
                                                <strong class="text-muted d-block">Insurance Agent</strong>
                                                    <button type="button" class="btn btn-danger btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#modalSyahin">
                                                        <i class="bi-plus-circle-fill"></i> More Info
                                                    </button>
                                        </div>
                                </div>
                            </div>


                    <!-- Team Member 6 -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="team-thumb d-flex align-items-center bg-white border shadow-sm rounded-3 p-4">
                                <img src="images/team/farah.jpg" class="img-fluid custom-circle-image team-image me-3" alt="Farah">
                                    <div class="team-info">
                                        <h5 class="mb-1 text-dark">Farah Dior</h5>
                                            <strong class="text-muted d-block">Insurance Agent</strong>
                                                <button type="button" class="btn btn-danger btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#modalFarah">
                                                    <i class="bi-plus-circle-fill"></i> More Info
                                                </button>
                                    </div>
                            </div>
                        </div>

                    <!-- Team Member 7 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                            <div class="team-thumb d-flex align-items-center bg-white border shadow-sm rounded-3 p-4">
                                <img src="images/team/amanis.jpg" class="img-fluid custom-circle-image team-image me-3" alt="Aliyah">
                                    <div class="team-info">
                                        <h5 class="mb-1 text-dark">Aliyah Amani</h5>
                                            <strong class="text-muted d-block">Internship Student</strong>
                                                <button type="button" class="btn btn-danger btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#modalAliyah">
                                                    <i class="bi-plus-circle-fill"></i> More Info
                                                </button>
                                    </div>
                            </div>
                        </div>

                    <!-- Team Member 8 -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="team-thumb d-flex align-items-center bg-white border shadow-sm rounded-3 p-4">
                                <img src="images/team/siti.jpg" class="img-fluid custom-circle-image team-image me-3" alt="Siti">
                                    <div class="team-info">
                                        <h5 class="mb-1 text-dark">Siti Aisyah</h5>
                                            <strong class="text-muted d-block">Internship Student</strong>
                                                <button type="button" class="btn btn-danger btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#modalSiti">
                                                    <i class="bi-plus-circle-fill"></i> More Info
                                                </button>
                                    </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>


<!-- Modal Templates -->

<!-- Modal for Michael -->
<div class="modal fade" id="modalMichael" tabindex="-1" aria-labelledby="modalMichaelLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"> <!-- Larger size for professional look -->
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex align-items-center">
                    <img src="images/team/michael.jpg" alt="Michael" 
                        class="rounded-circle border shadow-sm me-3" 
                        style="width: 100px; height: 100px; object-fit: cover;">
                    <div>
                        <h5 class="modal-title mb-0" id="modalMichaelLabel">Michael</h5>
                        <small class="text-muted">Manager </small>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6 class="fw-bold">Position:</h6>
                <p>Manager - KK MJP Insurance Agency</p>

                <h6 class="fw-bold">Experience:</h6>
                <p>With over 10 years of experience in the insurance industry, Michael has built a strong foundation in both operations and client relationships.</p>

                <h6 class="fw-bold">About Michael:</h6>
                <p>
                    Michael is a seasoned professional in the insurance sector, responsible for overseeing the daily operations of our agency. 
                    He plays a pivotal role in ensuring that the team delivers exceptional service to clients and maintains smooth operations.
                    With his extensive expertise, Michael is dedicated to driving business growth and ensuring that all client needs are met with professionalism and care.
                </p>

                <h6 class="fw-bold">Responsibilities:</h6>
                <ul>
                    <li>Manage the day-to-day operations of the insurance agency</li>
                    <li>Oversee client relations and ensure excellent service delivery</li>
                    <li>Develop and implement business strategies to drive growth</li>
                    <li>Supervise and guide the team to achieve organizational goals</li>
                </ul>
            </div>
            <div class="modal-footer">
                <small class="text-muted">Michael's leadership ensures our agency continues to provide top-tier service to clients.</small>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Jenny -->
<div class="modal fade" id="modalJenny" tabindex="-1" aria-labelledby="modalJennyLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"> <!-- Larger size for professional look -->
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex align-items-center">
                    <img src="images/team/jenny.jpg" alt="Jenny" 
                        class="rounded-circle border shadow-sm me-3" 
                        style="width: 100px; height: 100px; object-fit: cover;">
                    <div>
                        <h5 class="modal-title mb-0" id="modalJennyLabel">Jenny</h5>
                        <small class="text-muted">Experienced Agent</small>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6 class="fw-bold">Position:</h6>
                <p>Senior Insurance Agent - Insurance Advisory</p>

                <h6 class="fw-bold">Years of Experience:</h6>
                <p>7+ years in the insurance industry</p>

                <h6 class="fw-bold">About Jenny:</h6>
                <p>
                    Jenny is one of our most experienced agents, known for her dedication, knowledge, and personalized approach 
                    to insurance advisory. Over the years, she has built strong relationships with clients and played a key role 
                    in helping them choose the best insurance plans tailored to their needs.
                </p>

                <h6 class="fw-bold">Responsibilities:</h6>
                <ul>
                    <li>Provide expert guidance on insurance plans and policies</li>
                    <li>Maintain long-term relationships with clients</li>
                    <li>Assist clients in navigating complex insurance decisions</li>
                    <li>Collaborate with the team to improve customer experience</li>
                </ul>
            </div>
            <div class="modal-footer">
                <small class="text-muted">Jenny’s experience and expertise continue to be a vital asset to our team and our clients.</small>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Amirul -->
<div class="modal fade" id="modalAmirul" tabindex="-1" aria-labelledby="modalAmirulLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"> <!-- Larger size for professional look -->
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex align-items-center">
                    <img src="images/team/amirul.jpg" alt="Amirul" 
                        class="rounded-circle border shadow-sm me-3" 
                        style="width: 100px; height: 100px; object-fit: cover;">
                    <div>
                        <h5 class="modal-title mb-0" id="modalAmirulLabel">Amirul</h5>
                        <small class="text-muted">Dedicated Agent</small>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6 class="fw-bold">Position:</h6>
                <p>Insurance Agent - Customer Support and Claims Assistance</p>

                <h6 class="fw-bold">Years of Experience:</h6>
                <p>5+ years in the insurance industry</p>

                <h6 class="fw-bold">About Amirul:</h6>
                <p>
                    Amirul is a dedicated agent with a strong focus on customer satisfaction. Known for his patience and 
                    problem-solving skills, Amirul ensures that clients receive the support they need, especially when it 
                    comes to navigating insurance claims and understanding policy details.
                </p>

                <h6 class="fw-bold">Responsibilities:</h6>
                <ul>
                    <li>Provide support to clients during the claims process</li>
                    <li>Answer inquiries related to insurance coverage and benefits</li>
                    <li>Guide clients in selecting suitable insurance plans</li>
                    <li>Collaborate with team members to improve customer service</li>
                </ul>
            </div>
            <div class="modal-footer">
                <small class="text-muted">Amirul's calm and composed approach makes him a trusted guide for clients seeking support and clarity.</small>
            </div>
        </div>
    </div>
</div>


<!-- Modal for Alnie -->
<div class="modal fade" id="modalAlnie" tabindex="-1" aria-labelledby="modalAlnieLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"> <!-- Larger size for professional look -->
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex align-items-center">
                    <img src="images/team/alnie.jpg" alt="Alnie" 
                        class="rounded-circle border shadow-sm me-3" 
                        style="width: 100px; height: 100px; object-fit: cover;">
                    <div>
                        <h5 class="modal-title mb-0" id="modalAlnieLabel">Alnie</h5>
                        <small class="text-muted">Experienced Agent</small>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6 class="fw-bold">Position:</h6>
                <p>Insurance Agent - Client Advisory and Policy Management</p>

                <h6 class="fw-bold">Years of Experience:</h6>
                <p>6+ years in the insurance industry</p>

                <h6 class="fw-bold">About Alnie:</h6>
                <p>
                    Alnie is a skilled agent who specializes in guiding clients through policy options and ensuring they 
                    select the most appropriate plans. Her expertise in policy management allows her to provide clients 
                    with clear explanations and reliable advice, fostering lasting trust and confidence.
                </p>

                <h6 class="fw-bold">Responsibilities:</h6>
                <ul>
                    <li>Consult with clients on insurance policy selection</li>
                    <li>Provide clear and detailed policy explanations</li>
                    <li>Support clients with renewals and policy updates</li>
                    <li>Act as a liaison between clients and insurance providers</li>
                </ul>
            </div>
            <div class="modal-footer">
                <small class="text-muted">Alnie’s dedication to clarity and transparency makes her a valuable resource for clients seeking peace of mind.</small>
            </div>
        </div>
    </div>
</div>


<!-- Modal for Syahin -->
<div class="modal fade" id="modalSyahin" tabindex="-1" aria-labelledby="modalSyahinLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"> <!-- Larger size for professional look -->
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex align-items-center">
                    <img src="images/team/syahin.jpg" alt="Syahin Wazien" 
                        class="rounded-circle border shadow-sm me-3" 
                        style="width: 100px; height: 100px; object-fit: cover;">
                    <div>
                        <h5 class="modal-title mb-0" id="modalSyahinLabel">Syahin Wazien</h5>
                        <small class="text-muted">Newest Agent</small>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6 class="fw-bold">Position:</h6>
                <p>Insurance Agent - Client Advisory and Insurance Planning</p>

                <h6 class="fw-bold">Joining Date:</h6>
                <p>28th November 2024</p>

                <h6 class="fw-bold">About Syahin:</h6>
                <p>
                    Syahin Wazien is one of the newest members of our team, joining us as an Agent specializing in Client 
                    Advisory and Insurance Planning. With a passion for helping clients make informed decisions, Syahin is 
                    committed to providing tailored guidance and support to meet each client's unique needs.
                </p>

                <h6 class="fw-bold">Responsibilities:</h6>
                <ul>
                    <li>Provide personalized insurance guidance to clients</li>
                    <li>Support clients in selecting the most suitable insurance plans</li>
                    <li>Offer advice on insurance planning and coverage options</li>
                    <li>Collaborate with the team to enhance client satisfaction</li>
                </ul>
            </div>
            <div class="modal-footer">
                <small class="text-muted">We are excited to welcome Syahin to our team and look forward to seeing his positive impact on our clients!</small>
            </div>
        </div>
    </div>
</div>


<!-- Modal for Farah -->
<div class="modal fade" id="modalFarah" tabindex="-1" aria-labelledby="modalFarahLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"> <!-- Larger size for professional look -->
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex align-items-center">
                    <img src="images/team/farah.jpg" alt="Farah Dior" 
                        class="rounded-circle border shadow-sm me-3" 
                        style="width: 100px; height: 100px; object-fit: cover;">
                    <div>
                        <h5 class="modal-title mb-0" id="modalFarahLabel">Farah Dior</h5>
                        <small class="text-muted">Newest Agent</small>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6 class="fw-bold">Position:</h6>
                <p>Insurance Agent - Sales and Customer Support</p>

                <h6 class="fw-bold">Joining Date:</h6>
                <p>28th November 2024</p>

                <h6 class="fw-bold">About Farah:</h6>
                <p>
                    Farah Dior is the newest member of our team, joining us as an Agent in Sales and Customer Support. With a strong 
                    background in customer service and sales, Farah brings fresh perspectives and is eager to contribute to the growth 
                    of our company.
                </p>

                <h6 class="fw-bold">Responsibilities:</h6>
                <ul>
                    <li>Assist in sales and customer support</li>
                    <li>Manage customer inquiries and provide timely solutions</li>
                    <li>Support sales strategies and business development</li>
                    <li>Collaborate with the team to meet organizational goals</li>
                </ul>
            </div>
            <div class="modal-footer">
                <small class="text-muted">We are excited to welcome Farah to our team and look forward to her contributions!</small>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Aliyah -->
<div class="modal fade" id="modalAliyah" tabindex="-1" aria-labelledby="modalAliyahLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"> <!-- Larger size for professional look -->
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex align-items-center">
                    <img src="images/team/amanis.jpg" alt="Aliyah Amani" 
                        class="rounded-circle border shadow-sm me-3" 
                        style="width: 100px; height: 100px; object-fit: cover;">
                    <div>
                        <h5 class="modal-title mb-0" id="modalAliyahLabel">Aliyah Amani</h5>
                        <small class="text-muted">Intern - IT & Multimedia</small>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6 class="fw-bold">Position:</h6>
                <p>IT & Multimedia and Administrative Support</p>

                <h6 class="fw-bold">Duration:</h6>
                <p>9th September 2024 to 21st February 2025</p>

                <h6 class="fw-bold">About Aliyah:</h6>
                <p>
                    Aliyah Amani is a Computer Science diploma student at <strong>Universiti Teknologi MARA (UiTM)</strong>, Kota Kinabalu. 
                    She is currently joining our team for a six-month internship as part of her academic program. Aliyah’s key responsibilities 
                    include handling IT and multimedia tasks, managing social media content, and providing administrative support for the team.
                </p>

                <h6 class="fw-bold">Responsibilities:</h6>
                <ul>
                    <li>Manage IT-related tasks and systems</li>
                    <li>Assist with multimedia content creation and management</li>
                    <li>Support social media strategy and content production</li>
                    <li>Provide general administrative support to the team</li>
                </ul>
            </div>
            <div class="modal-footer">
                <small class="text-muted">We look forward to Aliyah's contributions during her internship.</small>
            </div>
        </div>
    </div>
</div>


<!-- Modal for Siti -->
<div class="modal fade" id="modalSiti" tabindex="-1" aria-labelledby="modalSitiLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"> <!-- Larger size for professional look -->
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex align-items-center">
                    <img src="images/team/siti.jpg" alt="Siti Aisyah" 
                        class="rounded-circle border shadow-sm me-3" 
                        style="width: 100px; height: 100px; object-fit: cover;">
                    <div>
                        <h5 class="modal-title mb-0" id="modalSitiLabel">Siti Aisyah</h5>
                        <small class="text-muted">Social Media Specialist</small>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6 class="fw-bold">Position:</h6>
                <p>Social Media Specialist</p>

                <h6 class="fw-bold">Duration:</h6>
                <p>Until January 2025</p>

                <h6 class="fw-bold">About Siti:</h6>
                <p>
                    Siti Aisyah is a graduate in <strong>English Language and Literature</strong> from <strong>International Islamic University Malaysia (IIUM)</strong>. 
                    She is focused on enhancing the company’s social media presence. From now until January 2025, Siti will be creating engaging content such as videos and posters to elevate our brand’s online presence and keep the content fresh and engaging.
                </p>

                <h6 class="fw-bold">Responsibilities:</h6>
                <ul>
                    <li>Develop and manage social media content</li>
                    <li>Create engaging videos and vibrant posters</li>
                    <li>Support content strategies to increase audience engagement</li>
                    <li>Maintain and improve brand presence across platforms</li>
                </ul>
            </div>
            <div class="modal-footer">
                <small class="text-muted">We are excited to have Siti onboard to enhance our social media presence.</small>
            </div>
        </div>
    </div>
</div>


<script>
    function showSlide(slideNumber) {
        // Hide all slides
            document.querySelectorAll('.testimonial-slide').forEach(function(slide) {
                slide.style.display = 'none';
            });
            
        // Show the selected slide
            document.getElementById('testimonial' + slideNumber).style.display = 'block';
            }
            
        // Show the first slide by default
            showSlide(1);
</script>
            

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
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>