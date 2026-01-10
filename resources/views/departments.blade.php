@extends('master.clinic_layout')

@section('content')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="bi bi-house"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#">Category</a></li>
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
                <div class="department-stats">
                  <div class="stat-item">
                    <span class="stat-number">500+</span>
                    <span class="stat-label">Procedures</span>
                  </div>
                </div>
              </div>
              <div class="department-content">
                <p>Comprehensive cardiovascular care with advanced diagnostics techniques and treatment options for heart conditions, ensuring optimal cardiac health for all patients.</p>
              <!--  <ul class="department-highlights">
                  <li><i class="bi bi-check2"></i> Advanced Cardiac Surgery</li>
                  <li><i class="bi bi-check2"></i> Interventional Cardiology</li>
                  <li><i class="bi bi-check2"></i> Heart Rhythm Management</li>
                </ul> -->
                <a href="department-details.html" class="department-link">Learn More</a>
              </div>
            </div>

            <div class="department-card" data-aos="zoom-in" data-aos-delay="350">
              <div class="department-header">
                <div class="department-icon">
                  <i class="bi bi-shield-plus"></i>
                </div>
                <h3>Oncology</h3>
                <p class="department-subtitle"> Cancer Treatment </p>
              </div>
              <div class="department-image-wrapper">
                <img src="assets/img/health/dermatology-3.webp" alt="Dermatology" class="img-fluid" loading="lazy">
                <div class="department-stats">
                  <div class="stat-item">
                    <span class="stat-number">1200+</span>
                    <span class="stat-label">Treatments</span>
                  </div>
                </div>
              </div>
              <div class="department-content">
                <p>Comprehensive cancer care with multidisciplinary approach, offering advanced treatment options, clinical trials, and compassionate support throughout the cancer journey.</p>
                <!--<ul class="department-highlights">
                  <li><i class="bi bi-check2"></i> Cosmetic Dermatology</li>
                  <li><i class="bi bi-check2"></i> Skin Cancer Treatment</li>
                  <li><i class="bi bi-check2"></i> Laser Therapy</li>
                </ul> -->
                <a href="department-details.html" class="department-link">Learn More</a>
              </div>
            </div>
          </div><!-- End First Column -->

          <!-- Second Column - Featured Department -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="250">
            <div class="featured-department">
              <div class="featured-header">
                <div class="featured-badge">
                  <i class="bi bi-star-fill"></i>
                  <span>Featured</span>
                </div>
                <div class="featured-icon">
                  <i class="bi bi-lightning-fill"></i>
                </div>
                <h2>Neurology</h2>
                <p class="featured-subtitle">Brain &amp; Nervous System</p>
              </div>
              <div class="featured-image">
                <img src="assets/img/health/neurology-4.webp" alt="Neurology Department" class="img-fluid" loading="lazy">
                <div class="featured-overlay">
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
              </div>
              <div class="featured-content">
                <p>Expert neurological care specializing in brain and nervous system disorders, providing cutting-edge treatments and compassionate support for neurological conditions.</p>
                <div class="featured-services">
                  <div class="service-tag">Brain Imaging</div>
                  <div class="service-tag">Epilepsy Care</div>
                  <div class="service-tag">Stroke Treatment</div>
                  <div class="service-tag">Memory Disorders</div>
                </div>
                <a href="department-details.html" class="featured-btn">
                  Explore Department
                  <i class="bi bi-arrow-right-circle"></i>
                </a>
              </div>
            </div>
          </div><!-- End Featured Department -->

          <!-- Third Column with 2 departments -->
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
                <div class="department-stats">
                  <div class="stat-item">
                    <span class="stat-number">800+</span>
                    <span class="stat-label">Surgeries</span>
                  </div>
                </div>
              </div>
              <div class="department-content">
                <p>Advanced musculoskeletal care focusing on bone, joints, and muscles with innovative surgical and non-surgical treatment approaches for mobility restoration.</p>
                <!--<ul class="department-highlights">
                  <li><i class="bi bi-check2"></i> Joint Replacement</li>
                  <li><i class="bi bi-check2"></i> Sports Medicine</li>
                  <li><i class="bi bi-check2"></i> Spine Surgery</li>
                </ul> -->
                <a href="department-details.html" class="department-link">Learn More</a>
              </div>
            </div>

            <div class="department-card" data-aos="zoom-in" data-aos-delay="400">
              <div class="department-header">
                <div class="department-icon">
                  <i class="bi bi-emoji-smile"></i>
                </div>
                <h3>Pediatrics</h3>
                <p class="department-subtitle">Children's Health</p>
              </div>
              <div class="department-image-wrapper">
                <img src="assets/img/health/pediatrics-2.webp" alt="Pediatrics" class="img-fluid" loading="lazy">
                <div class="department-stats">
                  <div class="stat-item">
                    <span class="stat-number">2000+</span>
                    <span class="stat-label">Young Patients</span>
                  </div>
                </div>
              </div>
              <div class="department-content">
                <p>Specialized healthcare for children from infancy through adolescence, offering comprehensive medical care in a child-friendly environment with experienced pediatric specialists.</p>
                <!--<ul class="department-highlights">
                  <li><i class="bi bi-check2"></i> Newborn Care</li>
                  <li><i class="bi bi-check2"></i> Child Development</li>
                  <li><i class="bi bi-check2"></i> Vaccination Programs</li>
                </ul>-->
                <a href="department-details.html" class="department-link">Learn More</a>
              </div>
            </div>
          </div><!-- End Third Column -->

        </div>

      </div>

    </section><!-- /Departments Section -->

  </main>

  @endsection