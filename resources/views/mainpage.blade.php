@extends('master.clinic_layout')
@section('content')
<body class="index-page">
  
  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <div class="container-fluid p-0">
        <div class="hero-wrapper">
          <div class="hero-image">
            <img src="assets/img/Hero Image.png" alt="Advanced Healthcare" class="img-fluid">
          </div>

          <div class="hero-content">
            <div class="container">
              <div class="row">
                <div class="col-lg-7 col-md-10" data-aos="fade-right" data-aos-delay="100">
                  <div class="content-box">
                    <span class="badge-accent" data-aos="fade-up" data-aos-delay="150">Family Clinic</span>
                    <h1 data-aos="fade-up" data-aos-delay="200">Your Trusted Family Healthcare</h1>
                    <p data-aos="fade-up" data-aos-delay="250">Come visit us for comprehensive, reliable, and patient-centered medical care.</p>

                    <div class="cta-group" data-aos="fade-up" data-aos-delay="300">
                      <a href="/appointment" class="btn btn-primary">Book Appointment</a>
                      <a href="/services" class="btn btn-outline">Explore Services</a>
                    </div>

                    <div class="info-badges" data-aos="fade-up" data-aos-delay="350">
                      <div class="badge-item">
                        <i class="bi bi-telephone-fill"></i>
                        <div class="badge-content">
                          <span>Need Help? Call Us</span>
                          <strong>+(60)11 6229-1644</strong>
                        </div>
                      </div>
                      <div class="badge-item">
                        <i class="bi bi-clock-fill"></i>
                        <div class="badge-content">
                          <span>Working Hours</span>
                          <strong>Mon-Fri: 8AM-8PM</strong>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="features-wrapper">
                <div class="row gy-4">

                  <div class="col-lg-4">
                    <div class="feature-item" data-aos="fade-up" data-aos-delay="450">
                      <div class="feature-icon">
                        <i class="bi bi-heart-pulse-fill"></i>
                      </div>
                      <div class="feature-text">
                        <h3>Cardiology</h3>
                        <p>Expert evaluation and management for common and complex heart condition</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="feature-item" data-aos="fade-up" data-aos-delay="500">
                      <div class="feature-icon">
                        <i class="bi bi-lungs-fill"></i>
                      </div>
                      <div class="feature-text">
                        <h3>Pulmonology</h3>
                        <p>Expert evaluation of lung health for early detection and effective management</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="feature-item" data-aos="fade-up" data-aos-delay="550">
                      <div class="feature-icon">
                        <i class="bi bi-capsule"></i>
                      </div>
                      <div class="feature-text">
                        <h3>Diagnostics</h3>
                        <p>Advanced diagnostics tools delivering fast, accurate results for better care.</p>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section><!-- /Hero Section -->

    <!-- Home About Section -->
    <section id="home-about" class="home-about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5 align-items-center">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="about-image">
              <img src="assets/img/comp.png" style="width: 800px; height: 400px; object-fit: cover;" alt="Modern Healthcare Facility" class="img-fluid rounded-3 mb-4">
              <div class="experience-badge">
                <span class="years">10+</span>
                <span class="text">Years of Excellence</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content">
              <h2>Committed to Exceptional Patient Care</h2>
              <p class="lead">At Poliklinik Alisya, every patient is treated with dedication, respect, and genuine care.</p>

              <p>We also focus on creating a comfortable experience from the moment you step in combining attentive service, clear communication, and personalized treatement</p>

              <div class="row g-4 mt-4">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                  <div class="feature-item">
                    <div class="icon">
                      <i class="bi bi-heart-pulse"></i>
                    </div>
                    <h4>Compassionate Care</h4>
                    <p>We treat every patient with kindness, respect, and genuine understanding</p>
                  </div>
                </div>

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                  <div class="feature-item">
                    <div class="icon">
                      <i class="bi bi-star"></i>
                    </div>
                    <h4>Medical Excellence</h4>
                    <p>Delivering high-quality, evidence-based care with trusted expertise</p>
                  </div>
                </div>
              </div>

              <div class="cta-wrapper mt-4">
                <a href="/about" class="btn btn-primary">Learn More About Us</a>
                <a href="/doctor" class="btn btn-outline">Meet Our Team</a>
              </div>
            </div>
          </div>
        </div>

                <div class="row mt-5 pt-4 certifications-row" data-aos="fade-up" data-aos-delay="600">
          <div class="col-12 text-center mb-4">
            <h4 class="certification-title">Our Panels</h4>
          </div>
          <div class="col-12">
            <div class="certifications">
              <div class="certification-item" data-aos="zoom-in" data-aos-delay="700">
                <img src="assets/img/clients/c12.png" alt="Certification">
              </div>
              <div class="certification-item" data-aos="zoom-in" data-aos-delay="800">
                <img src="assets/img/clients/c9.png" alt="Certification">
              </div>
              <div class="certification-item" data-aos="zoom-in" data-aos-delay="900">
                <img src="assets/img/clients/c1.png" alt="Certification">
              </div>
              <div class="certification-item" data-aos="zoom-in" data-aos-delay="900">
                <img src="assets/img/clients/c2.png" alt="Certification">
              </div>
              <div class="certification-item" data-aos="zoom-in" data-aos-delay="900">
                <img src="assets/img/clients/c6.png" alt="Certification">
              </div>
              <div class="certification-item" data-aos="zoom-in" data-aos-delay="900">
                <img src="assets/img/clients/c11.png" alt="Certification">
              </div>
              <div class="certification-item" data-aos="zoom-in" data-aos-delay="900">
                <img src="assets/img/clients/c10.png" alt="Certification">
              </div>
            </div>
          </div>
        </div>

        <div class="cta-wrapper mt-4 d-flex justify-content-center">
                <a href="/about" class="btn btn-outline">See More</a>
              </div>
         
          </div>
        </div>

      </div>

    </section><!-- /Home About Section -->

    <!-- Featured Departments Section -->
    <section id="featured-departments" class="featured-departments section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Featured Departments</h2>
        <p>Discover our leading departments, offering advanced diagnostics, speacialized treatments, and compassionate medical expertise.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="department-card">
              <div class="department-image">
                <img src="assets/img/health/cardiology-3.webp" alt="Cardiology Department" class="img-fluid">
              </div>
              <div class="department-content">
                <div class="department-icon">
                  <i class="fas fa-heartbeat"></i>
                </div>
                <h3>Cardiology</h3>
                <p>Comprehensive cardiovascular care with advanced diagnostic techniques and treatment options for heart conditions, ensuring optimal cardiac health for all patients.</p>
                <a href="department-details.html" class="btn-learn-more">
                  <span>Learn More</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Department Card -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="department-card">
              <div class="department-image">
                <img src="assets/img/health/neurology-2.webp" alt="Neurology Department" class="img-fluid">
              </div>
              <div class="department-content">
                <div class="department-icon">
                  <i class="fas fa-brain"></i>
                </div>
                <h3>Neurology</h3>
                <p>Expert neurological care specializing in brain and nervous system disorders, providing cutting-edge treatments and compassionate support for neurological conditions.</p>
                <a href="department-details.html" class="btn-learn-more">
                  <span>Learn More</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Department Card -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="department-card">
              <div class="department-image">
                <img src="assets/img/health/orthopedics-4.webp" alt="Orthopedics Department" class="img-fluid">
              </div>
              <div class="department-content">
                <div class="department-icon">
                  <i class="fas fa-bone"></i>
                </div>
                <h3>Orthopedics</h3>
                <p>Advanced musculoskeletal care focusing on bones, joints, and muscles with innovative surgical and non-surgical treatment approaches for mobility restoration.</p>
                <a href="department-details.html" class="btn-learn-more">
                  <span>Learn More</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Department Card -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="department-card">
              <div class="department-image">
                <img src="assets/img/health/pediatrics-3.webp" alt="Pediatrics Department" class="img-fluid">
              </div>
              <div class="department-content">
                <div class="department-icon">
                  <i class="fas fa-baby"></i>
                </div>
                <h3>Pediatrics</h3>
                <p>Specialized healthcare for children from infancy through adolescence, offering comprehensive medical care in a child-friendly environment with experienced pediatric specialists.</p>
                <a href="department-details.html" class="btn-learn-more">
                  <span>Learn More</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Department Card -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="department-card">
              <div class="department-image">
                <img src="assets/img/health/oncology-4.webp" alt="Oncology Department" class="img-fluid">
              </div>
              <div class="department-content">
                <div class="department-icon">
                  <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Oncology</h3>
                <p>Comprehensive cancer care with multidisciplinary approach, offering advanced treatment options, clinical trials, and compassionate support throughout the cancer journey.</p>
                <a href="department-details.html" class="btn-learn-more">
                  <span>Learn More</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Department Card -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="department-card">
              <div class="department-image">
                <img src="assets/img/health/emergency-2.webp" alt="Emergency Department" class="img-fluid">
              </div>
              <div class="department-content">
                <div class="department-icon">
                  <i class="fas fa-ambulance"></i>
                </div>
                <h3>Emergency Care</h3>
                <p>Round-the-clock emergency medical services with rapid response capabilities, state-of-the-art equipment, and experienced emergency physicians for critical care.</p>
                <a href="department-details.html" class="btn-learn-more">
                  <span>Learn More</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Department Card -->

        </div>

      </div>

    </section><!-- /Featured Departments Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Featured Services</h2>
        <p>Discover a range of professional healthcare services designed to support your well-being</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-card">
              <div class="service-icon">
                <i class="fas fa-heartbeat"></i>
              </div>
              <div class="service-content">
                <h3>Cardiology Excellence</h3>
                <p>Experience exceptational cardiology care combining advanced diagnostics, expert treatment, and personalized heart plans, ensuring optimal outcomes, prevention, and ongoing support for every patient.</p>
                <ul class="service-features">
                  <li><i class="fas fa-check-circle"></i>Advanced Heart Surgery</li>
                  <li><i class="fas fa-check-circle"></i>24/7 Emergency Care</li>
                  <li><i class="fas fa-check-circle"></i>Preventive Screenings</li>
                </ul>
                <a href="/service" class="service-btn">
                  Learn More
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Card -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-card">
              <div class="service-icon">
                <i class="fas fa-brain"></i>
              </div>
              <div class="service-content">
                <h3>Neurology &amp; Brain Health</h3>
                <p>Providing expert neurological care focused on brain and nervous system health, combining advanced diagnostics, personalized treatments plan, and support for optimal cognitive and neurologicak well being.</p>
                <ul class="service-features">
                  <li><i class="fas fa-check-circle"></i>Brain Imaging &amp; Diagnostics</li>
                  <li><i class="fas fa-check-circle"></i>Stroke Treatment Center</li>
                  <li><i class="fas fa-check-circle"></i>Neurological Rehabilitation</li>
                </ul>
                <a href="/service" class="service-btn">
                  Learn More
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Card -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-card">
              <div class="service-icon">
                <i class="fas fa-bone"></i>
              </div>
              <div class="service-content">
                <h3>Orthopedic Surgery</h3>
                <p>Providing specialized orthopedic surgery with advanced techniques and personalized care, helping patients recover from injuries, correct deformities, and regain strength, mobility, and overall physical well being.</p>
                <ul class="service-features">
                  <li><i class="fas fa-check-circle"></i>Joint Replacement Surgery</li>
                  <li><i class="fas fa-check-circle"></i>Sports Medicine</li>
                  <li><i class="fas fa-check-circle"></i>Minimally Invasive Procedures</li>
                </ul>
                <a href="/service" class="service-btn">
                  Learn More
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Card -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-card">
              <div class="service-icon">
                <i class="fas fa-ambulance"></i>
              </div>
              <div class="service-content">
                <h3>Emergency &amp; Trauma Care</h3>
                <p>Providing rapid, expert emergency and trauma care with advanced interventions, immediate response, and compassionate support to stabilise, treat, and improve outcomes for critical patients.</p>
                <ul class="service-features">
                  <li><i class="fas fa-check-circle"></i>24/7 Emergency Department</li>
                  <li><i class="fas fa-check-circle"></i>Level 1 Trauma Center</li>
                  <li><i class="fas fa-check-circle"></i>Critical Care Units</li>
                </ul>
                <a href="/service" class="service-btn">
                  Learn More
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Card -->

        </div>

      </div>

    </section><!-- /Featured Services Section -->

    <!-- Find A Doctor Section -->
    <section id="find-a-doctor" class="find-a-doctor section">

      <!-- Section Title -->
     

    </section><!-- /Find A Doctor Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 data-aos="fade-up" data-aos-delay="200">Your Health is Our Priority</h2>
            <p data-aos="fade-up" data-aos-delay="250">Our Clinic is dedicated to providing safe, high quality medical care for individuals and families. Whether you need routine check-up, vaccination, minor procedure, or women's health services, our experienced team is here to ensure you receive the best care possible.</p>

            <div class="cta-buttons" data-aos="fade-up" data-aos-delay="300">
              <a href="/appointment" class="btn-primary">Book Appointment</a>
              <a href="/doctor" class="btn-secondary">Find a Doctor</a>
            </div>
          </div>
        </div>

        <div class="row features-row" data-aos="fade-up" data-aos-delay="400">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="feature-card">
              <div class="icon-wrapper">
                <i class="bi bi-heart-pulse"></i>
              </div>
              <h5>24/7 Emergency Care</h5>
              <p>Get immediate medical attention whenever you need it</p>
              <a href="#" class="feature-link">
                <span>Learn More</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="feature-card">
              <div class="icon-wrapper">
                <i class="bi bi-calendar-check"></i>
              </div>
              <h5>Easy Online Booking</h5>
              <p>Skip the wait and book your appointment in just few steps</p>
              <a href="/appointment" class="feature-link">
                <span>Book Now</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="feature-card">
              <div class="icon-wrapper">
                <i class="bi bi-people"></i>
              </div>
              <h5>Expert Medical Team</h5>
              <p>Receive care from experienced and compassionate healthcare professionals</p>
              <a href="/doctor" class="feature-link">
                <span>Meet Our Doctors</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

        </div>

        <div class="emergency-alert" data-aos="zoom-in" data-aos-delay="500">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <div class="emergency-content">
                <div class="emergency-icon">
                  <i class="bi bi-telephone-fill"></i>
                </div>
                <div class="emergency-text">
                  <h4>Medical Emergency?</h4>
                  <p>Call our 24/7 emergency hotline for immediate assistance</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 text-end">
              <a href="tel:911" class="emergency-btn">
                <i class="bi bi-telephone-fill"></i>
                Call (555) 123-4567
              </a>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Call To Action Section -->

    <!-- Emergency Info Section -->
    <section id="emergency-info" class="emergency-info section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Emergency Info</h2>
        
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">

            <!-- Emergency Alert Banner -->
            <div class="emergency-alert" data-aos="zoom-in" data-aos-delay="100">
              <div class="alert-icon">
                <i class="bi bi-exclamation-triangle-fill"></i>
              </div>
              <div class="alert-content">
                <h3>Medical Emergency?</h3>
                <p>If you are experiencing a life-threatening emergency, call 911 immediately or go to your nearest emergency room.</p>
              </div>
              <div class="alert-action">
                <a href="tel:911" class="btn btn-emergency">
                  <i class="bi bi-telephone-fill"></i>
                  Call 911
                </a>
              </div>
            </div><!-- End Emergency Alert -->


            <!-- Emergency Preparation Tips -->
            <div class="emergency-tips" data-aos="fade-up" data-aos-delay="400">
              <h4>When to Seek Emergency Care</h4>
              <div class="row">
                <div class="col-md-6">
                  <ul class="emergency-list">
                    <li><i class="bi bi-check-circle"></i> Chest pain or difficulty breathing</li>
                    <li><i class="bi bi-check-circle"></i> Severe allergic reactions</li>
                    <li><i class="bi bi-check-circle"></i> Major trauma or injuries</li>
                    <li><i class="bi bi-check-circle"></i> Signs of stroke or heart attack</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="emergency-list">
                    <li><i class="bi bi-check-circle"></i> Severe burns or bleeding</li>
                    <li><i class="bi bi-check-circle"></i> Loss of consciousness</li>
                    <li><i class="bi bi-check-circle"></i> Severe abdominal pain</li>
                    <li><i class="bi bi-check-circle"></i> High fever with confusion</li>
                  </ul>
                </div>
              </div>
            </div><!-- End Emergency Tips -->

          </div>
        </div>

      </div>

    </section><!-- /Emergency Info Section -->

  </main>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

@endsection