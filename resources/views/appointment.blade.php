@extends('master.clinic_layout')
@section('content')
<body class="appointment-page">
  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="bi bi-house"></i> Home</a></li>
            <li class="breadcrumb-item active current">Appointment</li>
          </ol>
        </nav>
      </div>

      <div class="title-wrapper">
        <h1>Appointment</h1>
        <p>Schedule your appointment with Poliklinik Alisya easily and securely. Our medical team is ready to provide quality care tailored to your health needs</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Appointmnet Section -->
    <section id="appointmnet" class="appointmnet section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <!-- Appointment Info -->
          <div class="col-lg-6">
            <div class="appointment-info">
              <h3>Quick &amp; Easy Online Booking</h3>
              <p class="mb-4">Book your appointment in just a few simple steps. Our healthcare professionals are committed to providing timely and reliable medical care for every patient.</p>

              <div class="info-items">
                <div class="info-item d-flex align-items-center mb-3" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-wrapper me-3">
                    <i class="bi bi-calendar-check"></i>
                  </div>
                  <div>
                    <h5>Flexible Scheduling</h5>
                    <p class="mb-0">Choose from available appointment slots that suit your schedule and clinic operating hours.</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex align-items-center mb-3" data-aos="fade-up" data-aos-delay="250">
                  <div class="icon-wrapper me-3">
                    <i class="bi bi-stopwatch"></i>
                  </div>
                  <div>
                    <h5>Quick Response</h5>
                    <p class="mb-0">Receive appointment confirmation shortly after submitting your booking request.</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex align-items-center mb-3" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-wrapper me-3">
                    <i class="bi bi-shield-check"></i>
                  </div>
                  <div>
                    <h5>Professional Medical Care</h5>
                    <p class="mb-0">Our experienced medical officers provide trusted and patient-centered healthcare services.</p>
                  </div>
                </div><!-- End Info Item -->
              </div>

              <div class="emergency-contact mt-4" data-aos="fade-up" data-aos-delay="350">
                <div class="emergency-card p-3">
                  <h6 class="mb-2"><i class="bi bi-telephone-fill me-2"></i>Emergency Hotline</h6>
                  <p class="mb-0">Call <strong>+1 (555) 911-4567</strong> for urgent medical assistance</p>
                </div>
              </div>

            </div>
          </div><!-- End Appointment Info -->

          <!-- Appointment Form -->
          <div class="col-lg-6">
            <div class="appointment-form-wrapper" data-aos="fade-up" data-aos-delay="200">
              <form action="{{ route('appointment.store') }}" method="POST" class="appointment-form">
                @csrf
                <div class="row gy-3">

                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Your Full Name" required="">
                  </div>

                  <div class="col-md-6">
                    <input type="email" name="email" class="form-control" placeholder="Your Email" required="">
                  </div>

                  <div class="col-md-6">
                    <input type="tel" name="phone" class="form-control" placeholder="Your Phone Number" required="">
                  </div>

                 
                  <div class="col-md-6">
                    <input type="date" name="date" class="form-control" required="">
                  </div>

                  <div class="col-12">
                    <textarea class="form-control" name="message" rows="5" placeholder="Please describe your symptoms or reason for visit (optional)"></textarea>
                  </div>

                  <div class="col-12">
                    
                    <button type="submit" class="btn btn-appointment w-100">
                      <i class="bi bi-calendar-plus me-2"></i>Book Appointment
                    </button>
                  </div>

                </div>
              </form>
              @if(session('success'))
                <div class="alert alert-success mt-4 text-center">
                {{ session('success') }}
                </div>
              @endif
            </div>
          </div><!-- End Appointment Form -->

        </div>

        <!-- Process Steps -->
        <div class="process-steps mt-5" data-aos="fade-up" data-aos-delay="300">
          <div class="row text-center gy-4">
            <div class="col-lg-3 col-md-6">
              <div class="step-item">
                <div class="step-number">1</div>
                <div class="step-icon">
                  <i class="bi bi-person-fill"></i>
                </div>
                <h5>Fill Details</h5>
                <p>Enter your name, contact number, email address, and briefly describe your symptoms or reason for visits.</p>
              </div>
            </div><!-- End Step -->

            <div class="col-lg-3 col-md-6">
              <div class="step-item">
                <div class="step-number">2</div>
                <div class="step-icon">
                  <i class="bi bi-calendar-event"></i>
                </div>
                <h5>Select Appointment Date</h5>
                <p>Choose your preferred appointment date based on the clinic's available schedule.</p>
              </div>
            </div><!-- End Step -->

            <div class="col-lg-3 col-md-6">
              <div class="step-item">
                <div class="step-number">3</div>
                <div class="step-icon">
                  <i class="bi bi-check-circle"></i>
                </div>
                <h5>Appointment Confirmation</h5>
                <p>Receive confirmation of your appointment request via email after review by our clinic staff.</p>
              </div>
            </div><!-- End Step -->

            <div class="col-lg-3 col-md-6">
              <div class="step-item">
                <div class="step-number">4</div>
                <div class="step-icon">
                  <i class="bi bi-heart-pulse"></i>
                </div>
                <h5>Visit the Clinic</h5>
                <p>Attend you appointment at the scheduled time and receive medical consultation from our healthcare provider.</p>
              </div>
            </div><!-- End Step -->

          </div>
        </div><!-- End Process Steps -->

      </div>

    </section><!-- /Appointmnet Section -->

  </main>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

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