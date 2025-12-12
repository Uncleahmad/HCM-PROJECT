@extends('layout.app')
@section('content')
@section('/public/css/style.css')
@endsection
<head>
    <title>HR Technology Nigeria | HCM</title>
    <link rel="icon" href="hcm-icon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    {{-- heading-nav --}}
    <header>
        <nav class="navbar">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/hcm.png',) }}" alt="company_logo">
                </a>
            </div>

            <ul class="nav-links">
                <li><a href="#">PRODUCTS</a></li>
                <li><a href="#">SOLUTION</a></li>
                <li class="dropdown">
                <a href="#">COMPANY <i class="fa-solid fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('about') }}">ABOUT HCM</a></li>
                    <li><a href="{{ route('team') }}">OUR TEAM</a></li>
                    <li><a href="{{ route('careers') }}">CAREERS</a></li>
                    <li><a href="{{ route('internship') }}">EARLY CAREER & INTERNSHIP</a></li>
                </ul>
                </li>
                <li class="dropdown">
                    <a href="#">INSIGHTS <i class="fa-solid fa-chevron-down"></i></a>
                        <ul class="dropdown-insight">
                            <li><a href="{{ route('casestudy') }}">CASE OF STUDY</a></li>
                            <li><a href="{{ route('newsroom') }}">NEWSROOM</a></li>
                        </ul>
                </li>
            </ul>

            <a href="#" class="contact-btn">Contact Us</a>
        </nav>
    </header>

    <div class="newsroom-intro">
        <h2>Our Blogs</h2>
        <h3>Welcome to HCM newsroom</h3>
        <p>
            Your central hub for all official announcements from HCM. Here you will find our press releases
            on product launches and project milestones, company updates, and features where HCM’s work in HR
            technology has been spotlighted in national and international media.
        </p>
    </div>

    <div class="newsroom-container">

        <!-- Sidebar Dropdown -->
        <aside class="news-sidebar">

            <div class="dropdown-box">
                <button class="dropdown-btn">Newsroom ▼</button>

                <ul class="dropdown-content">
                    <li><a href="#">News</a></li>
                    <li><a href="#">Announcements</a></li>
                    <li><a href="#">Press Releases</a></li>
                    <li><a href="#">Events</a></li>
                </ul>
            </div>

        </aside>

            <!-- News Section -->
        <section class="news-section">
            <div class="container">
                <div class="news-grid">
                    <!-- News Item 1 -->
                    <div class="news-card">
                        <div class="news-image">
                            <img src="{{ asset('images/Billgate.webp') }}" alt="Giving Back HCM">
                            <span class="news-tag">News</span>
                        </div>
                        <div class="news-content">
                            <p class="date">September 11, 2025</p>
                            <h3>Bill Gates Commends HCM for Transforming Healthcare in Gombe State</h3>
                            <p class="desc">Gombe, 11 September, 2025 – Human Capital Managers (HCM),……….</p>
                            <a href="#" class="read-more">Read More →</a>
                        </div>
                    </div>

                    <!-- News Item 2 -->
                    <div class="news-card">
                        <div class="news-image">
                            <img src="{{ asset('images/Aligning-inovation.jpeg') }}" alt="HR-Tech Leadership">
                            <span class="news-tag">News</span>
                        </div>
                        <div class="news-content">
                            <p class="date">August 17, 2025</p>
                            <h3>Aligning Innovation with Giving Back: HCM Welcomes Foundation’s Chairwoman</h3>
                            <p class="desc">Human Capital Managers (HCM) recently welcomed Hajiya Rabi Jimeta,……….</p>
                            <a href="#" class="read-more">Read More →</a>
                        </div>
                    </div>

                    <!-- News Item 3 -->
                    <div class="news-card">
                        <div class="news-image">
                            <img src="{{ asset('images/HR-leadership.jpg') }}" alt="Workshop">
                            <span class="news-tag">News</span>
                        </div>
                        <div class="news-content">
                            <p class="date">May 8, 2025</p>
                            <h3>Gombe’s HR-Tech Leadership Sparks Regional Collaboration: Adamawa State Explores HCM-Powered Biometric Success</h3>
                            <p class="desc">Gombe’s HR-Tech Leadership Sparks Regional Collaboration: Adamawa State Explores……….</p>
                            <a href="#" class="read-more">Read More →</a>
                        </div>
                    </div>
                </div>

                <!-- Second Row -->
                <div class="news-grid">
                    <!-- Press Item 1 -->
                    <div class="news-card">
                        <div class="news-image">
                            <img src="{{ asset('images/HCM-Workshop.webp') }}" alt="CureRite">
                            <span class="news-tag">News</span>
                        </div>
                        <div class="news-content">
                            <p class="date">February 10, 2025</p>
                            <h3>HCM Leads Workshop on the Achievements and Sustainability of Gombe Biometric Attendance System </h3>
                            <p class="desc">On February 9–10, 2025, Human Capital Managers (HCM) hosted……….</p>
                            <a href="#" class="read-more">Read More →</a>
                        </div>
                    </div>

                    <!-- Press Item 2 -->
                    <div class="news-card">
                        <div class="news-image">
                            <img src="{{ asset('images/curerite-logo.jpg') }}" alt="THWPP Launch">
                            <span class="news-tag press">Press Release</span>
                        </div>
                        <div class="news-content">
                            <p class="date">April 1, 2024</p>
                            <h3>Introducing CureRite: A Smarter, Integrated Solution for Strengthening Healthcare Systems</h3>
                            <p class="desc">HCM is proud to announce CureRite, a new healthcare……….</p>
                            <a href="#" class="read-more">Read More →</a>
                        </div>
                    </div>

                    <!-- Press Item 3 -->
                    <div class="news-card">
                        <div class="news-image">
                            <img src="{{ asset('images/thwpp.jpg') }}" alt="Partnership">
                            <span class="news-tag press">Press Relase</span>
                        </div>
                        <div class="news-content">
                            <p class="date">February 7, 2024</p>
                            <h3>HCM Launches Tracking Health Worker Productivity Project (THWPP) in Gombe in Partnership with Gates Foundation</h3>
                            <p class="desc">Human Capital Managers (HCM), in partnership with Bill &……</p>
                            <a href="#" class="read-more">Read More →</a>
                        </div>
                    </div>
                </div>

                {{-- third Item --}}
                <div class="news-grid">
                    <!-- Press Item 1 -->
                    <div class="news-card">
                        <div class="news-image">
                            <img src="{{ asset('images/partnership.jpg') }}" alt="CureRite">
                            <span class="news-tag announcement">Announcement</span>
                        </div>
                        <div class="news-content">
                            <p class="date">November 2, 2023</p>
                            <h3>HCM Partners with Gates Foundation to Strengthen Primary Healthcare in Gombe State</h3>
                            <p class="desc">Human Capital Managers (HCM) today announced a strategic Gombe……….</p>
                            <a href="#" class="read-more">Read More →</a>
                        </div>
                    </div>

                    <!-- Press Item 2 -->
                    <div class="news-card">
                        <div class="news-image">
                            <img src="{{ asset('images/Payrite-logo.webp') }}" alt="THWPP Launch">
                            <span class="news-tag press">Press Release</span>
                        </div>
                        <div class="news-content">
                            <p class="date">May 23, 2022</p>
                            <h3>HCM Launches PayRite: A Smarter, More Secure Payroll Solution for a Modern Workforce</h3>
                            <p class="desc">Powering Payroll Precision with Innovation HCM is pleased to……….</p>
                            <a href="#" class="read-more">Read More →</a>
                        </div>
                    </div>

                    <!-- Press Item 3 -->
                    <div class="news-card">
                        <div class="news-image">
                            <img src="{{ asset('images/HCM-timerite-pic.webp') }}" alt="Partnership">
                            <span class="news-tag press">Press Release</span>
                        </div>
                        <div class="news-content">
                            <p class="date">March 15, 2021</p>
                            <h3>HCM Launches TimeRite: A Smart, Biometric-Based Attendance System for Nigerian Workforces</h3>
                            <p class="desc">Human Capital Managers (HCM) proudly announces the official launch……….</p>
                            <a href="#" class="read-more">Read More →</a>
                        </div>
                    </div>
                </div>
                <!-- Press Item 3 -->
                    <div class="news-card">
                        <div class="news-image">
                            <img src="{{ asset('images/HCM-partner-gombe.webp') }}" alt="Partnership">
                            <span class="news-tag announce">News</span>
                        </div>
                        <div class="news-content">
                            <p class="date">April 18, 2020</p>
                            <h3>HCM Partners with Gombe State Government | Workforce Reform in Nigeria</h3>
                            <p class="desc">Transforming Public Service: HCM & Gombe State Government Partnership……….</p>
                            <a href="#" class="read-more">Read More →</a>
                        </div>
                    </div>
            </div>
        </section>
    </div>
     {{-- Follow Us On --}}

        <section class="follow-us-section">
            <h2>Follow Us On</h2>

            <div class="social-icons">
                <a href="#" class="icon">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="#" class="icon">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="#" class="icon">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="#" class="icon">
                    <i class="fab fa-x-twitter"></i>
                </a>
            </div>
        </section>

    <section class="media-relations-section">
        <h2>Media Realations Contact</h2>

        <div class="line"></div>

        <p>
            For media enquiry, please reach out to us via
        </p>

        <div class="email">mediarelations@hcm.ng</div>
    </section>

     {{-- footer --}}

    <footer class="footer">
        <div class="footer-container">

        <!-- Logo Section -->
        <div class="footer-logo">
            <a href="{{ route('home') }}">
                <img src=" {{ asset('images/hcmlogo.png') }}" alt="HCM Logo" />
            </a>
        </div>

        <!-- Contact Info -->
        <div class="footer-contact">
            <h3>Contact Info</h3>
            <ul>
            <li class="fa-solid fa-phone"></li>  +234-707-322-2220<br>
            <li class="fa-solid fa-envelope"></li>  info@hcm.ng<br>
            <li class="fa-solid fa-globe"></li>  www.hcm.ng<br>
            </ul>
            <div class="footer-social">
            <a href="https://www.facebook.com/hcmnaija"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.youtube.com/@HumanCapitalManagers"><i class="fab fa-youtube"></i></a>
            <a href="https://www.linkedin.com/uas/login?session_redirect=%2Fcompany%2F96593692"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://x.com/hcmnigeria"><i class="fab fa-x-twitter"></i></a>
            </div>
        </div>

        <!-- Explore More Page -->
        <div class="footer-links">
            <h3>Explore More Page</h3>
            <ul>
            <li><a href="{{ route('internship') }}">Early Career and Internship</a></li>
            <li><a href="{{ route('careers') }}">Careers</a></li>
            <li><a href="{{ route('team') }}">Our Team</a></li>
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="{{ route('newsroom') }}">Newsroom</a></li>
            </ul>
        </div>

        <!-- Location Section -->
        <div class="footer-location">
            <h3>Our Location</h3>
            <img src="{{ asset('images/map.png') }}" alt="Nigeria Map" />
        </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
        <hr />
        <p>© 2025 HCM LIMITED - All rights reserved</p>
        </div>
   </footer>
</body>
