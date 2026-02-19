 <!-- Start Navbar Area --> 
 <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img class="black-logo" src="/assets/img/black-logo.png" alt="black-logo" width="89" height="17">      
                </a>
                <a href="/" class="text-decoration-none"><span class="elementor-heading-title elementor-size-default" style="font-weight: 800; color: rgb(0, 30, 67); font-family: 'Roboto Slab', serif; margin-left: -1.4rem;">ACCRA INSTITUTE OF <br>TECHNOLOGY</span></a>
                <a class="navbar-toggler text-decoration-none" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button" aria-controls="navbarOffcanvas">
                    <span class="burger-menu">
                        <span class="top-bar"></span>
                        <span class="middle-bar"></span> 
                        <span class="bottom-bar"></span>
                    </span>
                </a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto">

                        <li class="nav-item">
                            <a href="/" class=" nav-link <?=  uRLIs('/') ?'active': ''; ?>">
                                Home
                            </a>
                        </li>

                        <li class="nav-item"> 
                            <a href="/index.php/about.php" class="dropdown-toggle nav-link <?=  uRLIs('/index.php/about.php') ?'active': ''; ?>">
                               About Us
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="/index.php/ait-advantage.php" class="nav-link <?=  uRLIs('/index.php/ait-advantage.php') ?'active': ''; ?>">
                                        Ait Advantage
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/index.php/University-Leadership.php" class="nav-link <?=  uRLIs('/index.php/University-Leadership.php') ?'active': ''; ?>">
                                        University Leadership
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/index.php/Ait-President.php" class="nav-link <?=  uRLIs('/index.php/Ait-President.php') ?'active': ''; ?>">
                                        Ait President
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/index.php/Visions-Missions.php" class="nav-link <?=  uRLIs('/index.php/Visions-Missions.php') ?'active': ''; ?>">
                                        Vision & Missions
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/index.php/News&events.php" class="dropdown-toggle nav-link <?=  uRLIs('/index.php/News&events.php') ?'active': ''; ?>">
                                        Media & Events
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"> 
                                            <a href="/index.php/News&events.php" class="nav-link <?=  uRLIs('/index.php/News&events.php') ?'active': ''; ?>">
                                                News and Event
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="https://web.facebook.com/aituniversity" class="nav-link <?=  uRLIs('/contact.php') ?'active': ''; ?>">
                                                Facebook
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="https://www.instagram.com/aituniversitygh" class="nav-link <?=  uRLIs('/contact.php') ?'active': ''; ?>">
                                              Instagram
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="https://twitter.com/aituniversity" class="nav-link <?=  uRLIs('/contact.php') ?'active': ''; ?></a>">
                                              X FKA Twitter
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="https://www.youtube.com/aituniversity" class="nav-link <?=  uRLIs('/contact.php') ?'active': ''; ?>">
                                                Youtube
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="https://linkedin.com/school/aituniversity" class="nav-link <?=  uRLIs('/contact.php') ?'active': ''; ?>">
                                              Linkdeln
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </li>   
                                <li class="nav-item">
                                    <a href="/index.php/Privacy-Policy.php" class="nav-link <?=  uRLIs('/index.php/Privacy-Policy.php') ?'active': ''; ?>">
                                        Privacy Policy
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/index.php/terms-conditions.php" class="nav-link <?=  uRLIs('/index.php/terms-conditions.php') ?'active': ''; ?>">
                                        Terms & Conditions
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="dropdown-toggle nav-link <?=  uRLIs('') ?'active': ''; ?>">
                                Admissions
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="javascript:void(0)" class="dropdown nav-link <?=  uRLIs('') ?'active': ''; ?>">
                                        Prospective Students
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="/index.php/How-to-apply.php" class="nav-link <?=  uRLIs('/index.php/How-to-apply.php') ?'active': ''; ?>">
                                                How To Apply
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/index.php/Cut-off-points.php" class="nav-link <?=  uRLIs('/index.php/Cut-off-points.php') ?'active': ''; ?>">
                                                Cut-Off Points
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/index.php/Undergraduate-Entry-Requirement&Guidelines.php" class="nav-link <?=  uRLIs('/index.php/Undergraduate-Entry-Requirement&Guidelines.php') ?'active': ''; ?>">
                                                Undergraduate Entry Requirements and Guidelines
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/index.php/Postgraduate-Entry-Requirement&Guidelines.php" class="nav-link <?=  uRLIs('//index.php/Postgraduate-Entry-Requirement&Guidelines.php') ?'active': ''; ?>">
                                                Postgraduate Entry Requirements and Guidelines
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/index.php/Distance-Learning-Admissions.php" class="nav-link <?=  uRLIs('/index.php/Distance-Learning-Admissions.php') ?'active': ''; ?></a>">
                                                Distance Learning Admissions
                                            </a>
                                        </li>
                                    </ul>
                                </li>   
                                <li class="nav-item">  
                                    <a href="/index.php/Instant-Online-registration.php" class="nav-link <?=  uRLIs('/index.php/Instant-Online-registration.php') ?'active': ''; ?>">
                                        Instant Online Registration 
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/index.php/Log-In-Now.php" class="nav-link <?=  uRLIs('/index.php/Log-In-Now.php') ?'active': ''; ?>">
                                        Log In Now
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/index.php/Application-Form.php" class="nav-link <?=  uRLIs('/index.php/Application-Form.php') ?'active': ''; ?>">
                                        Application Form
                                    </a>
                                </li>
                                <li class="nav-item">  
                                    <a href="javascript:void(0)" class="dropdown nav-link <?=  uRLIs('') ?'active': ''; ?>">
                                        Alternative Application Option
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="/index.php/Local-Applicants.php" class="nav-link <?=  uRLIs('/index.php/Local-Applicants.php') ?'active': ''; ?>">
                                                Local Applicants
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/index.php/International-Applicants.php" class="nav-link <?=  uRLIs('/index.php/International-Applicants.php') ?'active': ''; ?>">
                                                Foreign Applicants
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="/index.php/Check-Admission-Status.php" class="nav-link <?=  uRLIs('/index.php/Check-Admission-Status.php') ?'active': ''; ?>">
                                        Check Admission Status
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/index.php/Verify-Admission.php" class="nav-link <?=  uRLIs('/index.php/Verify-Admission.php') ?'active': ''; ?>">
                                        Verify Admission
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/index.php/Support&Guidance.php" class="nav-link <?=  uRLIs('/index.php/Support&Guidance.php') ?'active': ''; ?>">
                                        Support & Guidance
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="javascript:void(0)" class="dropdown-toggle nav-link <?=  uRLIs('') ?'active': ''; ?>">
                                Academics
                            </a>
                            <ul class="dropdown-menu">
                                    <li class="nav-item ">
                                    <a href="/index.php/All-Programs.php" class="nav-link <?=  uRLIs('/index.php/All-Programs.php') ?'active': ''; ?>">
                                        All Programs
                                    </a>
                                </li>
                                <li class="nav-item">
                                   <a href="/index.php/Tutition&Fees.php" class="nav-link <?=  uRLIs('/index.php/Tutition&Fees.php') ?'active': ''; ?>">
                                        Tuition & Fees
                                    </a> 
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="/index.php/Fitness&Athlectics.php" class="dropdown-toggle nav-link <?=  uRLIs('/index.php/Fitness&Athlectics.php') ?'active': ''; ?>">
                                Health Care
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item ">
                                    <a href="/index.php/Fitness&Athletics.php" class="nav-link <?=  uRLIs('/index.php/Fitness&Athlectics.php') ?'active': ''; ?>">
                                        Fitness & Health Care
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">

                            <a href="javascript:void(0)" class="dropdown-toggle nav-link <?=  uRLIs('') ?'active': ''; ?>">
                                Student Life
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item ">
                                    <a href="/index.php/University-life.php" class="nav-link <?=  uRLIs('/index.php/University-life.php') ?'active': ''; ?>">
                                        University Life
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0)" class="dropdown nav-link <?=  uRLIs('') ?'active': ''; ?>">
                                        Fresh Student Guide
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="/index.php/Accomodation.php" class="nav-link <?=  uRLIs('/index.php/Accomodation.php') ?'active': ''; ?>">
                                                Accomodation
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/index.php/Transportation.php" class="nav-link <?=  uRLIs('/index.php/Transportation.php') ?'active': ''; ?>">
                                                Transportation
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/index.php/Campus-Facilities.php" class="nav-link <?=  uRLIs('/index.php/Campus-Facilities.php') ?'active': ''; ?>">
                                                Campus Facilities
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/index.php/Important-Offices.php" class="nav-link <?=  uRLIs('/index.php/Important-Offices.php') ?'active': ''; ?>">
                                                Important Offices
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/index.php/Campus-Security.php" class="nav-link <?=  uRLIs('/index.php/Campus-Security.php') ?'active': ''; ?>">
                                                Campus Security
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/index.php/Orientation.php" class="nav-link <?=  uRLIs('/index.php/Orientation.php') ?'active': ''; ?>">
                                               Orientation
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/index.php/Student-Id-Card.php" class="nav-link <?=  uRLIs('/index.php/Student-Id-Card.php') ?'active': ''; ?>">
                                              Student Id Cards
                                            </a>
                                        </li>
                                    </ul>
                                </li>   
                            </ul>
                            
                        </li>

                        <li class="nav-item">
                            <a href="/index.php/contact.php" class="nav-link  <?=  uRLIs('/index.php/contact.php') ?'active': ''; ?>">
                                Contact <span>Us</span>
                            </a>
                        </li>
                    </ul>
                    <div class="others-option">
                        <div class="d-flex align-items-center">
                            <div class="option-item">
                                <form class="search-form">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Search Programs">
                                        <button type="submit"><i class="ri-search-line"></i></button>
                                    </div>
                                </form>
                                <button type="button" class="search-btn d-none bg-transparent border-0 lh-1 p-0 position-relative" data-bs-toggle="modal" data-bs-target="#searchModal">
                                    <i class="flaticon-search-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </nav>
        <!-- End Navbar Area -->