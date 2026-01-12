@extends('master.clinic_layout')
@section('content')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><i class="bi bi-house"></i> Home</a></li>
            <li class="breadcrumb-item active current">Departments</li>
          </ol>
        </nav>
      </div>

      <div class="title-wrapper">
        <h1>Departments</h1>
        <p>Discover the services we offer, each thoughtfully crafted to provide you with reliable care and a comfortable healthcare experience.</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Departments Section -->
    <section id="departments" class="departments section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <!-- First Column with 2 departments -->
          <!-- 1. Cardiology -->
          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="department-card">
              <div class="department-header">
                <div class="department-icon">
                  <i class="bi bi-heart-pulse"></i>
                </div>
                <h3>Cardiology</h3>
                <p class="department-subtitle">Heart &amp; Vascular Care</p>
              </div>
              <div class="department-image-wrapper">
                <img src="assets/img/health/cardiology-2.webp" alt="Cardiology" class="img-fluid" loading="lazy">
              </div>
              <div class="department-content">
                <p>Comprehensive cardiovascular care with advanced diagnostics techniques and treatment options for heart conditions, ensuring optimal cardiac health for all patients.</p>
                <a href="{{ route('departments.details') }}#cardiology">Learn More</a>
              </div>
            </div>

            <!-- 2. Oncology -->
            <div class="department-card" data-aos="zoom-in" data-aos-delay="350">
              <div class="department-header">
                <div class="department-icon">
                  <i class="fa fa-user-nurse"></i>
                </div>
                <h3>Oncology</h3>
                <p class="department-subtitle"> Cancer Treatment </p>
              </div>
              <div class="department-image-wrapper">
                <img src="assets/img/health/oncology-3.webp" alt="Oncology" class="img-fluid" loading="lazy">
              </div>
              <div class="department-content">
                <p>Comprehensive cancer care with multidisciplinary approach, offering advanced treatment options, clinical trials, and compassionate support throughout the cancer journey.</p>
               <a href="{{ route('departments.details') }}#oncology">Learn More</a>
              </div>
            </div>

             <!-- 3. Surgery -->
            <div class="department-card" data-aos="zoom-in" data-aos-delay="350">
              <div class="department-header">
                <div class="department-icon">
                  <i class="fa fa-x-ray"></i>
                </div>
                <h3>Surgery</h3>
                <p class="department-subtitle">Advanced Surgical Care</p>
              </div>
              <div class="department-image-wrapper">
                <img src="assets/img/health/surgery-4.jpg" alt="Surgery" class="img-fluid" loading="lazy">
              </div>
              <div class="department-content">
              <p>Delivering safe and precise surgical procedures using modern techniques and technology, supported by experienced surgeons and comprehensive post-operative care.</p>
               <a href="{{ route('departments.details') }}#surgery">Learn More</a>
              </div>
            </div>

          </div>
          <!-- End First Column -->

          <!-- Second Column with 2 departments -->
           <!-- 4. Neurology -->
          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="department-card">
              <div class="department-header">
                <div class="department-icon">
                  <i class="bi bi-lightning-fill"></i>
                </div>
                <h3>Neurology</h3>
                <p class="featured-subtitle">Brain &amp; Nervous System</p>
              </div>
              <div class="department-image-wrapper">
                <img src="assets/img/health/neurology-4.webp" alt="Neurology Department" class="img-fluid" loading="lazy">
                <div class="achievement-list">
                    <div class="achievement-item">
                      <i class="bi bi-award"></i>
                      <span>Award Winning Team</span>
                    </div>
                    <div class="achievement-item">
                      <i class="bi bi-clock"></i>
                      <span>24/7 Stroke Center</span>
                    </div>
                  </div>
              </div>
              <div class="department-content">
                <p>Expert neurological care specializing in brain and nervous system disorders, providing cutting-edge treatments and compassionate support for neurological conditions.</p>
                <a href="{{ route('departments.details') }}#neurology">Learn More</a>
              </div>
            </div>

            <!-- 5. Dermatology -->
            <div class="department-card" data-aos="zoom-in" data-aos-delay="350">
              <div class="department-header">
                <div class="department-icon">
                  <i class="bi bi-shield-plus"></i>
                </div>
                <h3>Dermatology</h3>
                 <p class="department-subtitle">Skin &amp; Cosmetic Care</p>
              </div>
              <div class="department-image-wrapper">
                <img src="assets/img/health/dermatology-3.webp" alt="Dermatology" class="img-fluid" loading="lazy">
              </div>
              <div class="department-content">
              <p>Comprehensive skin care services including accurate diagnosis, effective treatment, and advanced cosmetic procedures to maintain healthy, clear, and radiant skin for patients of all ages.</p>
               <a href="{{ route('departments.details') }}#dermatology">Learn More</a>
              </div>
            </div>
          
           <!-- 6. Emergency Care -->
            <div class="department-card" data-aos="zoom-in" data-aos-delay="350">
              <div class="department-header">
                <div class="department-icon">
                  <i class="fas fa-ambulance"></i>
                </div>
                <h3>Emergency Care</h3>
                <p class="department-subtitle"> 24/7 Critical Response </p>
              </div>
              <div class="department-image-wrapper">
                <img src="assets/img/health/emergency-2.webp" alt="Emergency Care" class="img-fluid" loading="lazy">
              </div>
              <div class="department-content">
              <p>Providing immediate medical attention for life-threatening conditions, trauma, and urgent health emergencies with rapid assessment, advanced equipment, and experienced medical teams.</p>
               <a href="{{ route('departments.details') }}#emergency">Learn More</a>
              </div>
            </div>
          </div>
          <!-- End Second Column -->

          <!-- Third Column with 2 departments -->
           <!-- 7. Orthopedics -->
          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="department-card">
              <div class="department-header">
                <div class="department-icon">
                  <i class="bi bi-bandaid"></i>
                </div>
                <h3>Orthopedics</h3>
                <p class="department-subtitle">Bone &amp; Joint Care</p>
              </div>
              <div class="department-image-wrapper">
                <img src="assets/img/health/orthopedics-4.webp" alt="Orthopedics" class="img-fluid" loading="lazy">
              </div>
              <div class="department-content">
                <p>Advanced musculoskeletal care focusing on bone, joints, and muscles with innovative surgical and non-surgical treatment approaches for mobility restoration.</p>
                <a href="{{ route('departments.details') }}#orthopedics">Learn More</a>
              </div>
            </div>

            <!-- 8. Pediatrics -->
            <div class="department-card" data-aos="zoom-in" data-aos-delay="400">
              <div class="department-header">
                <div class="department-icon">
                  <i class="fa fa-baby"></i>
                </div>
                <h3>Pediatrics</h3>
                <p class="department-subtitle">Children's Health</p>
              </div>
              <div class="department-image-wrapper">
                <img src="assets/img/health/pediatrics-2.webp" alt="Pediatrics" class="img-fluid" loading="lazy">
              </div>
              <div class="department-content">
                <p>Specialized healthcare for children from infancy through adolescence, offering comprehensive medical care in a child-friendly environment with experienced pediatric specialists.</p>
                <a href="{{ route('departments.details') }}#pediatrics">Learn More</a>
              </div>
            </div>

             <!-- 9. Pharmacy -->
            <div class="department-card" data-aos="zoom-in" data-aos-delay="350">
              <div class="department-header">
                <div class="department-icon">
                  <i class="bi bi-emoji-smile "></i>
                </div>
                <h3>Pharmacy</h3>
                <p class="department-subtitle"> safe medication </p>
              </div>
              <div class="department-image-wrapper">
                <img src="assets/img/health/pharmacy-4.jpg" alt="Pharmacy" class="img-fluid" loading="lazy">
              </div>
              <div class="department-content">
                <p>Providing safe, accurate, and professional medication services, including prescription dispensing, patient counseling, and support to ensure effective and responsible treatment outcomes.</p>
               <a href="{{ route('departments.details') }}#pharmacy">Learn More</a>
              </div>
            </div>

          </div><!-- End Third Column -->

        </div>

      </div>

    </section><!-- /Departments Section -->

  </main>

  @endsection