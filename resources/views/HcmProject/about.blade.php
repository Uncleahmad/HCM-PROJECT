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
                        <li><a href="{{ route('newsroom') }}">CASE OF STUDY</a></li>
                        <li><a href="{{ route('newsroom') }}">NEWS ROOM</a></li>
                    </ul>
            </li>
        </ul>

        <a href="#" class="contact-btn">Contact Us</a>
    </nav>
    </header>

    {{-- About Hcm --}}
    <section class="about-hcm-section">
    <div class="about-hcm-container">

        <div class="about-hcm-text">
            <h2>About HCM</h2>
            <h3>Right Technology, Right Talent, Right Results</h3>

            <p>
                HCM is a leading HR technology company in Nigeria on a mission to optimize
                workforce management using smart, digital tools. Founded in Gombe State,
                we began with a bold goal: to bring clarity and accountability to public
                service HR.Today, trusted by states like Gombe State Government and partners like the
                Gates Foundation, we provide secure human capital solutions that deliver
                transformative results for the public and private sectors.
            </p>
        </div>

        <div class="about-hcm-image">
            <img src="{{ asset('images/about-image1.jpg') }}" alt="HCM Team Photo">
        </div>

    </div>
</section>

{{-- Who we are --}}

<section class="who-we-are-section">
    <div class="container">

        <div class="who-title">
            <h2>Who We Are</h2>
            <p>
                At HCM, we believe that technology should reflect the people it serves.
                That’s why we build solutions for African realities.
            </p>
        </div>

        <div class="mv-wrapper">

            <div class="mv-box">
                <h2>Our Mission</h2>
                <h3>To optimize workforce using technology for a better world.</h3>
                <p>
                    We help organizations work at their best. By combining people’s insight
                    with smart technology, we create solutions that make teams more productive,
                    processes more efficient, and work life more rewarding.
                </p>
            </div>

            <div class="mv-box">
                <h2>Our Vision</h2>
                <h3>To Become Africa's one-stop shop for tech-driven HR Solution.</h3>
                <p>
                    We envision a continent where every business — from start-ups to giants —
                    can harness the power of technology to hire smarter, manage better, and
                    grow faster. We’re building solutions that make that future possible.
                </p>
            </div>

        </div>
    </div>
</section>

{{-- our approach --}}

<section class="approach-section">
    <div class="approach-container">

        <div class="approach-text">
            <h2>Our Approach</h2>
            <p>
                We are not just solving administrative challenges, we are reimagining
                what HR can be in Africa: digital, data-driven, and people-first.
                 We work with organizations of all sizes, from SMEs to state governments
                and private companies — helping them attract, track, pay, and support their workforce
                more effectively, using innovative tech that’s secure and built for the realities of our environment.
            </p>
        </div>

        <div class="approach-image">
            <img src="{{ asset('images/about-image2.jpg') }}" alt="HCM Approach">
        </div>

    </div>
</section>

{{-- CEO Quote --}}
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
            <img src="/images/about-image3.webp" alt="CEO">
        </div>

        <div class="hcm-quote-text">
            <div class="quote-icon">“</div>
            <p>
                Innovation and strong technical expertise drive everything we do by listening to our clients
                and understanding their unique challenges, HCM continuously innovates solutions that empower
                Nigerian organizations to build productive, compliant, transparent and accountable workforces.
                Our technology is designed not only to meet today's demands but to anticipate the future of work in Africa.
            </p>
            <h4>- Dr Ismail Jibrin</h4>
            <span>CEO, Human Capital Managers</span>
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

{{-- what we do --}}
<section class="hcm-what-we-do">
    <div class="container">

        <span class="section-label">What We Do</span>

        <h2>Empowering Africa's Workforce Through<br>Innovative HR Technology</h2>

        <p class="section-intro">
            Since day one, we’ve been focused on transforming how organizations manage people.
            As Nigeria’s leading indigenous HR technology company, HCM designs digital solutions
            that simplify HR operations, optimize workforce performance, and
            promote accountability and transparency across both public and private institutions.
        </p>

        <div class="hcm-services">

            <div class="hcm-service-box">
                <h3>Digital HR<br>Solutions</h3>
                <p>
                    We provide a <strong>modular suite of digital HR solutions</strong> tailored to
                    African institutions to support leaders with streamlined payroll, improved efficiency,
                    and data-driven HR decisions.
                </p>
            </div>

            <div class="hcm-service-box">
                <h3>Performance<br>Optimization</h3>
                <p>
                    We design HR systems that optimize workforce performance and promote accountability
                    across both public and private institutions with real-world deployment insights.
                </p>
            </div>

            <div class="hcm-service-box">
                <h3>Secure &<br>Compliant</h3>
                <p>
                    Every solution is secure, scalable, compliant, and built with insight from real-world
                    public and private sector deployments. Our solutions work better together.
                </p>
            </div>

        </div>
        <button class="learn-more">Learn More</button>

    </div>
