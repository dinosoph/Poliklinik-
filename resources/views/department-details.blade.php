@extends('master.clinic_layout')
@section('content')

<!-- Inline CSS for :target and smooth scroll -->
<style>
.department-details {
    display: none;
}

.department-details:target {
    display: block;
}

.department-details:first-of-type {
    display: block;
}

html {
    scroll-behavior: smooth;
}
</style>

<main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="bi bi-house"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="/">Department</a></li>
            <li class="breadcrumb-item active current">Department Details</li>
          </ol>
        </nav>
      </div>

      <div class="title-wrapper">
        <h1>Department Details</h1>
        <!-- p>Providing comprehensive cardiovascular care with advanced diagnostics and treatment options. Our team focuses on heart health and long-term patient wellbeing.</p -->
      </div>
    </div><!-- End Page Title -->

    <!-- Cardiology Department Details Section -->
   <section id="cardiology" class="department-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-8 mx-auto text-center intro" data-aos="fade-up" data-aos-delay="200">
            <h2>Cardiology Department</h2>
            <div class="divider mx-auto"></div>
            <p class="lead">Providing comprehensive cardiovascular care with advanced diagnostics and treatment options. Our expert team manages heart conditions, performs life-saving procedures, and focuses on long-term cardiac health for every patient.</p>
          </div>
        </div>

        <div class="department-overview mt-5">
          <div class="row gy-4">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="300">
              <div class="department-image">
                <img src="assets/img/health/cardiology-1.webp" alt="Cardiology Department" class="img-fluid rounded-lg">
              </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
              <div class="department-services">
                <div class="service-card">
                  <div class="icon"><i class="bi bi-heart-pulse"></i></div>
                  <div class="content">
                    <h4>Comprehensive Cardiac Care</h4>
                    <p>Our team delivers personalized cardiac care for patients with heart disease, ensuring safe and effective treatment plans.</p>
                  </div>
                </div>

                <div class="service-card">
                  <div class="icon"><i class="bi bi-activity"></i></div>
                  <div class="content">
                    <h4>Advanced Diagnostics</h4>
                    <p>State-of-the-art diagnostic tools help identify cardiovascular issues early for timely intervention and improved outcomes.</p>
                  </div>
                </div>

                <div class="service-card">
                  <div class="icon"><i class="bi bi-person-heart"></i></div>
                  <div class="content">
                    <h4>Personalized Treatment Plans</h4>
                    <p>Each patient receives an individualized plan, combining medical therapy, interventions, and lifestyle guidance for optimal heart health.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="key-services mt-5" data-aos="fade-up" data-aos-delay="500">
          <div class="row gy-4">
            <div class="col-lg-5" data-aos="fade-right" data-aos-delay="600">
              <h3>Our Specialized Services</h3>
                <p>We provide advanced treatments and personalized programs designed to maintain and restore heart health for every patient.</p>
                  <ul class="service-list">
                    <li><i class="bi bi-check-circle-fill"></i> Comprehensive cardiac evaluations</li>
                    <li><i class="bi bi-check-circle-fill"></i> Advanced interventional procedures</li>
                    <li><i class="bi bi-check-circle-fill"></i> Heart failure management plans</li>
                    <li><i class="bi bi-check-circle-fill"></i> Preventive cardiology consultations</li>
                    <li><i class="bi bi-check-circle-fill"></i> Cardiac rehabilitation programs</li>
                  </ul>
            </div>
            <div class="col-lg-7" data-aos="fade-left" data-aos-delay="600">
              <div class="cta-wrapper">
                <div class="cta-content">
                  <h3>Expert Care When You Need It Most</h3>
                  <p>Our cardiology team is committed to providing timely, effective, and compassionate care for every patient with heart-related concerns.</p>
                  <div class="cta-buttons">
                    <a href="/appointment" class="btn btn-primary">Book Appointment</a>
                    <a href="/services" class="btn btn-outline">Learn More</a>
                  </div>
                </div>
                <div class="cta-image">
                  <img src="assets/img/health/cardiology-3.webp" alt="Cardiology Team" class="img-fluid rounded-lg">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Department Details Section -->

    <!-- Oncology Department Details Section -->
   <section id="oncology" class="department-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-8 mx-auto text-center intro" data-aos="fade-up" data-aos-delay="200">
            <h2>Oncology Department</h2>
            <div class="divider mx-auto"></div>
            <p class="lead">Providing compassionate, multidisciplinary cancer care with access to advanced treatments, clinical trials, and personalized therapy plans. Our dedicated oncology team supports patients at every stage of their cancer journey.</p>
          </div>
        </div>

        <div class="department-overview mt-5">
          <div class="row gy-4">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="300">
              <div class="department-image">
                <img src="assets/img/health/oncology-5.jpg" alt="Oncology Department" class="img-fluid rounded-lg">
              </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
              <div class="department-services">
                <div class="service-card">
                  <div class="icon"><i class="bi bi-heart-pulse"></i></div>
                  <div class="content">
                    <<h4>Comprehensive Cancer Care</h4>
                    <p>Holistic treatment for all types of cancers, including chemotherapy, radiotherapy, and surgical oncology, tailored to each patient’s needs.</p>
                  </div>
                </div>

                <div class="service-card">
                  <div class="icon"><i class="bi bi-activity"></i></div>
                  <div class="content">
                    <h4>Advanced Diagnostics</h4>
                    <p>Cutting-edge imaging and lab diagnostics to accurately detect, stage, and monitor cancer progression for effective treatment planning.</p>
                  </div>
                </div>

                <div class="service-card">
                  <div class="icon"><i class="bi bi-person-heart"></i></div>
                  <div class="content">
                    <h4>Personalized Treatment Plans</h4>
                    <p>Each patient receives a customized therapy plan, combining medical treatments, supportive care, and counseling for optimal outcomes.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="key-services mt-5" data-aos="fade-up" data-aos-delay="500">
          <div class="row gy-4">
            <div class="col-lg-5" data-aos="fade-right" data-aos-delay="600">
              <h3>Our Specialized Services</h3>
              <p>Offering advanced therapies, personalized care, and supportive programs to help patients navigate their cancer journey with dignity and hope.</p>
              <ul class="service-list">
                <li><i class="bi bi-check-circle-fill"></i> Chemotherapy & Radiotherapy</li>
                <li><i class="bi bi-check-circle-fill"></i> Surgical Oncology</li>
                <li><i class="bi bi-check-circle-fill"></i> Immunotherapy & Targeted Treatments</li>
                <li><i class="bi bi-check-circle-fill"></i> Supportive & Palliative Care</li>
                <li><i class="bi bi-check-circle-fill"></i> Clinical Trials & Research Programs</li>
              </ul>
            </div>
            <div class="col-lg-7" data-aos="fade-left" data-aos-delay="600">
              <div class="cta-wrapper">
                <div class="cta-content">
                  <h3>Compassionate Care for Every Patient</h3>
                  <p>Our oncology specialists guide each patient through diagnosis, treatment, and recovery with expert care and emotional support.</p>
                  <div class="cta-buttons">
                    <a href="/appointment" class="btn btn-primary">Book Appointment</a>
                    <a href="/services" class="btn btn-outline">Learn More</a>
                  </div>
                </div>
                <div class="cta-image">
                  <img src="assets/img/health/cardiology-3.webp" alt="Cardiology Team" class="img-fluid rounded-lg">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Oncology Department Details Section -->
    
      <!-- Neurology Department Details Section -->
   <section id="neurology" class="department-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-8 mx-auto text-center intro" data-aos="fade-up" data-aos-delay="200">
            <h2>Neurology Department</h2>
            <div class="divider mx-auto"></div>
            <p class="lead">Providing expert care for brain, spine, and nervous system conditions, our Neurology Department offers advanced diagnostics and personalized treatment plans for patients of all ages.</p>
          </div>
        </div>

        <div class="department-overview mt-5">
          <div class="row gy-4">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="300">
              <div class="department-image">
                <img src="assets/img/health/neurology-5.jpg" alt="Neurology Department" class="img-fluid rounded-lg">
              </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
              <div class="department-services">
                <div class="service-card">
                  <div class="icon"><i class="bi bi-heart-pulse"></i></div>
                  <div class="content">
                    <h4>Neurological Consultations</h4>
                    <p>Expert evaluation and management of brain, spine, and nervous system disorders.</p>
                  </div>
                </div>

                <div class="service-card">
                  <div class="icon"><i class="bi bi-activity"></i></div>
                  <div class="content">
                    <h4>Advanced Diagnostics</h4>
                    <p>Comprehensive neuroimaging and testing to accurately diagnose neurological conditions.</p>
                  </div>
                </div>

                <div class="service-card">
                  <div class="icon"><i class="bi bi-person-heart"></i></div>
                  <div class="content">
                    <h4>Personalized Treatment Plans</h4>
                    <p>Tailored care plans for neurological disorders, including therapy and rehabilitation programs.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="key-services mt-5" data-aos="fade-up" data-aos-delay="500">
          <div class="row gy-4">
            <div class="col-lg-5" data-aos="fade-right" data-aos-delay="600">
              <h3>Our Specialized Services</h3>
              <p>We provide comprehensive neurological care, from initial consultations to advanced interventions, all tailored to each patient’s unique needs.</p>
              <ul class="service-list">
                <li><i class="bi bi-check-circle-fill"></i> Brain and spinal cord evaluations</li>
                <li><i class="bi bi-check-circle-fill"></i> Epilepsy and seizure management</li>
                <li><i class="bi bi-check-circle-fill"></i> Stroke treatment and rehabilitation</li>
                <li><i class="bi bi-check-circle-fill"></i> Neurodegenerative disorder care</li>
                <li><i class="bi bi-check-circle-fill"></i> Headache and migraine management</li>
              </ul>
            </div>
            <div class="col-lg-7" data-aos="fade-left" data-aos-delay="600">
              <div class="cta-wrapper">
                <div class="cta-content">
                  <h3>Expert Care When You Need It Most</h3>
                  <p>Our team of neurologists and specialists deliver compassionate care using the latest diagnostic and treatment technologies.</p>
                  <div class="cta-buttons">
                    <a href="/appointment" class="btn btn-primary">Book Appointment</a>
                    <a href="/services" class="btn btn-outline">Learn More</a>
                  </div>
                </div>
                <div class="cta-image">
                  <img src="assets/img/health/cardiology-3.webp" alt="Cardiology Team" class="img-fluid rounded-lg">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Neurology Department Details Section -->

    <!-- Dermatology Department Details Section -->
   <section id="dermatology" class="department-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-8 mx-auto text-center intro" data-aos="fade-up" data-aos-delay="200">
            <h2>Dermatology Department</h2>
            <div class="divider mx-auto"></div>
            <p class="lead">Our Dermatology Department specializes in diagnosing and treating skin, hair, and nail conditions, offering personalized care and advanced therapies for all ages.</p>
          </div>
        </div>

        <div class="department-overview mt-5">
          <div class="row gy-4">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="300">
              <div class="department-image">
                <img src="assets/img/health/dermatology-5.jpg" alt="Dermatology Department" class="img-fluid rounded-lg">
              </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
              <div class="department-services">
                <div class="service-card">
                  <div class="icon"><i class="bi bi-heart-pulse"></i></div>
                  <div class="content">
                    <h4>Skin Consultations</h4>
                    <p>Expert evaluation and management of skin, hair, and nail disorders for patients of all ages.</p>
                  </div>
                </div>

                <div class="service-card">
                  <div class="icon"><i class="bi bi-activity"></i></div>
                  <div class="content">
                    <h4>Advanced Diagnostics</h4>
                    <p>Comprehensive testing and imaging for accurate skin condition diagnosis and treatment planning.</p>
                  </div>
                </div>

                <div class="service-card">
                  <div class="icon"><i class="bi bi-person-heart"></i></div>
                  <div class="content">
                    <h4>Personalized Treatment Plans</h4>
                    <p>Custom care plans including dermatological procedures, therapies, and preventive skin care.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="key-services mt-5" data-aos="fade-up" data-aos-delay="500">
          <div class="row gy-4">
            <div class="col-lg-5" data-aos="fade-right" data-aos-delay="600">
              <h3>Our Specialized Services</h3>
              <p>We provide comprehensive dermatological care, including diagnosis, treatment, and preventive skin health programs tailored for every patient.</p>
              <ul class="service-list">
                <li><i class="bi bi-check-circle-fill"></i> Acne and skin disorder treatments</li>
                <li><i class="bi bi-check-circle-fill"></i> Cosmetic dermatology procedures</li>
                <li><i class="bi bi-check-circle-fill"></i> Skin cancer screenings and care</li>
                <li><i class="bi bi-check-circle-fill"></i> Hair and nail disorder management</li>
                <li><i class="bi bi-check-circle-fill"></i> Preventive skin health consultations</li>
              </ul>
            </div>
            <div class="col-lg-7" data-aos="fade-left" data-aos-delay="600">
              <div class="cta-wrapper">
                <div class="cta-content">
                  <h3>Expert Care When You Need It Most</h3>
                  <p>Our dermatology team combines advanced technology and personalized treatment to ensure optimal skin health.</p>
                  <div class="cta-buttons">
                    <a href="/appointment" class="btn btn-primary">Book Appointment</a>
                    <a href="/services" class="btn btn-outline">Learn More</a>
                  </div>
                </div>
                <div class="cta-image">
                  <img src="assets/img/health/cardiology-3.webp" alt="Cardiology Team" class="img-fluid rounded-lg">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- Dermatology Department Details Section -->

    <!-- Pharmacy Department Details Section -->
   <section id="pharmacy" class="department-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-8 mx-auto text-center intro" data-aos="fade-up" data-aos-delay="200">
            <h2>Pharmacy Department</h2>
            <div class="divider mx-auto"></div>
            <p class="lead">Our Pharmacy Department provides safe, accurate, and reliable medication services, supporting patients with professional pharmaceutical care and guidance.</p>
          </div>
        </div>

        <div class="department-overview mt-5">
          <div class="row gy-4">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="300">
              <div class="department-image">
                <img src="assets/img/health/pharmacy-3.avif" alt="Pharmacy Department" class="img-fluid rounded-lg">
              </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
              <div class="department-services">
                <div class="service-card">
                  <div class="icon"><i class="bi bi-heart-pulse"></i></div>
                  <div class="content">
                    <h4>Prescription Services</h4>
                    <p>Accurate dispensing of prescribed medications with professional counseling for safe usage.</p>
                  </div>
                </div>

                <div class="service-card">
                  <div class="icon"><i class="bi bi-activity"></i></div>
                  <div class="content">
                    <h4>Medication Management</h4>
                    <p>Monitoring drug interactions, dosages, and patient compliance for effective treatment outcomes.</p>
                  </div>
                </div>

                <div class="service-card">
                  <div class="icon"><i class="bi bi-person-heart"></i></div>
                  <div class="content">
                    <h4>Patient Counseling</h4>
                    <p>Personal guidance on medication use, side effects, and proper storage for patient safety.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="key-services mt-5" data-aos="fade-up" data-aos-delay="500">
          <div class="row gy-4">
            <div class="col-lg-5" data-aos="fade-right" data-aos-delay="600">
              <h3>Our Specialized Services</h3>
              <p>We provide complete pharmaceutical services, ensuring patients receive the right medications with proper guidance and care.</p>
              <ul class="service-list">
                <li><i class="bi bi-check-circle-fill"></i> Prescription and over-the-counter medications</li>
                <li><i class="bi bi-check-circle-fill"></i> Medication counseling and guidance</li>
                <li><i class="bi bi-check-circle-fill"></i> Chronic disease medication support</li>
                <li><i class="bi bi-check-circle-fill"></i> Drug interaction monitoring</li>
                <li><i class="bi bi-check-circle-fill"></i> Safe medication storage advice</li>
              </ul>
            </div>
            <div class="col-lg-7" data-aos="fade-left" data-aos-delay="600">
              <div class="cta-wrapper">
                <div class="cta-content">
                  <h3>Expert Care When You Need It Most</h3>
                    <p>Our pharmacy team ensures every patient receives safe, accurate, and professional medication support.</p>
                  <div class="cta-buttons">
                    <a href="/appointment" class="btn btn-primary">Book Appointment</a>
                    <a href="/services" class="btn btn-outline">Learn More</a>
                  </div>
                </div>
                <div class="cta-image">
                  <img src="assets/img/health/cardiology-3.webp" alt="Cardiology Team" class="img-fluid rounded-lg">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- Pharmacy Department Details Section -->

      <!-- Surgery Department Details Section -->
   <section id="surgery" class="department-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-8 mx-auto text-center intro" data-aos="fade-up" data-aos-delay="200">
            <h2>Surgery Department</h2>
            <div class="divider mx-auto"></div>
            <p class="lead">Our Surgery Department provides safe, precise, and advanced surgical care, supported by experienced surgeons and modern medical technology for optimal patient recovery.</p>
          </div>
        </div>

        <div class="department-overview mt-5">
          <div class="row gy-4">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="300">
              <div class="department-image">
                <img src="assets/img/health/surgery-5.jpg" alt="Surgery Department" class="img-fluid rounded-lg">
              </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
              <div class="department-services">
                <div class="service-card">
                  <div class="icon"><i class="bi bi-heart-pulse"></i></div>
                  <div class="content">
              <h4>General & Specialized Surgery</h4>
              <p>Providing a wide range of surgical procedures with high standards of safety, precision, and patient comfort.</p>
                  </div>
                </div>

                <div class="service-card">
                  <div class="icon"><i class="bi bi-activity"></i></div>
                  <div class="content">
                  <h4>Advanced Surgical Technology</h4>
                  <p>Utilizing modern equipment and minimally invasive techniques to ensure faster recovery and reduced risks.</p>
                  </div>
                </div>

                <div class="service-card">
                  <div class="icon"><i class="bi bi-person-heart"></i></div>
                  <div class="content">
                    <h4>Personalized Surgical Care</h4>
                    <p>Each patient receives a customized treatment and recovery plan based on their specific medical needs.</p>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="key-services mt-5" data-aos="fade-up" data-aos-delay="500">
          <div class="row gy-4">
            <div class="col-lg-5" data-aos="fade-right" data-aos-delay="600">
              <h3>Our Specialized Services</h3>
              <p>We offer comprehensive surgical services, focusing on patient safety, precision, and continuous post-operative care for successful recovery.</p>
              <ul class="service-list">
                <li><i class="bi bi-check-circle-fill"></i> General and laparoscopic surgery</li>
                <li><i class="bi bi-check-circle-fill"></i> Orthopedic and trauma surgery</li>
                <li><i class="bi bi-check-circle-fill"></i> Minor and day-care procedures</li>
                <li><i class="bi bi-check-circle-fill"></i> Pre-operative assessments</li>
                <li><i class="bi bi-check-circle-fill"></i> Post-operative recovery care</li>
              </ul>

            </div>
            <div class="col-lg-7" data-aos="fade-left" data-aos-delay="600">
              <div class="cta-wrapper">
                <div class="cta-content">
                  <h3>Expert Care When You Need It Most</h3>
                    <p>Our surgical team is committed to delivering high-quality care, ensuring safety, comfort, and successful outcomes for every patient.</p>                  <div class="cta-buttons">
                    <a href="/appointment" class="btn btn-primary">Book Appointment</a>
                    <a href="/services" class="btn btn-outline">Learn More</a>
                  </div>
                </div>
                <div class="cta-image">
                  <img src="assets/img/health/cardiology-3.webp" alt="Cardiology Team" class="img-fluid rounded-lg">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- Surgery Department Details Section -->

    <!-- Orthopedics Department Details Section -->
   <section id="orthopedics" class="department-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-8 mx-auto text-center intro" data-aos="fade-up" data-aos-delay="200">
            <h2>Orthopedics Department</h2>
            <div class="divider mx-auto"></div>
            <p class="lead">Providing advanced care for bones, joints, and muscles, our Orthopedics Department offers innovative treatments and surgical solutions to restore mobility and improve quality of life for all patients.</p>
          </div>
        </div>

        <div class="department-overview mt-5">
          <div class="row gy-4">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="300">
              <div class="department-image">
                <img src="assets/img/health/orthopedics-5.jpg" alt="Orthopedics Department" class="img-fluid rounded-lg">
              </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
              <div class="department-services">
                <div class="service-card">
                  <div class="icon"><i class="bi bi-heart-pulse"></i></div>
                  <div class="content">
                    <h4>Bone & Joint Care</h4>
                    <p>Expert surgical interventions for joint replacements, fractures, and complex bone conditions to restore function and reduce pain.</p>
                  </div>
                </div>

                <div class="service-card">
                  <div class="icon"><i class="bi bi-activity"></i></div>
                  <div class="content">
                    <h4>Advanced Diagnostics</h4>
                    <p>Comprehensive evaluation and treatment for sports injuries, helping athletes return to peak performance safely and effectively.</p>
                  </div>
                </div>

                <div class="service-card">
                  <div class="icon"><i class="bi bi-person-heart"></i></div>
                  <div class="content">
                    <h4>Personalized Treatment Plans</h4>
                    <p>Personalized physical therapy and rehabilitation programs to improve mobility, strength, and overall musculoskeletal health.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="key-services mt-5" data-aos="fade-up" data-aos-delay="500">
          <div class="row gy-4">
            <div class="col-lg-5" data-aos="fade-right" data-aos-delay="600">
              <h3>Our Specialized Services</h3>
              <p>We provide a full spectrum of orthopedic care, from surgery to rehabilitation, ensuring patients regain mobility and maintain an active lifestyle.</p>
              <ul class="service-list">
                <li><i class="bi bi-check-circle-fill"></i> Joint Replacement & Reconstruction</li>
                <li><i class="bi bi-check-circle-fill"></i> Fracture Management</li>
                <li><i class="bi bi-check-circle-fill"></i> Sports Injury Treatment</li>
                <li><i class="bi bi-check-circle-fill"></i> Spine & Back Care</li>
                <li><i class="bi bi-check-circle-fill"></i> Physical Therapy & Rehabilitation</li>
              </ul>
            </div>
            <div class="col-lg-7" data-aos="fade-left" data-aos-delay="600">
              <div class="cta-wrapper">
                <div class="cta-content">
                  <h3>Restoring Movement, Improving Lives</h3>
                  <p>Our orthopedic experts combine advanced surgical techniques with personalized therapy plans to help patients regain strength and mobility efficiently.</p>
                  <div class="cta-buttons">
                    <a href="/appointment" class="btn btn-primary">Book Appointment</a>
                    <a href="/services" class="btn btn-outline">Learn More</a>
                  </div>
                </div>
                <div class="cta-image">
                  <img src="assets/img/health/cardiology-3.webp" alt="Cardiology Team" class="img-fluid rounded-lg">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Orthopedics Department Details Section -->

    <!-- Pediatrics Department Details Section -->
   <section id="pediatrics" class="department-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-8 mx-auto text-center intro" data-aos="fade-up" data-aos-delay="200">
            <h2>Pediatrics Department</h2>
            <div class="divider mx-auto"></div>
            <p class="lead">Caring for children from infancy to adolescence, our Pediatrics Department offers comprehensive medical services in a child-friendly environment, ensuring healthy growth and development at every stage.</p>
          </div>
        </div>

        <div class="department-overview mt-5">
          <div class="row gy-4">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="300">
              <div class="department-image">
                <img src="assets/img/health/pediatrics-5.jpg" alt="Pediatrics Department" class="img-fluid rounded-lg">
              </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
              <div class="department-services">
                <div class="service-card">
                  <div class="icon"><i class="bi bi-heart-pulse"></i></div>
                  <div class="content">
                    <h4>Child & Adolescent Care</h4>
                    <p>Providing routine check-ups, vaccinations, and growth monitoring to ensure children stay healthy and protected.</p>
                  </div>
                </div>

                <div class="service-card">
                  <div class="icon"><i class="bi bi-activity"></i></div>
                  <div class="content">
                    <h4>Preventive Health</h4>
                    <p>Vaccinations, growth monitoring, and wellness programs to keep children healthy.</p>  
                  </div>
                </div>

                <div class="service-card">
                  <div class="icon"><i class="bi bi-person-heart"></i></div>
                  <div class="content">
                    <h4>Personalized Treatment Plans</h4>
                    <p>Individual care for common illnesses, chronic conditions, and developmental needs.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="key-services mt-5" data-aos="fade-up" data-aos-delay="500">
          <div class="row gy-4">
            <div class="col-lg-5" data-aos="fade-right" data-aos-delay="600">
              <h3>Our Specialized Services</h3>
              <p>We provide holistic pediatric care including preventive, acute, and developmental services to support healthy growth and well-being for every child.</p>
              <ul class="service-list">
                <li><i class="bi bi-check-circle-fill"></i> Routine Health Check-ups</li>
                <li><i class="bi bi-check-circle-fill"></i> Vaccination Programs</li>
                <li><i class="bi bi-check-circle-fill"></i> Acute Illness Management</li>
                <li><i class="bi bi-check-circle-fill"></i> Growth & Development Monitoring</li>
                <li><i class="bi bi-check-circle-fill"></i> Nutritional & Parenting Guidance</li>
              </ul>
            </div>
            <div class="col-lg-7" data-aos="fade-left" data-aos-delay="600">
              <div class="cta-wrapper">
                <div class="cta-content">
                  <h3>Dedicated Care for Every Child</h3>
                  <p>Our pediatric team provides compassionate, expert care to ensure children grow healthy, happy, and strong.</p>
                  <div class="cta-buttons">
                    <a href="/appointment" class="btn btn-primary">Book Appointment</a>
                    <a href="/services" class="btn btn-outline">Learn More</a>
                  </div>
                </div>
                <div class="cta-image">
                  <img src="assets/img/health/cardiology-3.webp" alt="Cardiology Team" class="img-fluid rounded-lg">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Pediatrics Department Details Section -->

    <!-- Emergency Care Department Details Section -->
   <section id="emergency" class="department-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-8 mx-auto text-center intro" data-aos="fade-up" data-aos-delay="200">
            <h2>Emergency Care Department</h2>
            <div class="divider mx-auto"></div>
            <p class="lead">Our Emergency Care Department provides fast, reliable, and life-saving medical services, available 24/7 to handle urgent and critical health conditions.</p>
          </div>
        </div>

        <div class="department-overview mt-5">
          <div class="row gy-4">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="300">
              <div class="department-image">
                <img src="assets/img/health/emergency-5.jpg" alt="Emergency Department" class="img-fluid rounded-lg">
              </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
              <div class="department-services">
                <div class="service-card">
                  <div class="icon"><i class="bi bi-heart-pulse"></i></div>
                  <div class="content">
                    <h4>Rapid Emergency Response</h4>
                    <p>Immediate assessment and treatment for injuries, trauma, and life-threatening medical conditions.</p>
                  </div>
                </div>

                <div class="service-card">
                  <div class="icon"><i class="bi bi-activity"></i></div>
                  <div class="content">
                  <h4>Advanced Emergency Diagnostics</h4>
                  <p>On-site imaging, laboratory testing, and monitoring for quick and accurate decision-making.</p>
                  </div>
                </div>

                <div class="service-card">
                  <div class="icon"><i class="bi bi-person-heart"></i></div>
                  <div class="content">
                <h4>Critical Care Management</h4>
                  <p>Specialized care for patients requiring intensive observation and urgent medical intervention.</p>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="key-services mt-5" data-aos="fade-up" data-aos-delay="500">
          <div class="row gy-4">
            <div class="col-lg-5" data-aos="fade-right" data-aos-delay="600">
              <h3>Our Specialized Services</h3>
              <p>We provide comprehensive emergency medical care with rapid response, modern equipment, and experienced professionals dedicated to saving lives.</p>
              <ul class="service-list">
                <li><i class="bi bi-check-circle-fill"></i> 24-hour emergency medical services</li>
                <li><i class="bi bi-check-circle-fill"></i> Trauma and accident care</li>
                <li><i class="bi bi-check-circle-fill"></i> Cardiac and stroke emergency response</li>
                <li><i class="bi bi-check-circle-fill"></i> Emergency imaging and laboratory services</li>
                <li><i class="bi bi-check-circle-fill"></i> Ambulance and referral coordination</li>
              </ul>
            </div>
            <div class="col-lg-7" data-aos="fade-left" data-aos-delay="600">
              <div class="cta-wrapper">
                <div class="cta-content">
                  <h3>Expert Care When You Need It Most</h3>
                    <p>Our emergency team is always ready to deliver fast, professional, and compassionate care when every second matters.</p>
                  <div class="cta-buttons">
                    <a href="/appointment" class="btn btn-primary">Book Appointment</a>
                    <a href="/services" class="btn btn-outline">Learn More</a>
                  </div>
                </div>
                <div class="cta-image">
                  <img src="assets/img/health/cardiology-3.webp" alt="Cardiology Team" class="img-fluid rounded-lg">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- Pharmacy Department Details Section -->


</main>

<!-- JavaScript to ensure only selected department shows -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('.department-details');
    const hash = window.location.hash;

    // Hide all sections
    sections.forEach(s => s.style.display = 'none');

    // Show section matching the hash, or first section if no hash
    if(hash && document.querySelector(hash)) {
        document.querySelector(hash).style.display = 'block';
    } else if(sections[0]) {
        sections[0].style.display = 'block';
    }
});
</script>

@endsection
