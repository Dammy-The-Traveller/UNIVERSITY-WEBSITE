<?php require 'partials/head.php' ?>
<?php require 'partials/header.php' ?>
<?php require 'partials/nav.php'; ?>
    
        <!-- Start Search Modal -->
        <div class="modal fade searchModal" id="searchModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form class="position-relative">
                        <input type="text" class="input-search d-block w-100 bg-transparent" placeholder="Search here....">
                        <button type="submit" class="border-0 p-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <g clip-path="url(#clip0_12_4315)">
                                    <path d="M11 2C15.968 2 20 6.032 20 11C20 15.968 15.968 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2ZM11 18C14.867 18 18 14.867 18 11C18 7.132 14.867 4 11 4C7.132 4 4 7.132 4 11C4 14.867 7.132 18 11 18ZM19.485 18.071L22.314 20.899L20.899 22.314L18.071 19.485L19.485 18.071Z" fill="white"/>
                                </g>
                            </svg>
                        </button>
                    </form>
                    <button type="button" class="btn-close rounded-0 p-0 w-auto h-auto" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ri-close-fill"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- End Search Modal -->
        
        <?php require 'partials/Responsive.Navbar.php'; ?>
   
        <!-- Start Hero Area -->
        <div class="hero-area">
            <div class="container-fluid" data-cues="slideInUp">
                <div class="hero-content">
                    <div class="title">
                        <h1>The university of the future</h1>
                        <p> We are ranked the top private university in Ghana by the Ghana Tertiary Awards. Find out what makes our student experience so rich, meaningful and life-changing.</p>
                    </div>
                    <ul class="list-unstyled ps-0 mb-0 hero-btn">
                        <li class="d-inline-block">
                            <a class="text-decoration-none default-btn" href="/index.php/Instant-Online-Reg.php">
                                Apply Now
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </li>
                        <li class="d-inline-block">
                            <a class="text-decoration-none arrow-btn" href="/index.php/All-Programs.php">
                                View Our Programs
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="hero-reviews">
                    <p class="everything">“Everything that I learned at AIT University really helped put me above the competition”.</p>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="user d-flex align-items-center">
                            <div class="image">
                                <img src="assets/img/hero/hero-1.jpg" alt="hero-user">
                            </div>
                            <div class="content">
                                <h6>John Smith</h6>
                                <span>Ait student</span>
                            </div>
                        </div>
                        <div class="quote-icon">
                            <i class="flaticon-quote"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Hero Area -->

        <!-- Start About Area -->
        <div class="about-area pt-100 pb-75">
            <div class="container">
                <div class="row align-items-center" data-cues="slideInUp">
                    <div class="col-lg-6">
                        <div class="about-image">
                            <img src="assets/img/about/about-1.jpg" alt="about-image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="title">
                                <h2 class="d-flex align-items-center">
                                    About Ait University
                                </h2>
                                <p>The Accra Institute of Technology (AIT) is a technology-driven private university, accredited by the Ghana Tertiary Education Commission.
                                    The university is modeled on internationally renowned institutes of technology like the Massachusetts Institute of Technology (MIT) and the California institute of Technology (CALTECH) – both universities are consistently ranked in the top ten of the global rankings of universities worldwide.
                                    AIT is ranked the top private university in Ghana by the Ghana Tertiary Awards. The university also received the Best Technology University in Ghana Award for a number of years. AIT is equally a leading research university in Ghana with over 250 enrolled on its PhD programs.
                                    AIT operates both campus-based and online (open university) systems at both the undergraduate and the postgraduate (graduate) levels. and it is credited with pioneering open university education in Ghana and in the West Africa sub-region.</p>
                            </div>
                            <a class="text-decoration-none arrow-btn" href="/index.php/about.php">
                                About Us
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Area -->

        <!-- Start Graduets Area -->
        <div class="graduets-area pb-75">
            <div class="container">
                <div class="section-title text-center m-auto" data-cues="slideInUp">
                    <h2>Postgraduates, Undergraduate And Online Education</h2>
                </div>
                <div class="graduets-tab-info">
                    <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Postgraduates Programs</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Undergraduates Programs</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Online Education</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="row align-items-center">
                                <div class="col-xl-6">
                                    <div class="graduets-content">
                                        <div class="graduets-card d-flex align-items-center">
                                            <div class="image">
                                                <img src="assets/img/graduets/graduets-1.jpg" alt="graduets-image">
                                            </div>
                                            <div class="content">
                                                <h6>Master Of Business Administration</h6>
                                                <p>Business media refers to various forms  media, including print, and digital platforms in media.</p>
                                                <a class="text-decoration-none arrow-btn" href="/index.php/All-Programs.php">
                                                    Know More
                                                    <i class="flaticon-right-arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="graduets-card d-flex align-items-center">
                                            <div class="image">
                                                <img src="assets/img/graduets/graduets-2.jpg" alt="graduets-image">
                                            </div>
                                            <div class="content">
                                                <h6>Master Of Information Technology</h6>
                                                <p>Economics is a social science that studies how individuals, businesses, governments etc...</p>
                                                <a class="text-decoration-none arrow-btn" href="/index.php/All-Programs.php">
                                                    Know More
                                                    <i class="flaticon-right-arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="graduets-card d-flex align-items-center">
                                            <div class="image">
                                                <img src="assets/img/graduets/graduets-3.jpg" alt="graduets-image">
                                            </div>
                                            <div class="content">
                                                <h6>Doctor Of Education</h6>
                                                <p>Biochemistry is the branch of science that combine the principles of biology & chemistry.</p>
                                                <a class="text-decoration-none arrow-btn" href="/index.php/All-Programs.php">
                                                    Know More
                                                    <i class="flaticon-right-arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="graduets-image">
                                        <div class="image">
                                            <img src="assets/img/graduets/graduets-4.jpg" alt="graduets-image">
                                        </div>
                                        <div class="row align-items-center" data-cues="slideInUp">
                                            <div class="col-lg-6 col-sm-6 col-md-6">
                                                <div class="graduets-counter">
                                                    <h2 class="d-flex align-items-center">
                                                        <img src="assets/img/graduets/graduets-5.svg" alt="graduets-svg">
                                                        <span class="counter">124</span>
                                                        +
                                                    </h2>
                                                    <p>Our Postgraduates programs</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-md-6">
                                                <div class="graduets-btn text-end">
                                                    <a class="text-decoration-none arrow-btn" href="/index.php/All-Programs.php">
                                                        More Postgraduates Programs
                                                        <i class="flaticon-right-arrow"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            <div class="row align-items-center">
                                <div class="col-xl-6">
                                    <div class="graduets-content">
                                        <div class="graduets-card d-flex align-items-center">
                                            <div class="image">
                                                <img src="assets/img/graduets/graduets-9.jpg" alt="graduets-image">
                                            </div>
                                            <div class="content">
                                                <h6>Marketing and Information Technology</h6>
                                                <p>Business media refers to various forms  media, including print, and digital platforms in media.</p>
                                                <a class="text-decoration-none arrow-btn" href="/index.php/All-Programs.php">
                                                    Know More
                                                    <i class="flaticon-right-arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="graduets-card d-flex align-items-center">
                                            <div class="image">
                                                <img src="assets/img/graduets/graduets-8.jpg" alt="graduets-image">
                                            </div>
                                            <div class="content">
                                                <h6>Information Technology (IT) (Web Dev. & Engineering)</h6>
                                                <p>Economics is a social science that studies how individuals, businesses, governments etc...</p>
                                                <a class="text-decoration-none arrow-btn" href="/index.php/All-Programs.php">
                                                    Know More
                                                    <i class="flaticon-right-arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="graduets-card d-flex align-items-center">
                                            <div class="image">
                                                <img src="assets/img/graduets/graduets-10.jpg" alt="graduets-image">
                                            </div>
                                            <div class="content">
                                                <h6> Hospitality Management</h6>
                                                <p>Biochemistry is the branch of science that combine the principles of biology & chemistry.</p>
                                                <a class="text-decoration-none arrow-btn" href="/index.php/All-Programs.php">
                                                    Know More
                                                    <i class="flaticon-right-arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="graduets-image">
                                        <div class="image">
                                            <img src="assets/img/graduets/graduets-6.jpg" alt="graduets-image">
                                        </div>
                                        <div class="row align-items-center" data-cues="slideInUp">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="graduets-counter">
                                                    <h2 class="d-flex align-items-center">
                                                        <img src="assets/img/graduets/graduets-5.svg" alt="graduets-svg">
                                                        <span class="counter">140</span>
                                                        +
                                                    </h2>
                                                    <p>Our Undergraduates programs</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="graduets-btn text-end">
                                                    <a class="text-decoration-none arrow-btn" href="/index.php/All-Programs.php">
                                                        More Undergraduates Programs
                                                        <i class="flaticon-right-arrow"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                            <div class="row align-items-center">
                                <div class="col-xl-6">
                                    <div class="graduets-content">
                                        <div class="graduets-card d-flex align-items-center">
                                            <div class="image">
                                                <img src="assets/img/graduets/graduets-13.jpg" alt="graduets-image">
                                            </div>
                                            <div class="content">
                                                <h6>Master of Business Administration (MBA)</h6>
                                                <p>Business media refers to various forms  media, including print, and digital platforms in media.</p>
                                                <a class="text-decoration-none arrow-btn" href="/index.php/All-Programs.php">
                                                    Know More
                                                    <i class="flaticon-right-arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="graduets-card d-flex align-items-center">
                                            <div class="image">
                                                <img src="assets/img/graduets/graduets-11.jpg" alt="graduets-image">
                                            </div>
                                            <div class="content">
                                                <h6>Master of Information Technology</h6>
                                                <p>Economics is a social science that studies how individuals, businesses, governments etc...</p>
                                                <a class="text-decoration-none arrow-btn" href="/index.php/All-Programs.php">
                                                    Know More
                                                    <i class="flaticon-right-arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="graduets-card d-flex align-items-center">
                                            <div class="image">
                                                <img src="assets/img/graduets/graduets-12.jpg" alt="graduets-image">
                                            </div>
                                            <div class="content">
                                                <h6>MSc (Science)</h6>
                                                <p>Biochemistry is the branch of science that combine the principles of biology & chemistry.</p>
                                                <a class="text-decoration-none arrow-btn" href="/index.php/All-Programs.php">
                                                    Know More
                                                    <i class="flaticon-right-arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="graduets-image">
                                        <div class="image">
                                            <img src="assets/img/graduets/graduets-7.jpg" alt="graduets-image">
                                        </div>
                                        <div class="row align-items-center" data-cues="slideInUp">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="graduets-counter">
                                                    <h2 class="d-flex align-items-center">
                                                        <img src="assets/img/graduets/graduets-5.svg" alt="graduets-svg">
                                                        <span class="counter">140</span>
                                                        +
                                                    </h2>
                                                    <p>Our Online programs</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="graduets-btn text-end">
                                                    <a class="text-decoration-none arrow-btn" href="/index.php/All-Programs.php">
                                                        More Online Programs
                                                        <i class="flaticon-right-arrow"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Graduets Area -->

        <!-- Start Funfact Area -->
        <div class="funfact-area pb-75">
            <div class="container">
                <div class="row g-0 justify-content-center" data-cues="slideInUp">
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="single-funfact-info text-center">
                            <h2 class="d-flex align-items-center justify-content-center">
                                <i class="flaticon-mortarboard"></i>
                                <span class="counter">124</span>
                                +
                            </h2>
                            <p>We Have online Programs</p>
                            <a class="text-decoration-none arrow-btn" href="/index.php/All-Programs.php">
                                Know More
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="single-funfact-info text-center">
                            <h2 class="d-flex align-items-center justify-content-center">
                                <i class="flaticon-book"></i>
                                <span class="counter">392</span>
                                +
                            </h2>
                            <p>We have the best Courses</p>
                            <a class="text-decoration-none arrow-btn" href="/index.php/All-Programs.php">
                                Know More
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="single-funfact-info text-center">
                            <h2 class="d-flex align-items-center justify-content-center">
                                <i class="flaticon-graduate"></i>
                                <span class="counter">865</span>
                                +
                            </h2>
                            <p>Ait Has Professional Lecturers</p>
                            <a class="text-decoration-none arrow-btn" href="/index.php/All-Programs.php">
                                Know More
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Funfact Area -->

        <!-- Start Apply Area -->
        <div class="apply-area pt-100 pb-75">
            <div class="container">
                <div class="row align-items-center" data-cues="slideInUp">
                    <div class="col-lg-6">
                        <div class="apply-image">
                            <div class="image">
                                <img src="assets/img/apply/apply-1.jpg" alt="apply-image">
                            </div>
                            <div class="user-help d-flex align-items-center">
                                <a class="icon text-decoration-none" href="tel:+233577668817">
                                    <i class="ri-phone-line"></i>
                                </a>
                                <div class="content">
                                    <span>For Help</span>
                                    <a class="text-decoration-none d-block" href="tel:+233577668817">
                                        +233 57 766 8817 
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="apply-content">
                            <div class="title">
                                <h2>How To Apply At Ait</h2>
                            </div>
                            <div class="apply-content-card d-flex">
                                <div class="icon">
                                    <i class="flaticon-writing"></i>
                                </div>
                                <div class="content">
                                    <h3>
                                        <span>01.</span>
                                       Download and Complete Application Form
                                    </h3>
                                    <p>Download the Printable Version of the Application Form. Print and Complete it.</p>
                                </div>
                            </div>
                            <div class="apply-content-card d-flex">
                                <div class="icon">
                                    <i class=" flaticon-loan"></i>
                                </div>
                                <div class="content">
                                    <h3>
                                        <span>02.</span>
                                       Payment Of Fees
                                    </h3>
                                    <p>Go to any branch of Ecobank in your country and Pay-in Your Application Processing Fee (Our Bank details and the Fees are on the Application Form). </p>
                                </div>
                            </div>
                            <div class="apply-content-card mb-0 border-bottom-0 d-flex">
                                <div class="icon">
                                    <i class="flaticon-search-3"></i>
                                </div>
                                <div class="content">
                                    <h3>
                                        <span>03.</span>
                                        Application Submission
                                    </h3>
                                    <p>Send the Completed Form and a photocopy of the pay-in (cash deposit) slip to us by post or by registered mail.</p>
                                </div>
                            </div>
                            <ul class="list-unstyled ps-0 mb-0 apply-btn">
                                <li class="d-inline-block">
                                    <a class="text-decoration-none default-btn" href="/index.php/Application-Form.php">
                                        Application Form
                                        <i class="flaticon-right-arrow"></i>
                                    </a>
                                </li>
                                <li class="d-inline-block">
                                    <ul class="list-unstyled d-flex align-items-center ps-0 mb-0 play-btn">
                                        <!-- <li>
                                            <a class="text-decoration-none icon" data-fslightbox="gallery" href="https://www.youtube.com/watch?v=3nQNiWdeH2Q">
                                                <i class="ri-play-mini-fill"></i>
                                            </a>
                                        </li> -->
                                        <li> 
                                            <a class="text-decoration-none arrow-btn" data-fslightbox="gallery" href="/index.php/International-Applicants.php">
                                                See How To Apply
                                                <i class="flaticon-right-arrow"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Apply Area -->

        <!-- Start Events Area -->
        <div class="events-area pb-75">
            <div class="container">
                <div class="section-title text-center m-auto" data-cues="slideInUp">
                    <h2>Events</h2>
                </div>
                <div class="row justify-content-center" data-cues="slideInUp">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-events-card">
                            <a class="text-decoration-none d-block image" href="/index.php/News&events.php">
                                <img src="assets/img/events/events-1.jpg" alt="events-image" >
                            </a>
                            <div class="content d-flex align-items-top">
                                <div class="date">
                                    <h2>5</h2>
                                    <span>March</span>
                                </div>
                                <div class="title">
                                    <h3>
                                        <a class="text-decoration-none " href="/index.php/News&events.php">The IRIC</a>
                                    </h3>
                                    <span class="d-flex align-items-center">
                                        <i class="ri-calendar-line"></i>
                                        12:00 PM - 02:00 PM
                                    </span>
                                    <span class="d-flex align-items-center">
                                        <i class="ri-map-pin-line"></i>
                                        Accra Institute of Technology University Tower Seaview Campus, Weija P.O. Box AN-19782, Accra-North, Ghana 
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-events-card">
                            <a class="text-decoration-none d-block image" href="/index.php/News&events.php">
                                <img src="assets/img/events/events-2.jpg" alt="events-image">
                            </a>
                            <div class="content d-flex align-items-top">
                                <div class="date">
                                    <h2>26</h2>
                                    <span>Jan</span>
                                </div>
                                <div class="title">
                                    <h3>
                                        <a class="text-decoration-none" href="/index.php/News&events.php">KNUST Officials’ Week-Long Visit to Affiliate Institutions, Including AIT in Greater Accra Region.</a>
                                    </h3>
                                   
                                    <span class="d-flex align-items-center">
                                        <i class="ri-map-pin-line"></i>
                                        Accra Institute of Technology University Tower Seaview Campus, Weija Accra-North, Ghana
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-events-card">
                            <a class="text-decoration-none d-block image" href="/index.php/News&events.php">
                                <img src="assets/img/events/events-3.png" alt="events-image">
                            </a>
                            <div class="content d-flex align-items-top">
                                <div class="date">
                                    <h2>14</h2>
                                    <span>apr</span>
                                </div>
                                <div class="title">
                                    <h3>
                                        <a class="text-decoration-none" href="/index.php/News&events.php">GOOGLE DEVELOPER STUDENTS CLUBS (GDSC)</a>
                                    </h3>
                                    <span class="d-flex align-items-center">
                                        <i class="ri-map-pin-line"></i>
                                        Accra Institute of Technology University Tower Seaview Campus, Weija P.O. Box AN-19782, Accra-North, Ghana
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Events Area -->

    

        <!-- Start Facilities Area -->
        <div class="facilities-area pb-75">
            <div class="container">
                <div class="row align-items-center" data-cues="slideInUp">
                    <div class="col-lg-6">
                        <div class="facilities-content">
                            <div class="title">
                                <h2>Our Campus Has Best Facilities For Our Students</h2>
                                <p>We are proud of our alumni network, which spans across industries and continents. Our graduates are equipped with the skills, values knowledge, anda  to excel in their chosen fields and make positive impact on society. As a Ait graduate.</p>
                            </div>
                            <div class="facilities-info">
                                <h3>
                                    <span>01.</span>
                                    Best Computer Labs
                                </h3>
                                <p>Computer labs equipped with computers, printers, and software are available for students to work on assignments.</p>
                            </div>
                            <div class="facilities-info">
                                <h3>
                                    <span>02.</span>
                                    Entrepreneur Resources
                                </h3>
                                <p>AIT as an entrepreneurial university, provides opportunities, practices and the environment conducive to actively encourage and embrace entrepreneurship among our students.</p>
                            </div>
                           <div class="d-inline-block">
                                <a class="text-decoration-none default-btn" href="/index.php/Application-Form.php">
                                    Application Form
                                    <i class="flaticon-right-arrow"></i>
                                </a>
                           </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="facilities-image">
                            <img src="assets/img/facilities/facilities-1.jpg" alt="facilities-image">
                            <div class="facilities-image-info">
                                <i class="flaticon-quote"></i>
                                <p>We have specialized research centers and institutes for various disciplines.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Facilities Area -->

        <!-- Start Testimonial Area -->
        <div class="testimonial-area pb-75">
            <div class="container">
                <div class="section-title text-center m-auto">
                    <h2>What Student’s Say</h2>
                </div>
                <div class="row align-items-center data-cues="slideInUp">
                    <div class="col-lg-4">
                        <div class="testimonial-image">
                            <img src="assets/img/testimonial/testimonial-1.jpg" alt="testimonial-image">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="testimonial-slider-info">
                            
                            <div class="swiper testimonial2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-slider-item">
                                            <ul class="list-unstyled ps-0 star-icon">
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                            </ul>
                                            <p>In my experience all the teachers are very supportive and friendly and the placement process has been very smooth throughout. I would always be very grateful for the lifelong connections I made.</p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="user d-flex align-items-center">
                                                    <div class="image">
                                                        <img src="assets/img/testimonial/testimonial-3.jpg" alt="testimonial-image">
                                                    </div>
                                                    <div class="content">
                                                        <h3>John Smith</h3>
                                                        <span>Ait student</span>
                                                    </div>
                                                </div>
                                                <div class="quote-icon">
                                                    <i class="flaticon-quote"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-slider-item">
                                            <ul class="list-unstyled ps-0 star-icon">
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                            </ul>
                                            <p>My experience at Ait University is great and memorable. The mentors at Ait University helped us enhance my academic and interpersonal skills. I am thankful to Training & Placement cell for providing a platform to enhance my skills and an opportunity to showcase them. In the last I am saying that The World is here at Ait University.</p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="user d-flex align-items-center">
                                                    <div class="image">
                                                        <img src="assets/img/testimonial/testimonial-4.jpg" alt="testimonial-image">
                                                    </div>
                                                    <div class="content">
                                                        <h3>James Harris</h3>
                                                        <span>Ait student</span>
                                                    </div>
                                                </div>
                                                <div class="quote-icon">
                                                    <i class="flaticon-quote"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-slider-item">
                                            <ul class="list-unstyled ps-0 star-icon">
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                            </ul>
                                            <p>My bachelor degree at Ait in computer science consisted of many projects based evaluation and faculty connect. The mentors at Ait University helped us enhance my academic and interpersonal skills. The regular interaction with the Placement team also encouraged me to excel in my interview and developing skills that are required for future use.</p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="user d-flex align-items-center">
                                                    <div class="image">
                                                        <img src="assets/img/testimonial/testimonial-2.jpg" alt="testimonial-image">
                                                    </div>
                                                    <div class="content">
                                                        <h3>David Wilson</h3>
                                                        <span>Ait’s student</span>
                                                    </div>
                                                </div>
                                                <div class="quote-icon">
                                                    <i class="flaticon-quote"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-slider-item">
                                            <ul class="list-unstyled ps-0 star-icon">
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                                <li class="d-inline-block"><i class="flaticon-star-1"></i></li>
                                            </ul>
                                            <p>I have been able to attend School online while working full time. Plus, I have learned a lot and have been able to apply what I’ve learned in my work life. Ait allows me to still have a life with my family and get my coursework done.</p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="user d-flex align-items-center">
                                                    <div class="image">
                                                        <img src="assets/img/testimonial/testimonial-6.jpg" alt="testimonial-image">
                                                    </div>
                                                    <div class="content">
                                                        <h3>Jessica Clark</h3>
                                                        <span>Ait student</span>
                                                    </div>
                                                </div>
                                                <div class="quote-icon">
                                                    <i class="flaticon-quote"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="thumbs-arrow d-flex align-items-center justify-content-between">

                                <div class="next-prev-arrow d-flex align-items-center">
                                    <div class="next">
                                        <i class="flaticon-left-arrow"></i>
                                    </div>
                                    <div class="prev">
                                        <i class="flaticon-right-arrow"></i>
                                    </div>
                                </div>

                                <div thumbsSlider="" class="swiper testimonial">
                                    <div class="swiper-wrapper justify-content-end">
                                        <div class="swiper-slide">
                                            <div class="testimonial-item-image">
                                                <img src="assets/img/testimonial/testimonial-3.jpg" alt="testimonial-image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testimonial-item-image">
                                                <img src="assets/img/testimonial/testimonial-4.jpg" alt="testimonial-image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testimonial-item-image">
                                                <img src="assets/img/testimonial/testimonial-5.jpg" alt="testimonial-image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testimonial-item-image">
                                                <img src="assets/img/testimonial/testimonial-6.jpg" alt="testimonial-image">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Testimonial Area -->

        <!-- Start Partner Area -->
        <!-- <div class="partner-area pb-75">
            <div class="container">
                <div class="partner-slider-info">
                    <div class="swiper partner-slider">
                        <div class="swiper-wrapper" data-cues="slideInUp">
                            <div class="swiper-slide">
                                <div class="single-partner-logo">
                                    <img src="assets/img/partner/partner-1.png" alt="partner-logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-partner-logo">
                                    <img src="assets/img/partner/partner-2.png" alt="partner-logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-partner-logo">
                                    <img src="assets/img/partner/partner-3.png" alt="partner-logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-partner-logo">
                                    <img src="assets/img/partner/partner-4.png" alt="partner-logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-partner-logo">
                                    <img src="assets/img/partner/partner-5.png" alt="partner-logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-partner-logo">
                                    <img src="assets/img/partner/partner-1.png" alt="partner-logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-partner-logo">
                                    <img src="assets/img/partner/partner-2.png" alt="partner-logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-partner-logo">
                                    <img src="assets/img/partner/partner-3.png" alt="partner-logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-partner-logo">
                                    <img src="assets/img/partner/partner-4.png" alt="partner-logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-partner-logo">
                                    <img src="assets/img/partner/partner-5.png" alt="partner-logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Partner Area -->

        <!-- Start Subscribe Area -->
        <div class="subscribe-area pb-75">
            <div class="container">
                <div class="row align-items-center" data-cues="slideInUp">
                    <div class="col-xl-8">
                        <div class="subscribe-image-info">
                            <div class="row align-items-center" >
                                <div class="col-lg-5">
                                    <div class="subscribe-item">
                                        <h3>Subscribe To Our Newsletter</h3>
                                        <p>Stay up-to-date with the latest news, trends, & exclusive offers by subscribe to our newsletter.</p>
                                        <form>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Your email">
                                            </div>
                                            <button type="submit" class="text-decoration-none border-0 default-btn">
                                                Subscribe Now
                                                <i class="flaticon-right-arrow"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="subscribe-image">
                                        <img src="assets/img/subscribe/subscribe-1.jpg" alt="subscribe-image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="subscribe-content">
                            <div class="title">
                                <h2>Are You Ready To Build Up Your Career </h2>
                                <p>We are proud of our alumni network, which spans across industries and continents. Our graduates are equipped with the skills, values knowledge, anda  to excel in their chosen fields and make positive impact on society.</p>
                            </div>
                            <ul class="list-unstyled ps-0 mb-0 subscribe-btn">
                                <li class="d-inline-block">
                                    <a class="text-decoration-none default-btn" href="/index.php/Application-Form.php">
                                        Application Form
                                        <i class="flaticon-right-arrow"></i>
                                    </a>
                                </li>
                                <li class="d-inline-block">
                                    <a class="text-decoration-none arrow-btn" href="/index.php/International-Applicants.php">
                                        How To Apply
                                        <i class="flaticon-right-arrow"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Subscribe Area -->
        
        <?php include 'partials/footer.php' ?>
</html>