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
    {{-- Intern-hero --}}

    <section class="intern-hero">
        <div class="intern-hero-content">

            <div class="intern-left">
                <p class="hero-subtitle">EARLY CAREERS & INTERNSHIPS</p>

                <h1 class="hero-title">
                    Build A Career That Changes <br> Africa
                </h1>

                <p class="hero-text">
                    Work where innovation meets impact. Whether you're exploring our internship
                    programs or seeking an early career role, HCM offers mentorship, hands-on
                    experience, and the opportunity to help optimize Africa’s workforce through
                    cutting-edge HR technology.
                </p>

                <a href="#" class="hero-btn">Explore Opportunities</a>
            </div>

                <div class="intern-right">
                    <img src="{{ asset('images/early-career.webp') }}" alt="Internship Image">
                </div>

         </div>
    </section>

    <section class="intern-academy">
        <div class="academy-container">

            <!-- LEFT IMAGE -->
            <div class="academy-left">
                <img src="{{ asset('images/early-career1.Webp') }}" alt="HCM Intern Academy">
            </div>

            <!-- RIGHT TEXT -->
            <div class="academy-right">
                <p class="academy-subtitle">INTERN ACADEMY</p>
                <h2 class="academy-title">Internships With Real Impact</h2>

                <p class="academy-text">
                Transform your passion for technology into career-defining experience with the HCM Intern Academy — our comprehensive paid internship program.
                You’ll tackle meaningful challenges, build lasting professional relationships,
                and contribute to solutions that empower African businesses every single day.
                </p>
                <a href="#" class="academy-btn">Join Our Team</a>
            </div>

        </div>
    </section>

    {{-- Intern-Benefit --}}

    <section class="internship-benefits">
        <div class="benefits-header">
            <h5>INTERNSHIP BENEFITS</h5>
            <h2>Grow personally and professionally</h2>
            <p>
                We’re on a mission to optimize Africa’s workforce through technology.
                As an HCM intern, you’ll be part of something transformative while building
                the foundation for an exceptional career.
            </p>
        </div>

        <div class="benefits-container">

            <div class="benefit-item">
                <div class="icon-circle">
                    <i class="fa-solid fa-lightbulb"></i>
                </div>
                <h3>DEVELOP TECHNICAL<br>MASTERY</h3>
                <p>
                    Master the latest HR tech tools and methodologies while working alongside
                    senior software developers and product experts. Gain hands-on experience
                    with real client projects that impact thousands of African businesses.
                </p>
            </div>

            <div class="benefit-item">
                <div class="icon-circle">
                    <i class="fa-solid fa-users"></i>
                </div>
                <h3>BUILD YOUR PROFESSIONAL<br>NETWORK</h3>
                <p>
                    Connect with industry leaders, mentors, and fellow interns who share
                    your passion for innovation. Our structured mentorship program pairs
                    you with experienced professionals who invest in your growth.
                </p>
            </div>

            <div class="benefit-item">
                <div class="icon-circle">
                    <i class="fa-solid fa-user-tie"></i>
                </div>
                <h3>CREATE MEANINGFUL<br>IMPACT</h3>
                <p>
                    Your work doesn’t sit on a shelf — it goes live and helps real businesses
                    streamline their HR processes, pay their employees efficiently, and
                    build stronger teams across Africa.
                </p>
            </div>

        </div>
    </section>

    {{-- Career Program --}}

     <section class="intern-program">
        <div class="program-container">

            <div class="program-right">
                <p class="program-subtitle">EARLY CAREER PROGRAMS</p>
                <h2 class="program-title">You’re going places, We'll <br>help you get there</h2>

                <p class="program-text">
                An early career role should challenge your thinking and accelerate your growth. Our comprehensive
                technical and business training programs equip you with the skills to collaborate effectively, solve complex
                problems, and drive innovation. You’ll receive personalized mentorship, professional development
                opportunities, and clear pathways for career advancement.
                </p>
            </div>

             <div class="program-left">
                <img src="{{ asset('images/early-career2.Webp') }}" alt="HCM Intern Academy">
            </div>

        </div>
    </section>

    {{-- Ahmad Quote --}}

    <section class="hcm-quote-section">

        <!-- Top wave -->
        <div class="wave-top">
            <svg viewBox="0 0 1440 150" xmlns="http://www.w3.org/2000/svg">
                <path d="M0,96 C240,20 480,160 720,100 C960,40 1200,160 1440,80 L1440,0 L0,0 Z"
                    fill="#ffffff" opacity="1"></path>
            </svg>
        </div>

        <div class="hcm-quote-container">

            <div class="hcm-quote-image">
                <img src="{{ asset('images/early-career3.webp') }}" alt="CEO">
            </div>

            <div class="hcm-quote-text">
                <div class="quote-icon">“</div>
                <p>Starting as an intern at Human Capital Managers, I didn’t just gain work experience,  I found a place
                    where I was encouraged to grow, be myself, and make a real impact. From day one, I felt like I
                    belonged.’
                </p>
                <h4>-Ahmad Adamu, Former Intern</h4>
                <span>And Now Full-Time Team Member</span>
            </div>

        </div>

        <!-- Bottom wave -->
        <div class="wave-bottom">
            <svg viewBox="0 0 1440 150" xmlns="http://www.w3.org/2000/svg">
                <path d="M0,64 C360,160 720,0 1440,96 L1440,150 L0,150 Z"
                    fill="#ffffff" opacity="1"></path>
            </svg>
        </div>

    </section>

    {{-- Belonging and values --}}

     <section class="intern-values">
        <div class="values-container">


            <div class="values-left">
                <img src="{{ asset('images/early-career4.jpg') }}" alt="HCM Intern values">
            </div>


            <div class="values-right">
                <p class="values-subtitle">BELONGING AND VALUES</p>
                <h2 class="values-title">People and purpose first</h2>

                <p class="values-text">
                At HCM, we believe in creating not just great places to work, but environments where every person can
                thrive authentically. Our commitment to diversity, inclusion, and social impact isn’t just policy — it’s who we
                are. We’re building technology that empowers African businesses while fostering a workplace where your
                unique perspective is valued and your contributions make a difference.
                </p>
                <a href="#" class="values-btn">Discover Our Values</a>
            </div>

        </div>
    </section>

    {{-- Work With Purpose --}}

    <section class="work-purpose">
        <div class="work-content">
            <h2>Work with purpose, launch with impact</h2>
            <p>
                Begin your career at HCM, where you’ll help create outstanding workplace experiences
                for thousands of African organizations and millions of employees. Your first job should
                be more than just a paycheck; it should be the foundation for a career that matters.
            </p>

            <a href="#" class="job-btn">Search Jobs</a>
        </div>
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
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-x-twitter"></i></a>
            </div>
        </div>

        <!-- Explore More Page -->
        <div class="footer-links">
            <h3>Explore More Page</h3>
            <ul>
            <li><a href="#">Early Career and Internship</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Our Team</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Newsroom</a></li>
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

