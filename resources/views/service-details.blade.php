@extends('master.clinic_layout')
@section('content')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/mainpage"><i class="bi bi-house"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="/services">Services</a></li>
            <li class="breadcrumb-item active current">Service Details</li>
          </ol>
        </nav>
      </div>

      <div class="title-wrapper">
        <h1>Service Details</h1>
        <p>Discover the services we offer, each thoughtfully crafted to provide you with reliable care and a comfortable healthcare experience.</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details 2 Section -->
    <section id="service-details-2" class="service-details-2 section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-image">
              <img src="assets/img/health/cardiology-3.webp" alt="Cardiology Services" class="img-fluid">
              <div class="service-tag">
                <span>Specialized Care</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="service-content">

            <section id="consultation" class="service-section">
              <h2>General Consultation</h2>
              <p class="service-tagline">Personalized medical consultations for everyday health concerns</p>

              <p>Our general consultation services provide comprehensive medical assessment for common illnesses, ongoing health conditions, and preventive care. Our doctors take time to understand your symptoms and medical history to ensure accurate diagnosis and appropriate treatment.</p>

              <p>We focus on patient-centered care, offering clear explanations, professional advice, and continuous health monitoring to support your overall well-being.</p>

              <div class="service-features">
                <h4>Our Services Include:</h4>
                <ul>
                  <li><i class="bi bi-check-circle"></i> Comprehensive health assessments</li>
                  <li><i class="bi bi-check-circle"></i> Preventive care planning</li>
                  <li><i class="bi bi-check-circle"></i> Diagnosis and treatment of common illnesses</li>
                  <li><i class="bi bi-check-circle"></i> Health monitoring and follow-up care</li>
                </ul>
              </div>
            </section>

            <section id="vaccination" class="service-section">
              <h2>Vaccination Services</h2>
              <p class="service-tagline">Safe and effective immunization for all age groups</p>

              <p>Our vaccination services help protect individuals and families from preventable diseases through safe and reliable immunization programs. Vaccines are administered according to recommended medical guidelines in a clean and controlled clinical environment.</p>

              <p>Our healthcare professionals ensure proper consultation before vaccination and provide post-vaccination guidance for your safety and peace of mind.</p>

              <div class="service-features">
                <h4>Our Services Include:</h4>
                <ul>
                  <li><i class="bi bi-check-circle"></i> Adult immunizations</li>
                  <li><i class="bi bi-check-circle"></i> Travel-related vaccinations</li>
                  <li><i class="bi bi-check-circle"></i> Routine vaccinations</li>
                  <li><i class="bi bi-check-circle"></i> Flu and seasonal vaccines</li>
                </ul>
              </div>
            </section>

            <section id="maternal" class="service-section">
              <h2> Maternal Health</h2>
              <p class="service-tagline">Dedicated care for mothers before and after childbirth</p>

              <p>Our maternal health services are designed to support women throughout pregnancy and the postnatal period. We provide professional medical care, guidance, and monitoring to ensure the health and well-being of both mother and baby.</p>
              <p>Our clinic offers a supportive and comfortable environment, focusing on safety, education, and personalized care.</p>

              <div class="service-features">
                <h4>Our Services Include:</h4>
                <ul>
                  <li><i class="bi bi-check-circle"></i> Prenatal medical care</li>
                  <li><i class="bi bi-check-circle"></i> Pregnancy health monitoring</li>
                  <li><i class="bi bi-check-circle"></i> Postnatal care and follow-up</li>
                  <li><i class="bi bi-check-circle"></i> Maternal health education</li>
                </ul>
              </div>
            </section>

            <section id="family" class="service-section">
              <h2> Family Medicine</h2>
              <p class="service-tagline">Comprehensive healthcare for every stage of life</p>

              <p>Family medicine services provide continuous and holistic medical care for individuals and families of all ages. Our doctors focus on long-term health management, prevention, and treatment of both acute and chronic conditions.</p>
              <p>We aim to build long-term doctor-patient relationships to support overall family health.</p>

              <div class="service-features">
                <h4>Our Services Include:</h4>
                <ul>
                  <li><i class="bi bi-check-circle"></i> Medical care for all age groups</li>
                  <li><i class="bi bi-check-circle"></i> Chronic disease management</li>
                  <li><i class="bi bi-check-circle"></i> Wellness and preventive programs</li>
                  <li><i class="bi bi-check-circle"></i> Long-term health monitoring</li>
                </ul>
              </div>
            </section>

             <div class="service-actions">
                <a href="/appointment" class="btn-primary">Schedule Consultation</a>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Service Details 2 Section -->

  </main>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const service = "{{ request('service') }}";

        document.querySelectorAll('.service-section').forEach(section => {
            section.style.display = 'none';
        });

        if (service) {
            const activeSection = document.getElementById(service);
            if (activeSection) {
                activeSection.style.display = 'block';
            }
        }
    });
</script>
@endsection