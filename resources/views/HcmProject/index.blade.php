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
    {{-- End heading-nav --}}

    {{-- content --}}
    <section class="overview">
        <div class="overview-content">
            <p class="small-heading">OUR PURPOSE IS PEOPLE</p>
            <h1>Integrated HR Technology<br>Solutions That Power Success</h1>
            <p class="overview-text">
                We partner with visionary organizations to unlock workforce potential through
                innovative, reliable HR technology. From biometric attendance to payroll systems,
                our platform builds smarter workplaces.
            </p>
            <a href="#" class="overview-btn">Request Demo</a>
        </div>

        <div class="overview-img">
            <img src="{{ asset('images/hcmimage.jpg') }}" alt="hcm-staff ">
        </div>
    </section>
    {{-- End content --}}

    {{-- product --}}
    <section class="products">
        <p class="products-subtitle">TRANSFORM YOUR WORKFORCE MANAGEMENT</p>
        <h2 class="products-title">Learn About Our Products</h2>

        <div class="product-container">
            <div class="product-box">
                <div class="icon">💰</div>
                <h3>PayRite</h3>
                <p>Accurate payroll solution that automates salary calculations, ensures tax compliance, and pays directly to employee bank accounts.</p>
            </div>

            <div class="product-box">
                <div class="icon">⏱️</div>
                <h3>TimeRite</h3>
                <p>Advanced time and attendance system that delivers real-time insights and accurate workforce tracking.</p>
            </div>

            <div class="product-box">
                <div class="icon">⚕️</div>
                <h3>CureRite</h3>
                <p>Reliable healthcare optimization platform that tracks productivity and improves patient care.</p>
            </div>

            <div class="product-box">
                <div class="icon">🛠️</div>
                <h3>WorkRite</h3>
                <p>Modern workforce solution that streamlines HR operations from hire to retire on one platform.</p>
            </div>
        </div>
    </section>
    {{-- End product --}}

    {{-- Image Section --}}
    <section class="image">
        <div class="image-overlay">
            <h1>Secure, Seamless, and Reliable Attendance Tracking</h1>
            <p>Empowering organizations with accurate workforce visibility</p>
        </div>
    </section>

    {{-- Navigation Buttons --}}
    <section class="top-nav">
        <div class="nav-button active">Payroll Solution</div>
        <div class="nav-button">Talent Acquisition</div>
        <div class="nav-button">Time and Attendance</div>
        <div class="nav-button"> Workforce Management</div>
        <div class="nav-button"> Pension Management</div>
    </section>

    {{-- Main Payroll Section --}}
    <section class="payroll-section">
        <div class="image-container">
            {{-- image --}}
            <img src="{{ asset('images/payrol.svg') }}" alt="Payroll Dashboard">
        </div>

        <div class="text-container">
            <h1>Payroll Solution</h1>
            <p>
                A unified system for all employee data. No more manual updates, no more silos—
                just seamless, efficient HR and payroll in one place.
            </p>
        </div>
    </section>

    <!-- Solutions Section -->
    <section class="solutions">
        <div class="solutions-container">
            <div class="solutions-image">
                <img src="/images/solution.jpg" alt="HR Solution">
            </div>
            <div class="solutions-content">
                <h4 class="solution-tag">SOLUTIONS THAT SCALE</h4>
                <h2>Streamline HR with Confidence</h2>
                <p>
                    At HCM, we provide comprehensive HR solutions designed to fit your industry and your stage of growth — whether you’re strengthening existing systems or starting fresh. Our tools, expertise, and technology give you everything you need to empower your workforce and drive your business forward.
                </p>
                <a href="#" class="solution-btn">Schedule Consultation</a>
            </div>
        </div>
    </section>

    {{-- challenges section --}}
    <section class="challenges">
        <h4 class="section-subtitle">COMMON CHALLENGES</h4>
        <h2 class="section-title">What are you struggling with?</h2>

        <div class="challenge-container">
            <div class="challenge-card">
                <h3>Attracting Talent</h3>
                <p>Are hiring delays and slow processes costing your organization top talent?</p>
                <p>Hiring shouldn't be a hassle. Manual steps and scattered systems slow you down, drive up costs, and make it harder to find great people. HCM’s Talent Acquisition tools simplify job posts, speed up screening, and help you hire top talent fast.</p>
            </div>

            <div class="challenge-card">
                <h3>Payroll Accuracy</h3>
                <p>Facing late salaries, manual errors, and compliance risks?</p>
                <p>Payroll delays and inaccuracies can frustrate staff and expose your organization to legal penalties. HCM's PayRite ensures accurate and timely salary disbursements, fully linked to attendance and compliant with Nigerian labor laws.</p>
            </div>

            <div class="challenge-card">
                <h3>Workforce Insight</h3>
                <p>Is gaining real-time analytics and insights still a challenge for your organization?</p>
                <p>HCM platforms give leaders a clear view of their workforce, from executive dashboards and attendance heatmaps to productivity trends and policy compliance, so they can make fast, confident decisions.</p>
            </div>
        </div>
    </section>

    {{-- excellent section --}}
    <section class="excellence-section">
    <div class="content">
      <p class="subtitle">SERVING WITH EXPERTISE</p>
      <h1 class="title">Delivering With Excellence</h1>
      <p class="description">
        At HCM, we don’t just sell software, we build partnerships. Our platforms are built around your challenges, your people, and your goals.
        Whether you need to streamline payroll, eliminate ghost workers, digitize recruitment, or optimize your HR strategy,
        we’re here to make it happen efficiently, transparently, and reliably.
      </p>
    </div>
  </section>

    {{-- testimonial section --}}
  <section class="testimonial-section">
    <div class="overlay"></div>
    <div class="testimonial-content">
      <div class="testimonial-box">
        <p class="quote">
          “One of our key achievements has been the introduction of a biometric attendance system,
          which has effectively addressed issues such as ghost worker, absenteeism, and redundancy.
          These reforms have enhanced efficiency, accountability, and productivity across the civil service,
          thus setting a strong foundation for sustainable governance”
        </p>
        <p class="author">
          <strong>Muhammad Inuwa Yahaya</strong>, Gombe State Executive Governor
        </p>
        <img src="/images/gombe-logo.jpg" alt="Gombe State Logo" class="gombelogo">
        <button class="read-moree">Read More</button>
      </div>
    </div>
  </section>


    <section class="news-section">
        <div class="container">
            <h5 class="section-subtitle">OUR LATEST</h5>
            <h2 class="section-title">News & Announcements</h2>

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

            <!-- Second Row -->
            <div class="news-grid">
                <!-- Press Item 1 -->
                <div class="news-card">
                    <div class="news-image">
                        <img src="{{ asset('images/Curerite-logo.jpg') }}" alt="CureRite">
                        <span class="news-tag press">Press Release</span>
                    </div>
                    <div class="news-content">
                        <p class="date">APRIL 1, 2024</p>
                        <h3>Introducing CureRite: Smarter Solutions for Healthcare Systems</h3>
                        <p class="desc">HCM launches CureRite, an integrated HR-health solution for better outcomes...</p>
                        <a href="#" class="read-more">Read More →</a>
                    </div>
                </div>

                <!-- Press Item 2 -->
                <div class="news-card">
                    <div class="news-image">
                        <img src="{{ asset('images/thwpp.jpg') }}" alt="THWPP Launch">
                        <span class="news-tag press">Press Release</span>
                    </div>
                    <div class="news-content">
                        <p class="date">FEBRUARY 7, 2024</p>
                        <h3>HCM Launches Health Worker Productivity Project (THWPP)</h3>
                        <p class="desc">A data-driven workforce management project in partnership with Gates Foundation...</p>
                        <a href="#" class="read-more">Read More →</a>
                    </div>
                </div>

                <!-- Press Item 3 -->
                <div class="news-card">
                    <div class="news-image">
                        <img src="{{ asset('images/partnership.jpg') }}" alt="Partnership">
                        <span class="news-tag announce">Announcement</span>
                    </div>
                    <div class="news-content">
                        <p class="date">NOVEMBER 2, 2023</p>
                        <h3>Announcing Partnership with BMGF</h3>
                        <p class="desc">HCM partners with Bill & Melinda Gates Foundation to expand biometric reach...</p>
                        <a href="#" class="read-more">Read More →</a>
                    </div>
                </div>
            </div>

            <div class="load-more">
                <button>Load More</button>
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


