@extends('master.clinic_layout')
@section('content')
<body class="index-page">

<main class="main">
    <!-- Page Title -->
    <div class="page-title">
        <div class="breadcrumbs">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                </ol>
            </nav>
        </div>

        <div class="title-wrapper">
            <h1 class="page-heading">About</h1>
            <p class="page-subheading">At Poliklinik Alisya, every patient is treated with dedication, respect, and genuine care. We focus on creating comfortable experience from the moment you step in combining attentive service, clear communication, and personalized treatment.</p>
        </div>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="about section">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="content">
                        <h2 class="about-heading">Committed to Excellence in Healthcare</h2>
                        <p class="about-text">At Poliklinik Alisya, we believe every patient deserves care that is attentive, respectful, and genuine. From the moment you arrive, our team strives to make you feel at ease with warm service, clear communication, and personalized treatment suited to your needs.</p>
                        <p class="about-text">We are committed to building long-term relationships with our patients by listening closely to your concerns, guiding your health decisions, and offering consistent follow-up and preventive care. Our goal is not only to treat illnesses but to support your overall well-being with a healthcare experience you can trust.</p>

                        <div class="stats-container" data-aos="fade-up" data-aos-delay="200">
                            <div class="row gy-4">
                                <div class="col-sm-6 col-lg-12 col-xl-6">
                                    <div class="stat-item">
                                        <div class="stat-number">
                                            <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>+
                                        </div>
                                        <div class="stat-label">Years of Experience</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-12 col-xl-6">
                                    <div class="stat-item">
                                        <div class="stat-number">
                                            <span data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="2" class="purecounter"></span>+
                                        </div>
                                        <div class="stat-label">Patients Treated</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cta-buttons" data-aos="fade-up" data-aos-delay="300">
                            <a href="#" class="btn-primary">Meet Our Doctors</a>
                            <a href="#" class="btn-secondary">View Our Services</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="image-section" data-aos="fade-left" data-aos-delay="200">
                        <div class="main-image">
                            <img src="assets/img/health/about1.png" alt="Healthcare consultation" class="img-fluid">
                        </div>
                        <div class="image-grid">
                            <div class="grid-item">
                                <img src="assets/img/health/about2.png" alt="Medical facility" class="img-fluid">
                            </div>
                            <div class="grid-item">
                                <img src="assets/img/health/about3.png" alt="Medical staff" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="certifications-section" data-aos="fade-up" data-aos-delay="400">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-header">
                            <h3 class="certifications-heading">Introducing Poliklinik Alisya’s Official Panels</h3>
                            <p class="certifications-text">We are proud to serve as an authorised panel clinic for leading organisations and insurance providers.</p>
                        </div>
                        <div class="certifications-grid">
                            <div class="certification-item">
                                <img src="assets/img/clients/c1.png" alt="JCI Accreditation" class="img-fluid">
                            </div>
                            <div class="certification-item">
                                <img src="assets/img/clients/c2.png" alt="NABH Certification" class="img-fluid">
                            </div>
                            <div class="certification-item">
                                <img src="assets/img/clients/c3.png" alt="ISO 9001" class="img-fluid">
                            </div>
                            <div class="certification-item">
                                <img src="assets/img/clients/c4.png" alt="CAP Accreditation" class="img-fluid">
                            </div>
                            <div class="certification-item">
                                <img src="assets/img/clients/c5.png" alt="Medical Board" class="img-fluid">
                            </div>
                            <div class="certification-item">
                                <img src="assets/img/clients/c6.png" alt="Healthcare Association" class="img-fluid">
                            </div>
                            <div class="certification-item">
                                <img src="assets/img/clients/c7.png" alt="Healthcare Association" class="img-fluid">
                            </div>
                            <div class="certification-item">
                                <img src="assets/img/clients/c8.png" alt="Healthcare Association" class="img-fluid">
                            </div>
                            <div class="certification-item">
                                <img src="assets/img/clients/c9.png" alt="Healthcare Association" class="img-fluid">
                            </div>
                            <div class="certification-item">
                                <img src="assets/img/clients/c10.png" alt="Healthcare Association" class="img-fluid">
                            </div>
                            <div class="certification-item">
                                <img src="assets/img/clients/c11.png" alt="Healthcare Association" class="img-fluid">
                            </div>
                            <div class="certification-item">
                                <img src="assets/img/clients/c12.png" alt="Healthcare Association" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /About Section -->
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