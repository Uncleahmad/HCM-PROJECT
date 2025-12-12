@extends('layout.app')
@section('content')
@section('/public/css/style.css')
@endsection
<head>
    <title>HR Technology Nigeria | HCM</title>
    <link rel="icon" href="hcm-icon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

    {{-- Case Study Section --}}

    <section class="case-study-hero">
        <div class="case-study-content">
            <h1>Welcome to our Resource Center</h1>
                <div class="case-study-box">
                    <div class="case-icon">
                        <i class="fas fa-newspaper-o"></i>
                    </div>

                    <h2>Case Studies</h2>

                    <p>
                        Explore our portfolio of HR case studies in Nigeria that demonstrate
                        how organizations achieve measurable results with HCM’s technology.
                        These success stories showcase real-world solutions for payroll
                        optimization, biometric attendance, and workforce management.
                    </p>
                </div>
        </div>
    </section>

    {{-- Tabs and Items --}}

    <div class="case-container">

        <!-- Tabs -->
        <div class="case-tabs">
            <button class="tab active" data-target="all">All Case</button>
            <button class="tab" data-target="biometric">Biometric Attendance</button>
            <button class="tab" data-target="hr">HR +</button>
            <button class="tab" data-target="payroll">Payroll Optimization</button>
            <button class="tab" data-target="recruit">Recruiting & Hiring</button>
            <button class="tab" data-target="talent">Talent Development</button>
            <button class="tab" data-target="workforce">Workforce Management</button>
        </div>

        <!-- Cards -->
        <div class="case-grid">

            <!-- ITEM 1 -->
            <div class="case-card biometric all">
                <img src="{{ asset('images/casestudy2.webp') }}" class="case-img">
                <div class="case-body">
                    <span class="case-tag">Case Study</span>
                    <h3>How HCM’s Biometric Solutions Helped<br> Gombe State Save Millions and<br> Transform Its Public Workforce</h3><br>
                    <p>With a workforce spread across ministries, departments, and agencies in all 11 Local Government Areas, Gombe State faced a massive human resource challenge: ghost workers, absenteeism, poor workforce data, and rising salary costs consuming over half of its federal allocation. Today, Gombe has turned this around, thanks to HCM’s innovative biometric workforce management solutions……..</p>
                </div>
            </div>

            <!-- ITEM 2 -->
            <div class="case-card hr all">
                <img src="{{ asset('images/casestudy3.webp') }}" class="case-img">
                <div class="case-body">
                    <span class="case-tag">Case Study</span>
                    <h3>How HCM’s TimeRite Technology<br>Transformed Workforce Management in<br> Gombe State</h3><br>
                    <p>For years, the Gombe State Government battled a persistent and costly problem that plagues many public institutions—ghost workers, bloated payrolls, and unchecked absenteeism. At the heart of the issue was a disjointed, paper-based workforce management system, with no reliable mechanism to verify staff presence, track attendance, or even maintain accurate personnel records. As a result, salaries were being paid to individuals who never showed up for work—or didn’t exist at all……</p>
                </div>
            </div>

            {{-- <!-- ITEM 3 -->
            <div class="case-card payroll">
                <img src="img2.jpg" class="case-img">
                <div class="case-body">
                    <span class="case-tag">Case Study</span>
                    <h3>How HCM’s TimeRite Technology Improved Workforce...</h3>
                    <p>For years, the Gombe State Government battled...</p>
                </div>
            </div> --}}

        </div>
    </div>

    {{-- Javascript For Tabs --}}

    <script>
        const tabs = document.querySelectorAll(".tab");
        const cards = document.querySelectorAll(".case-card");

        tabs.forEach(tab => {
            tab.addEventListener("click", () => {

                // Remove active from all tabs
                tabs.forEach(t => t.classList.remove("active"));
                tab.classList.add("active");

                const target = tab.getAttribute("data-target");

                cards.forEach(card => {
                    if (target === "all") {
                        card.style.display = "block";
                    } else {
                        card.style.display = card.classList.contains(target)
                            ? "block"
                            : "none";
                    }
                });
            });
        });
    </script>


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
