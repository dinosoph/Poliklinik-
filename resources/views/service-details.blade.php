@extends('master.clinic_layout')
@section('content')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><i class="bi bi-house"></i> Home</a></li>
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

        <section id="consultation" class="service-section">
        <div class="row gy-5">

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-image">
              <img src="assets/img/health/consultation-3.webp" alt="Cardiology Services" class="img-fluid">
              <div class="service-tag">
                <span>Primary Care</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="service-content">
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
              <div class="service-actions">
                <a href="/appointment" class="btn-primary">Schedule Consultation</a>
              </div>
            </section>

            <section id="vaccination" class="service-section">
              <div class="row gy-5">

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-image">
              <img src="assets/img/health/vaccination.png" alt="Vaccination Services" class="img-fluid">
              <div class="service-tag">
                <span>Primary Care</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="service-content">
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
              <div class="service-actions">
                <a href="/appointment" class="btn-primary">Schedule Consultation</a>
              </div>
            </section>

            <section id="maternal" class="service-section">
              <div class="row gy-5">

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-image">
              <img src="assets/img/health/maternal health.png" alt="Maternal Health" class="img-fluid">
              <div class="service-tag">
                <span>Primary Care</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="service-content">
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
              <div class="service-actions">
                <a href="/appointment" class="btn-primary">Schedule Consultation</a>
              </div>
            </section>

            <section id="family" class="service-section">
              <div class="row gy-5">

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-image">
              <img src="assets/img/health/family.png" alt="family medicine" class="img-fluid">
              <div class="service-tag">
                <span>Primary Care</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="service-content">
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
              <div class="service-actions">
                <a href="/appointment" class="btn-primary">Schedule Consultation</a>
              </div>
            </section>



            <section id="cardiology" class="service-section">
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
              <h2> Cardiology</h2>
              <p class="service-tagline">Focused care for heart and cardiovascular health</p>

              <p>Our cardiology services focus on the assessment and management of heart-related conditions through clinical evaluation and preventive screening. Patients receive professional consultation to identify cardiovascular risks and maintain long-term heart health.</p>
              <p>Advanced hospital-based procedures are referred to specialist centers when necessary.</p>

              <div class="service-features">
                <h4>Our Services Include:</h4>
                <ul>
                  <li><i class="bi bi-check-circle"></i> Cardiovascular risk assessment</li>
                  <li><i class="bi bi-check-circle"></i> Heart health screening</li>
                  <li><i class="bi bi-check-circle"></i> Ongoing heart condition monitoring</li>
                  <li><i class="bi bi-check-circle"></i> Referral to specialist care if required</li>
                </ul>
              </div>
              <div class="service-actions">
                <a href="/appointment" class="btn-primary">Schedule Consultation</a>
              </div>
            </section>

            <section id="neurology" class="service-section">
              <div class="row gy-5">

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-image">
              <img src="assets/img/health/neurology-4.webp" alt="Neurology" class="img-fluid">
              <div class="service-tag">
                <span>Specialized Care</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="service-content">
              <h2> Neurology</h2>
              <p class="service-tagline">Assessment and care for neurological conditions</p>

              <p>Our neurology services provide clinical evaluation and management of conditions affecting the brain and nervous system. We focus on early detection, symptom management, and appropriate referral for specialized treatment when needed.</p>
              <p>Patient safety and clear communication are central to our care approach.</p>

              <div class="service-features">
                <h4>Our Services Include:</h4>
                <ul>
                  <li><i class="bi bi-check-circle"></i> Neurological assessments</li>
                  <li><i class="bi bi-check-circle"></i> Management of common neurological symptoms</li>
                  <li><i class="bi bi-check-circle"></i> Stroke risk evaluation</li>
                  <li><i class="bi bi-check-circle"></i> Referral to neurology specialists</li>
                </ul>
              </div>
              <div class="service-actions">
                <a href="/appointment" class="btn-primary">Schedule Consultation</a>
              </div>
            </section>

            <section id="orthopedics" class="service-section">
              <div class="row gy-5">

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-image">
              <img src="assets/img/health/orthopedics-4.webp" alt="Orthopedics" class="img-fluid">
              <div class="service-tag">
                <span>Specialized Care</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="service-content">
              <h2> Orthopedics</h2>
              <p class="service-tagline">Care for bone, joint, and muscle conditions</p>

              <p>Our orthopedic services focus on diagnosing and managing musculoskeletal conditions that affect mobility and quality of life. Treatment plans aim to reduce pain, improve movement, and prevent further injury.</p>
              <p>Patients requiring surgical intervention are referred to partner hospitals.</p>

              <div class="service-features">
                <h4>Our Services Include:</h4>
                <ul>
                  <li><i class="bi bi-check-circle"></i> Joint and muscle assessments</li>
                  <li><i class="bi bi-check-circle"></i> Sports-related injury care</li>
                  <li><i class="bi bi-check-circle"></i> Pain management</li>
                  <li><i class="bi bi-check-circle"></i> Rehabilitation and referral services</li>
                </ul>
              </div>
              <div class="service-actions">
                <a href="/appointment" class="btn-primary">Schedule Consultation</a>
              </div>
            </section>

            <section id="oncology" class="service-section">
              <div class="row gy-5">

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-image">
              <img src="assets/img/health/oncology-4.webp" alt="Oncology" class="img-fluid">
              <div class="service-tag">
                <span>Specialized Care</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="service-content">
              <h2> Oncology</h2>
              <p class="service-tagline">Supportive care for patients with cancer-related conditions</p>

              <p>Our oncology-related services focus on early assessment, medical support, and coordination of care for patients with cancer concerns. We assist in monitoring, consultation, and referral to specialized oncology centers for advanced treatment.</p>
              <p>We prioritize compassionate care and patient guidance throughout the process.</p>

              <div class="service-features">
                <h4>Our Services Include:</h4>
                <ul>
                  <li><i class="bi bi-check-circle"></i> Initial cancer assessments</li>
                  <li><i class="bi bi-check-circle"></i> Medical support and monitoring</li>
                  <li><i class="bi bi-check-circle"></i> Treatment coordination and referrals</li>
                  <li><i class="bi bi-check-circle"></i> Ongoing patient support</li>
                </ul>
              </div>
              <div class="service-actions">
                <a href="/appointment" class="btn-primary">Schedule Consultation</a>
              </div>
            </section>


            <section id="laboratory" class="service-section">
              <div class="row gy-5">

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-image">
              <img src="assets/img/health/laboratorytesting.png" alt="Laboratory Testing" class="img-fluid">
              <div class="service-tag">
                <span>Diagnostics</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="service-content">
              <h2> Laboratory Testing</h2>
              <p class="service-tagline">Accurate laboratory tests for reliable diagnosis</p>

              <p>Our laboratory testing services support medical diagnosis through accurate and timely testing.</p>
              <p>Samples are handled professionally to ensure reliable results that assist doctors in making informed treatment decisions.</p>

              <div class="service-features">
                <h4>Our Services Include:</h4>
                <ul>
                  <li><i class="bi bi-check-circle"></i> Blood analysis</li>
                  <li><i class="bi bi-check-circle"></i> Basic pathology services</li>
                  <li><i class="bi bi-check-circle"></i> Health screening tests</li>
                  <li><i class="bi bi-check-circle"></i> Timely test results</li>
                </ul>
              </div>
              <div class="service-actions">
                <a href="/appointment" class="btn-primary">Schedule Consultation</a>
              </div>
            </section>

            <section id="imaging" class="service-section">
              <div class="row gy-5">

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-image">
              <img src="assets/img/health/imaging.png" alt="Diagnostic Imaging" class="img-fluid">
              <div class="service-tag">
                <span>Diagnostics</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="service-content">
              <h2> Diagnostic Imaging</h2>
              <p class="service-tagline">Essential imaging services for medical evaluation</p>

              <p>Our diagnostic imaging services assist doctors in evaluating medical conditions using safe and non-invasive imaging techniques.</p>
              <p>Imaging services may be provided on-site or through trusted partner facilities.</p>

              <div class="service-features">
                <h4>Our Services Include:</h4>
                <ul>
                  <li><i class="bi bi-check-circle"></i> Ultrasound services</li>
                  <li><i class="bi bi-check-circle"></i> X-ray imaging</li>
                  <li><i class="bi bi-check-circle"></i> ECG and basic diagnostic tests</li>
                  <li><i class="bi bi-check-circle"></i> Imaging referrals when required</li>
                </ul>
              </div>
              <div class="service-actions">
                <a href="/appointment" class="btn-primary">Schedule Consultation</a>
              </div>
            </section>

             
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