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

      <section class="career-hero">
            <div class="career-text">
                <p class="intro-text">Welcome to Human Capital Managers (HCM)</p>
                    <h1 class="career-title">Where Your Curiosity Meets Purpose</h1>
                <p class="career-desc">
                    At HCM, people are the heartbeat of everything we do. We’re not just building tech solutions,
                    we’re building a workplace where your ideas count, your growth is nurtured, and your values are respected.
                    Whether you’re fresh out of school or bringing years of experience, there’s a place here for you.
                </p>
                <p class="career-desc">
                    No experience? That’s okay. We value curiosity, attitude, and willingness to grow over perfect résumés.
                    <a href="#" class="career-link">Join our team</a> and find purpose in your potential.
                </p>
                <a href="#" class="career-btn">Explore Careers</a>
                </div>

                <div class="career-image">
                    <img src="{{ asset('images/carrers1.jpg') }}" alt="Team collaboration">
            </div>
     </section>

     {{-- Why choose --}}

    <section class="why-section">
        <div class="why-content">
            <p class="why-subtitle">OUR CULTURE</p>
            <h2 class="why-title">Why Choose HCM?</h2>

            <p class="why-text">
                We believe authenticity isn’t a buzzword, it’s a way of working. Whether you speak up in meetings
                or express yourself through your work, we want the real you. Our culture is rooted in respect,
                identity, and shared success.
            </p>

            <h4 class="why-heading">Growth With Us</h4>
            <p class="why-text">
                We offer real chances to learn, lead, and evolve. From mentorship and training to hands-on experience,
                we’ll support your professional journey every step of the way.
            </p>

            <h4 class="why-heading">Community That Has Your Back</h4>
            <p class="why-text">
                You’ll join a diverse, kind, and driven team that values collaboration over competition.
                We win together, and we lift each other.
            </p>
        </div>

        <div class="why-image">
            <img src="{{ asset('images/carrers2.webp') }}" alt="HCM Team at work">
        </div>
    </section>

    {{-- Hcm Way --}}

    <section class="hcm-purpose-section">
        <div class="hcm-purpose-container">
            <h2 class="hcm-purpose-title">The HCM Way: Built<br>With Purpose</h2>
            <p class="hcm-purpose-text">
                We’re not chasing trends. We’re building meaningful solutions — from biometric tools to HR software —
                that solve real problems. Our growing product suite is rooted in purpose, innovation, and security.
                When you work at HCM, your contributions don’t disappear into a task list — they help shape tools
                that improve lives, organizations, and communities.
            </p>
        </div>
    </section>

    {{-- Growth Benefit --}}

    <section class="hcm-benefits-section">
        <div class="hcm-benefits-container">
            <div class="hcm-benefits-image">
                <img src="{{ asset('images/carrers3.jpg') }}" alt="HCM team collaboration">
            </div>
            <div class="hcm-benefits-content">
                <h4 class="hcm-benefits-subtitle">BENEFITS</h4>
                <h2 class="hcm-benefits-title">Invest in Your Growth &<br>Well-being</h2>
                <p class="hcm-benefits-desc">
                    Your development and well-being are at the heart of what we do.
                    We offer comprehensive benefits designed to help you thrive professionally and personally.
                </p>

                <h5 class="hcm-benefits-highlight">Benefits That Work for You</h5>
                <p class="hcm-benefits-text">
                    Enjoy flexible work, paid time off, and mental health support to keep life balanced plus
                    comprehensive healthcare, retirement plans, tuition assistance, skill-building opportunities,
                    and performance bonuses that reward your impact.
                </p>
            </div>
        </div>
    </section>


    {{-- Hauwa Abubakar Quote --}}
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
                <img src="{{ asset('images/carrers4.jpg') }}" alt="CEO">
            </div>

            <div class="hcm-quote-text">
                <div class="quote-icon">“</div>
                <p>‘I’m a software developer in Human Capital Management,where I help create thoughtful tools that make HR work smoother and more intuitive.
                    I care about building tech that supports people, and I’m drawn to HCM because it’s a space where empathy, innovation, and a strong sense of culture truly matter.’
                </p>
                <h4>-Hauwa Abubakar</h4>
                <span>Software developer</span>
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

  <section class="career-section">
    <h2 class="headline">New World</h2>
    <p class="subhead">Explore careers</p>
    <h3 class="dream-job">Find your dream job</h3>

    <div class="career-container">

      <div class="career-card">
        <h4>Director of Administration and Human Resources</h4>
        <p>
          Lead with empathy. Drive strategy. Build culture. We’re looking for a seasoned HR/Admin leader
          to help shape our people strategy, strengthen operations, and champion growth. If you’re a
          strong communicator, love structure, and know how to mentor — this is your stage.
        </p>
        <a href="#" class="more-btn">More info</a>
      </div>

      <div class="career-card">
        <h4>Software Developer</h4>
        <p>
          Code with curiosity. Build what matters. We’re growing our tech team with passionate developers
          ready to explore new stacks and solve meaningful problems. If you love writing clean code, learning
          fast, and collaborating across teams — we’d love to hear from you.
        </p>
        <a href="#" class="more-btn">More info</a>
      </div>

      <div class="career-card">
        <h4>Project Manager</h4>
        <p>
          IOwn the process. Deliver impact. Join our team to lead client and internal projects, from concept to
           execution.You’ll collaborate across departments, implement our software,
           and keep timelines tight and expectations clear.
        </p>
        <a href="#" class="more-btn">More info</a>
      </div>

    </div>
  </section>

  {{-- Explore more --}}

  <section class="news-section">
        <div class="container">
            <h2 class="section-title">Explore More</h2>
            <div class="news-grid">
                <!-- News Item 1 -->
                <div class="news-card">
                    <div class="news-image">
                        <img src="{{ asset('images/Aligning-inovation.jpeg') }}" alt="Giving Back HCM">
                        <span class="news-tag">News</span>
                    </div>
                    <div class="news-content">
                        <p class="date">AUGUST 17, 2025</p>
                        <h3>Aligning Innovation with Giving Back: HCM Welcomes Foundation’s Chairwoman</h3>
                        <p class="desc">Human Capital Managers (HCM) recently welcomed Hajiya Rabi Jimeta...</p>
                        <a href="#" class="read-more">Read More →</a>
                    </div>
                </div>

                <!-- News Item 2 -->
                <div class="news-card">
                    <div class="news-image">
                        <img src="{{ asset('images/gombe hr.jpg') }}" alt="HR-Tech Leadership">
                        <span class="news-tag">News</span>
                    </div>
                    <div class="news-content">
                        <p class="date">MAY 8, 2025</p>
                        <h3>Gombe’s HR-Tech Leadership Sparks Regional Collaboration</h3>
                        <p class="desc">HCM explores HR-powered biometric systems to boost workforce productivity...</p>
                        <a href="#" class="read-more">Read More →</a>
                    </div>
                </div>

                <!-- News Item 3 -->
                <div class="news-card">
                    <div class="news-image">
                        <img src="{{ asset('images/gombe biometric.jpg') }}" alt="Workshop">
                        <span class="news-tag">News</span>
                    </div>
                    <div class="news-content">
                        <p class="date">FEBRUARY 10, 2025</p>
                        <h3>HCM Leads Workshop on Biometric Attendance System Sustainability</h3>
                        <p class="desc">On February 9–10, 2025, HCM hosted a major event on biometric solutions...</p>
                        <a href="#" class="read-more">Read More →</a>
                    </div>
                </div>
            </div>
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
