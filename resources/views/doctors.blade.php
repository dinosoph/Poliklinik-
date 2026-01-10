@extends('master.clinic_layout')

@section('content')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><i class="bi bi-house"></i> Home</a></li>
            <li class="breadcrumb-item active current">Doctors</li>
          </ol>
        </nav>
      </div>

      <div class="title-wrapper">
        <h1>Doctors</h1>
        <p>Our dedicated team of healthcare professionals is committed to providing compassionate care <br> and expert medical services to help you and your loved ones stay healthy.</p>
      </div>
    </div><!-- End Page Title -->

<!-- Doctors Section -->
<section id="doctors" class="doctors section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4">

      <!-- 1 -->
      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="doctor-card">
          <div class="doctor-image">
            <img src="assets/img/doctor_base_image.jpg" alt="Dr. Afiq Rahman" class="img-fluid">
            <div class="doctor-overlay">
              <div class="doctor-social">
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-envelope"></i></a>
              </div>
            </div>
          </div>
          <div class="doctor-content">
            <h4 class="doctor-name">Dr. Afiq Rahman</h4>
            <span class="doctor-specialty">Cardiology</span>
            <!-- <p class="doctor-bio">Mauris blandit aliquet elit eget tincidunt nibh pulvinar a.</p> -->
            <div class="doctor-experience">
              <span class="experience-badge">15+ Years Experience</span>
            </div>
            <a href="appointment.html" class="btn-appointment">Book Appointment</a>
          </div>
        </div>
      </div>

      <!-- 2 -->
      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="doctor-card">
          <div class="doctor-image">
            <img src="assets/img/doctor_base_image.jpg" alt="Dr. Heng Zhen Xiang" class="img-fluid">
            <div class="doctor-overlay">
              <div class="doctor-social">
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-envelope"></i></a>
              </div>
            </div>
          </div>
          <div class="doctor-content">
            <h4 class="doctor-name">Dr. Heng Zhen Xiang</h4>
            <span class="doctor-specialty">Cardiology</span>
            <!--<p class="doctor-bio">Vestibulum ac diam sit amet quam vehicula elementum.</p>-->
            <div class="doctor-experience">
              <span class="experience-badge">12+ Years Experience</span>
            </div>
            <a href="appointment.html" class="btn-appointment">Book Appointment</a>
          </div>
        </div>
      </div>

      <!-- 3 -->
      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="doctor-card">
          <div class="doctor-image">
            <img src="assets/img/doctor_base_image.jpg" alt="Dr. Sri Alisya Syantini" class="img-fluid">
            <div class="doctor-overlay">
              <div class="doctor-social">
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-envelope"></i></a>
              </div>
            </div>
          </div>
          <div class="doctor-content">
            <h4 class="doctor-name">Dr. Sri Alisya Syantini</h4>
            <span class="doctor-specialty">Neurology</span>
            <!--<p class="doctor-bio">Donec rutrum congue leo eget malesuada.</p>-->
            <div class="doctor-experience">
              <span class="experience-badge">18+ Years Experience</span>
            </div>
            <a href="appointment.html" class="btn-appointment">Book Appointment</a>
          </div>
        </div>
      </div>

      <!-- 4 -->
      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="doctor-card">
          <div class="doctor-image">
            <img src="assets/img/doctor_base_image.jpg" alt="Dr. Faiz Mukhriz Shah" class="img-fluid">
            <div class="doctor-overlay">
              <div class="doctor-social">
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-envelope"></i></a>
              </div>
            </div>
          </div>
          <div class="doctor-content">
            <h4 class="doctor-name">Dr. Faiz Mukhriz Shah</h4>
            <span class="doctor-specialty">Neurology</span>
            <!--<p class="doctor-bio">Proin eget tortor risus.</p>-->
            <div class="doctor-experience">
              <span class="experience-badge">20+ Years Experience</span>
            </div>
            <a href="appointment.html" class="btn-appointment">Book Appointment</a>
          </div>
        </div>
      </div>

      <!-- 5 -->
      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="doctor-card">
          <div class="doctor-image">
            <img src="assets/img/doctor_base_image.jpg" alt="Dr. Daniel Tan Wei Jian" class="img-fluid">
            <div class="doctor-overlay">
              <div class="doctor-social">
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-envelope"></i></a>
              </div>
            </div>
          </div>
          <div class="doctor-content">
            <h4 class="doctor-name">Dr. Daniel Tan Wei Jian</h4>
            <span class="doctor-specialty">Orthopedics</span>
            <!--<p class="doctor-bio">Vivamus magna justo lacinia eget consectetur.</p>-->
            <div class="doctor-experience">
              <span class="experience-badge">14+ Years Experience</span>
            </div>
            <a href="appointment.html" class="btn-appointment">Book Appointment</a>
          </div>
        </div>
      </div>

      <!-- 6 -->
      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="doctor-card">
          <div class="doctor-image">
            <img src="assets/img/doctor_base_image.jpg" alt="Dr. Kelvin Chong Jun Hao" class="img-fluid">
            <div class="doctor-overlay">
              <div class="doctor-social">
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-envelope"></i></a>
              </div>
            </div>
          </div>
          <div class="doctor-content">
            <h4 class="doctor-name">Dr. Kelvin Chong Jun Hao</h4>
            <span class="doctor-specialty">Orthopedics</span>
            <!--<p class="doctor-bio">Cras ultricies ligula sed magna dictum porta.</p>-->
            <div class="doctor-experience">
              <span class="experience-badge">16+ Years Experience</span>
            </div>
            <a href="appointment.html" class="btn-appointment">Book Appointment</a>
          </div>
        </div>
      </div>

      <!-- 7 -->
      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="doctor-card">
          <div class="doctor-image">
            <img src="assets/img/doctor_base_image.jpg" alt="Dr. Roshini Devi Krishnan" class="img-fluid">
            <div class="doctor-overlay">
              <div class="doctor-social">
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-envelope"></i></a>
              </div>
            </div>
          </div>
          <div class="doctor-content">
            <h4 class="doctor-name">Dr. Kavitha Subramaniam</h4>
            <span class="doctor-specialty">Pediatrics</span>
            <!--<p class="doctor-bio">Nulla porttitor accumsan tincidunt.</p>-->
            <div class="doctor-experience">
              <span class="experience-badge">19+ Years Experience</span>
            </div>
            <a href="appointment.html" class="btn-appointment">Book Appointment</a>
          </div>
        </div>
      </div>

      <!-- 8 -->
      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="doctor-card">
          <div class="doctor-image">
            <img src="assets/img/doctor_base_image.jpg" alt="Dr. Heng Zhen Xiang" class="img-fluid">
            <div class="doctor-overlay">
              <div class="doctor-social">
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-envelope"></i></a>
              </div>
            </div>
          </div>
          <div class="doctor-content">
            <h4 class="doctor-name">Dr. Noor Izzati Hassan</h4>
            <span class="doctor-specialty"> Pediatrics </span>
            <!--<p class="doctor-bio">Vestibulum ac diam sit amet quam vehicula elementum.</p>-->
            <div class="doctor-experience">
              <span class="experience-badge">15+ Years Experience</span>
            </div>
            <a href="appointment.html" class="btn-appointment">Book Appointment</a>
          </div>
        </div>
      </div>

      <!-- 9 -->
      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="doctor-card">
          <div class="doctor-image">
            <img src="assets/img/doctor_base_image.jpg" alt="Dr. Siti Mariam Abdullah" class="img-fluid">
            <div class="doctor-overlay">
              <div class="doctor-social">
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-envelope"></i></a>
              </div>
            </div>
          </div>
          <div class="doctor-content">
            <h4 class="doctor-name">Dr. Siti Mariam Abdullah</h4>
            <span class="doctor-specialty">Dermatology</span>
            <!--<p class="doctor-bio">Sed porttitor lectus nibh.</p>-->
            <div class="doctor-experience">
              <span class="experience-badge">22+ Years Experience</span>
            </div>
            <a href="appointment.html" class="btn-appointment">Book Appointment</a>
          </div>
        </div>
      </div>

       <!-- 10 -->
      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="doctor-card">
          <div class="doctor-image">
            <img src="assets/img/doctor_base_image.jpg" alt="Dr. Heng Zhen Xiang" class="img-fluid">
            <div class="doctor-overlay">
              <div class="doctor-social">
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-envelope"></i></a>
              </div>
            </div>
          </div>
          <div class="doctor-content">
            <h4 class="doctor-name">Dr. Roshini Devi Krishnan</h4>
            <span class="doctor-specialty"> Dermatology </span>
            <!--<p class="doctor-bio">Vestibulum ac diam sit amet quam vehicula elementum.</p>-->
            <div class="doctor-experience">
              <span class="experience-badge">16+ Years Experience</span>
            </div>
            <a href="appointment.html" class="btn-appointment">Book Appointment</a>
          </div>
        </div>
      </div>

       <!-- 11 -->
      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="doctor-card">
          <div class="doctor-image">
            <img src="assets/img/doctor_base_image.jpg" alt="Dr. Heng Zhen Xiang" class="img-fluid">
            <div class="doctor-overlay">
              <div class="doctor-social">
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-envelope"></i></a>
              </div>
            </div>
          </div>
          <div class="doctor-content">
            <h4 class="doctor-name">Dr. Muhammad Ali </h4>
            <span class="doctor-specialty"> Oncology </span>
            <!--<p class="doctor-bio">Vestibulum ac diam sit amet quam vehicula elementum.</p>-->
            <div class="doctor-experience">
              <span class="experience-badge">11+ Years Experience</span>
            </div>
            <a href="appointment.html" class="btn-appointment">Book Appointment</a>
          </div>
        </div>
      </div>

       <!-- 12 -->
      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="doctor-card">
          <div class="doctor-image">
            <img src="assets/img/doctor_base_image.jpg" alt="Dr. Heng Zhen Xiang" class="img-fluid">
            <div class="doctor-overlay">
              <div class="doctor-social">
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-envelope"></i></a>
              </div>
            </div>
          </div>
          <div class="doctor-content">
            <h4 class="doctor-name">Dr. Sharifah Hani Syed Jamal </h4>
            <span class="doctor-specialty"> Oncology </span>
            <!--<p class="doctor-bio">Vestibulum ac diam sit amet quam vehicula elementum.</p>-->
            <div class="doctor-experience">
              <span class="experience-badge">15+ Years Experience</span>
            </div>
            <a href="appointment.html" class="btn-appointment">Book Appointment</a>
          </div>
        </div>
      </div>

        <!-- 12 -->
      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="doctor-card">
          <div class="doctor-image">
            <img src="assets/img/doctor_base_image.jpg" alt="Dr. Sri Alisya Syantini" class="img-fluid">
            <div class="doctor-overlay">
              <div class="doctor-social">
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-envelope"></i></a>
              </div>
            </div>
          </div>
          <div class="doctor-content">
            <h4 class="doctor-name">Dr. Sri Alisya Syantini </h4>
            <span class="doctor-specialty"> Neurology </span>
            <!--<p class="doctor-bio">Vestibulum ac diam sit amet quam vehicula elementum.</p>-->
            <div class="doctor-experience">
              <span class="experience-badge">11+ Years Experience</span>
            </div>
            <a href="appointment.html" class="btn-appointment">Book Appointment</a>
          </div>
        </div>
      </div>

      <!-- 13 -->
      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="doctor-card">
          <div class="doctor-image">
            <img src="assets/img/doctor_base_image.jpg" alt="Dr. Heng Zhen Xiang" class="img-fluid">
            <div class="doctor-overlay">
              <div class="doctor-social">
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-envelope"></i></a>
              </div>
            </div>
          </div>
          <div class="doctor-content">
            <h4 class="doctor-name">Dr. Faiz Mukhriz Shah </h4>
            <span class="doctor-specialty"> Neurology </span>
            <!--<p class="doctor-bio">Vestibulum ac diam sit amet quam vehicula elementum.</p>-->
            <div class="doctor-experience">
              <span class="experience-badge">11+ Years Experience</span>
            </div>
            <a href="appointment.html" class="btn-appointment">Book Appointment</a>
          </div>
        </div>
      </div>

          <!-- 14 -->
      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="doctor-card">
          <div class="doctor-image">
            <img src="assets/img/doctor_base_image.jpg" alt="Dr. Amira Sofea Rahmat" class="img-fluid">
            <div class="doctor-overlay">
              <div class="doctor-social">
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-envelope"></i></a>
              </div>
            </div>
          </div>
          <div class="doctor-content">
            <h4 class="doctor-name">Dr. Amira Sofea Rahmat </h4>
            <span class="doctor-specialty"> Surgery </span>
            <!--<p class="doctor-bio">Vestibulum ac diam sit amet quam vehicula elementum.</p>-->
            <div class="doctor-experience">
              <span class="experience-badge">20+ Years Experience</span>
            </div>
            <a href="appointment.html" class="btn-appointment">Book Appointment</a>
          </div>
        </div>
      </div>

      <!-- 15 -->
      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="doctor-card">
          <div class="doctor-image">
            <img src="assets/img/doctor_base_image.jpg" alt="Dr. Lim Jia Hui " class="img-fluid">
            <div class="doctor-overlay">
              <div class="doctor-social">
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-envelope"></i></a>
              </div>
            </div>
          </div>
          <div class="doctor-content">
            <h4 class="doctor-name">Dr. Lim Jia Hui  </h4>
            <span class="doctor-specialty"> Surgery </span>
            <!--<p class="doctor-bio">Vestibulum ac diam sit amet quam vehicula elementum.</p>-->
            <div class="doctor-experience">
              <span class="experience-badge">10+ Years Experience</span>
            </div>
            <a href="appointment.html" class="btn-appointment">Book Appointment</a>
          </div>
        </div>
      </div>

       <!-- 16 -->
      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="doctor-card">
          <div class="doctor-image">
            <img src="assets/img/doctor_base_image.jpg" alt="Dr. Yasmin Shafina Othman " class="img-fluid">
            <div class="doctor-overlay">
              <div class="doctor-social">
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-envelope"></i></a>
              </div>
            </div>
          </div>
          <div class="doctor-content">
            <h4 class="doctor-name">Dr. Yasmin Shafina Othman </h4>
            <span class="doctor-specialty">  Emergency Care </span>
            <!--<p class="doctor-bio">Vestibulum ac diam sit amet quam vehicula elementum.</p>-->
            <div class="doctor-experience">
              <span class="experience-badge">14+ Years Experience</span>
            </div>
            <a href="appointment.html" class="btn-appointment">Book Appointment</a>
          </div>
        </div>
      </div>

       <!-- 17 -->
      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="doctor-card">
          <div class="doctor-image">
            <img src="assets/img/doctor_base_image.jpg" alt="Dr. Muhammad Faris Hakim " class="img-fluid">
            <div class="doctor-overlay">
              <div class="doctor-social">
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-envelope"></i></a>
              </div>
            </div>
          </div>
          <div class="doctor-content">
            <h4 class="doctor-name">Dr. Muhammad Faris Hakim </h4>
            <span class="doctor-specialty"> Emergency Care </span>
            <!--<p class="doctor-bio">Vestibulum ac diam sit amet quam vehicula elementum.</p>-->
            <div class="doctor-experience">
              <span class="experience-badge">14+ Years Experience</span>
            </div>
            <a href="appointment.html" class="btn-appointment">Book Appointment</a>
          </div>
        </div>
      </div>

      <!-- 18 -->
      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="doctor-card">
          <div class="doctor-image">
            <img src="assets/img/doctor_base_image.jpg" alt="Dr. Muhammad Faris Hakim " class="img-fluid">
            <div class="doctor-overlay">
              <div class="doctor-social">
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-envelope"></i></a>
              </div>
            </div>
          </div>
          <div class="doctor-content">
            <h4 class="doctor-name">Dr. Muhammad Faris Hakim </h4>
            <span class="doctor-specialty"> Emergency Care </span>
            <!--<p class="doctor-bio">Vestibulum ac diam sit amet quam vehicula elementum.</p>-->
            <div class="doctor-experience">
              <span class="experience-badge">14+ Years Experience</span>
            </div>
            <a href="appointment.html" class="btn-appointment">Book Appointment</a>
          </div>
        </div>
      </div>

        <!-- 20 -->
      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="doctor-card">
          <div class="doctor-image">
            <img src="assets/img/doctor_base_image.jpg" alt="Dr. Muhammad Faris Hakim " class="img-fluid">
            <div class="doctor-overlay">
              <div class="doctor-social">
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-envelope"></i></a>
              </div>
            </div>
          </div>
          <div class="doctor-content">
            <h4 class="doctor-name">Dr. Muhammad Faris Hakim </h4>
            <span class="doctor-specialty"> Emergency Care </span>
            <!--<p class="doctor-bio">Vestibulum ac diam sit amet quam vehicula elementum.</p>-->
            <div class="doctor-experience">
              <span class="experience-badge">14+ Years Experience</span>
            </div>
            <a href="appointment.html" class="btn-appointment">Book Appointment</a>
          </div>
        </div>
      </div>

        <!-- 20 -->
      <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="doctor-card">
          <div class="doctor-image">
            <img src="assets/img/doctor_base_image.jpg" alt="Dr. Muhammad Faris Hakim " class="img-fluid">
            <div class="doctor-overlay">
              <div class="doctor-social">
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-envelope"></i></a>
              </div>
            </div>
          </div>
          <div class="doctor-content">
            <h4 class="doctor-name">Dr. Muhammad Faris Hakim </h4>
            <span class="doctor-specialty"> Emergency Care </span>
            <!--<p class="doctor-bio">Vestibulum ac diam sit amet quam vehicula elementum.</p>-->
            <div class="doctor-experience">
              <span class="experience-badge">14+ Years Experience</span>
            </div>
            <a href="appointment.html" class="btn-appointment">Book Appointment</a>
          </div>
        </div>
      </div>

    </div>
  </div> 

</section>
<!-- /Doctors Section -->

  </main>

@endsection