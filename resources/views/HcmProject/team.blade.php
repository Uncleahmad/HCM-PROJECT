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

   <section class="hcm-team-section">
  <div class="container">
    <h2>Our Team</h2>
    <p>Meet the passionate experts and visionary leaders of the  HCM Nigeria team. Our team combines deep local expertise with global perspectives to drive product innovation, business growth, and scalable operations that are transforming workforce management across the country. Get to know the HCM leaders behind our mission to optimize Nigeria’s workforce through technology.</p>
    <h1>THE PEOPLE BEHIND HCM</h1>
    <!-- Tabs -->
    <div class="team-tabs">
      <button class="tab-button active" data-tab="directors">Board of Directors</button>
      <button class="tab-button" data-tab="staff">HCM Staff</button>
    </div>

    <!-- Board of Directors -->
    <div class="team-content active" id="directors">
      <div class="team-grid three-cols">

        <div class="team-member">
          <img src="{{ asset('images/ismail-jibrin.webp') }}" alt="Director 1">
          <h3>Dr. Ismail Jibrin</h3>
          <span>Board Of Chairman</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Anas-jibrin.webp') }}" alt="Director 2">
          <h3>Anas Jibrin</h3>
          <span>Executive Director</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Shuaibu-idris.jpg') }}" alt="Director 3">
          <h3>Shuaibu Idris Yusuf</h3>
          <span>Non-Executive Director</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Huseyn-zakaria.webp') }}" alt="Director 4">
          <h3>Huseyn Zakaria</h3>
          <span>Non-Executive Director</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Rabi-jimeta.webp') }}" alt="Director 5">
          <h3>Rabi jimeta</h3>
          <span>Non-Executive Director</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Saudatu-mahdi.webp') }}" alt="Director 6">
          <h3>Saudatu Mahdi</h3>
          <span>Non-Executive Director</span>
        </div>

      </div>
    </div>

    <!-- HCM Staff -->
    <div class="team-content" id="staff">
      <div class="team-grid four-cols">
        <div class="team-member">
          <img src="{{ asset('images/ismail-jibrin.webp') }}" alt="Staff 1">
          <h3>Ismail Jibrin</h3>
          <span>Chief Executive Officer</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Anas-jibrin.webp') }}" alt="Staff 2">
          <h3>Anas Jibrin</h3>
          <span>Head Of Strategy</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Shamsuddeen-ismail.jpg') }}" alt="Staff 3">
          <h3>Shamsudden Ismail</h3>
          <span>Director Of Biometric Solutions</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Mohammed-gidado.jpg') }}" alt="Staff 4">
          <h3>Muhammad Gidado</h3>
          <span>Director IT</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Habib-Abdulkarim.jpg') }}" alt="Staff 5">
          <h3>Habib Abdulkarim</h3>
          <span>Chief Finacial Officer</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Ahmed-Sintali.jpg') }}" alt="Staff 6">
          <h3>Ahmed Sintali</h3>
          <span>Director Of Field Operations</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Ali-Muhammad.jpg') }}" alt="Staff 7">
          <h3>Ali Muhammad</h3>
          <span>Head Of Research and Documentation</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Kabiru-Dahiru.jpg') }}" alt="Staff 8">
          <h3>Kabiru Dahiru</h3>
          <span>Admin and HR manager</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Jerry-Anjugu.jpg') }}" alt="Staff 9">
          <h3>Jerry Anjugu</h3>
          <span>Project Manager</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/lawal-Ishaq.jpg') }}" alt="Staff 10">
          <h3>Lawan Ishaq</h3>
          <span>Field Operation Manager</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Baba-Adamu.jpg') }}" alt="Staff 11">
          <h3>Baba Adamu</h3>
          <span>Health System Speacialist</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Yusuf-Ishaq.jpg') }}" alt="Staff 12">
          <h3>Yusuf Ishaq</h3>
          <span>Software Developer</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Muhammad-Dawaki.jpg') }}" alt="Staff 13">
          <h3>Muhammad Dawaki</h3>
          <span>Software Developer</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Hauwa-Abubakar.jpg') }}" alt="Staff 14">
          <h3>Hauwa Abubakar</h3>
          <span>Software Developer</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Hamza-Muhammad.jpg') }}" alt="Staff 15">
          <h3>Hamza Muhammad</h3>
          <span>Software Developer</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Abdulrahman-Ahmad.jpg') }}" alt="Staff 16">
          <h3>Abdurrahman Ahmad </h3>
          <span>Software Developer</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Usman-Muhammad.jpg') }}" alt="Staff 17">
          <h3>Usman Muhammad </h3>
          <span>Software Developer</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Baqeer-Magaji.jpg') }}" alt="Staff 16">
          <h3>Baqir Magaji </h3>
          <span>Software Developer</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Habiba-Hassan.jpg') }}" alt="Staff 19">
          <h3>Habiba Hassan </h3>
          <span>Software Developer</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Ahmad-Adamu.webp') }}" alt="Staff 20">
          <h3>Ahmad Adamu</h3>
          <span>Software Developer</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Hcm-logo.webp') }}" alt="Staff 21">
          <h3>Abdussamad Abubakar</h3>
          <span>Software Developer</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Hcm-logo.webp') }}" alt="Staff 22">
          <h3>Mu'azu Ibrahim</h3>
          <span>Software Developer</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Bilkisu-Abubakar.jpg') }}" alt="Staff 23">
          <h3>Bilkisu Abubakar</h3>
          <span>Communication Officer</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Hcm-logo.webp') }}" alt="Staff 24">
          <h3>Abubakar Muhammed</h3>
          <span>Technical Supervisor</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Adamu-Abdulmumini.jpg') }}" alt="Staff 25">
          <h3>Adamu Abdulmumini</h3>
          <span>Technical Supervisor</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Bilal-Habibu.jpg') }}" alt="Staff 26">
          <h3>Bilal Habibu</h3>
          <span>Technical Supervisor</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Maimuna-ALkasim.jpg') }}" alt="Staff 27">
          <h3>Maimuna Alkasim</h3>
          <span>Data Analytics Officer</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Musa-Abubakar.jpg') }}" alt="Staff 28">
          <h3>Musa Abubakar</h3>
          <span>Finance Officer</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Imrana-Adamu.jpg') }}" alt="Staff 29">
          <h3>Imrana Adamu</h3>
          <span>Logistics Officer</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Rachael-Ibukun.jpg') }}" alt="Staff 30">
          <h3>Rachael Olowookere</h3>
          <span>Executive Assistant</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Adamu-Ahmadu.jpg') }}" alt="Staff 31">
          <h3>Adamu Ahmad</h3>
          <span>Hardware Technician</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Harira-Shehu.jpg') }}" alt="Staff 32">
          <h3>Harira Shehu</h3>
          <span>Finance Officer</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Hcm-logo.webp') }}" alt="Staff 33">
          <h3>Umar Idris</h3>
          <span>Technical Supervisor</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Hcm-logo.webp') }}" alt="Staff 34">
          <h3>Salomi Solomon</h3>
          <span>Technical Officer</span>
        </div>

         <div class="team-member">
          <img src="{{ asset('images/Fatima-Abdulkarim.jpg') }}" alt="Staff 35">
          <h3>Fatima Abdulkarim</h3>
          <span>Project Manager</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Sanusi-Usman.jpg') }}" alt="Staff 36">
          <h3>Sanusi Usman</h3>
          <span>Field Supervisor</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Abdulkadir-Sulaiman.jpg') }}" alt="Staff 37">
          <h3>Abdulkadir Sulaiman</h3>
          <span>Field Supervisor</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Aiman-Ahmad.jpg') }}" alt="Staff 38">
          <h3>Aiman Ahmad</h3>
          <span>Field Supervisor</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Abubakar-Abdulkarim.jpg') }}" alt="Staff 39">
          <h3>Abubakar Abdulkarim</h3>
          <span>Field Supervisor</span>
        </div>

        <div class="team-member">
          <img src="{{ asset('images/Sanusi-Haruna.jpg') }}" alt="Staff 40">
          <h3>Sanusi Haruna</h3>
          <span>Field Supervisor</span>
        </div>

      </div>
    </div>
  </div>
</section>

{{-- Newsroom --}}

<section class="news-section">
        <div class="container">
            <h2 class="section-title">Newsroom</h2>
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

    <script>
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabContents = document.querySelectorAll('.team-content');

    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
        const tab = button.getAttribute('data-tab');

        tabButtons.forEach(btn => btn.classList.remove('active'));
        tabContents.forEach(content => content.classList.remove('active'));

        button.classList.add('active');
        document.getElementById(tab).classList.add('active');
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