</section>

{{-- Core values --}}

<section class="core-values">
  <div class="wave-top"></div>

  <div class="container">
    <h2>Our Values</h2>
    <p class="subtitle">Our core values guide everything we do, shaping how we build our products, engage with clients, and grow as a company:</p>

    <div class="values-grid">
      <div class="value-item">
        <i class="fas fa-cogs"></i>
        <h3>Efficiency</h3>
        <p>We deliver optimized solutions that save time and resources.</p>
      </div>

      <div class="value-item">
        <i class="fas fa-search"></i>
        <h3>Transparency</h3>
        <p>We maintain openness and accountability in all actions.</p>
      </div>

      <div class="value-item">
        <i class="fas fa-shield-alt"></i>
        <h3>Reliability</h3>
        <p>We ensure consistent and dependable service delivery.</p>
      </div>

      <div class="value-item">
        <i class="fas fa-lightbulb"></i>
        <h3>Innovation</h3>
        <p>We consistently push to improve and create better solutions.</p>
      </div>

      <div class="value-item">
        <i class="fas fa-handshake"></i>
        <h3>Collaboration</h3>
        <p>We work closely with clients and partners to achieve success.</p>
      </div>

      <div class="value-item">
        <i class="fas fa-lock"></i>
        <h3>Confidentiality</h3>
        <p>We protect all information and uphold privacy standards.</p>
      </div>
    </div>
  </div>

  <div class="wave-bottom"></div>
</section>

{{-- cooperate social --}}

<section class="csr-section">
  <div class="csr-container">

    <div class="csr-text">
      <h2>Corporate Social Responsibility</h2>
      <p>
        We’re committed to creating impact beyond business. Through the HCM Foundation, we support initiatives in
        <strong>healthcare, education, and economic empowerment</strong> — focused on uplifting underserved communities through
        sustainable, <strong>community-led development</strong>. Learn about how we are giving back to the community we serve.
      </p>

      <a href="#" class="csr-btn">Learn More</a>
    </div>

    <div class="csr-image">
      <img src="/images/about-image4.jpg" alt="Community Support Program">
    </div>

  </div>

  <div class="wave-divider"></div>
</section>

{{-- who we serve --}}

<section class="hcm-wave-section">
    <!-- Top Wave -->
    <div class="wave-top">
        <svg viewBox="0 0 1440 320">
            <path fill="#d6d8db" fill-opacity="1" d="M0,64L48,96C96,128,192,192,288,197.3C384,203,480,149,576,112C672,75,768,53,864,69.3C960,85,1056,139,1152,176C1248,213,1344,235,1392,245.3L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
        </svg>
        <svg class="layer2" viewBox="0 0 1440 320">
            <path fill="#b9bcc0" fill-opacity="1" d="M0,160L48,181.3C96,203,192,245,288,240C384,235,480,181,576,138.7C672,96,768,64,864,69.3C960,75,1056,117,1152,138.7C1248,160,1344,160,1392,160L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
        </svg>
    </div>

    <div class="wave-content">
        <h2>Who We Serve</h2>
        <p>We Partner With:</p>
    </div>
</section>

{{-- industries --}}

 <section class="industries">
    <div class="industry">
      <i class="fa-solid fa-building"></i>
      <h3>Small & Medium Enterprises (SMEs)</h3>
      <p>Looking to simplify HR and payroll processes with cost effective solutions</p>
    </div>

    <div class="industry">
      <i class="fa-solid fa-city"></i>
      <h3>Large Enterprises</h3>
      <p>Seeking scalable compliance and performance solutions for complex workforce management</p>
    </div>

    <div class="industry">
      <i class="fa-solid fa-house-user"></i>
      <h3>State & Local Governments</h3>
      <p>Modernizing public sector workforce systems for transparency and efficiency</p>
    </div>

    <div class="industry">
      <i class="fa-solid fa-globe"></i>
      <h3>NGOs & Donor-Funded Projects</h3>
      <p>Requiring transparent and auditable operations with comprehensive reporting</p>
    </div>

    <div class="industry">
      <i class="fa-solid fa-lightbulb"></i>
      <h3>Education & Healthcare Institutions</h3>
      <p>Managing distributed teams and productivity across multiple locations</p>
    </div>
  </section>

  {{-- Cta section --}}

  <section class="cta-section">
    <div class="cta-content">
      <h2>Let’s Build a Better Workforce Together</h2>
      <p>
        At HCM, we believe HR technology should do more than automate — it should enable impact.
        Whether you’re managing 30 people or 30,000, we’re here to help you lead with transparency,
        manage people better with right solutions built for real results.
      </p>
      <a href="#" class="cta-btn">Get In Touch</a>
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










