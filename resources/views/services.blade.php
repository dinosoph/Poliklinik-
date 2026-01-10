@extends('master.clinic_layout')
@section('content')
  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/mainpage"><i class="bi bi-house"></i> Home</a></li>
            <li class="breadcrumb-item active current">Services</li>
          </ol>
        </nav>
      </div>

      <div class="title-wrapper">
        <h1>Services</h1>
        <p>From primary and specialty care to diagnostic and emergency services, we are committed to delivering reliable and patient-centered healthcare.</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="services-tabs">
          <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="200">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="services-primary-tab" data-bs-toggle="tab" data-bs-target="#services-primary" type="button" role="tab">Primary Care</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="services-specialty-tab" data-bs-toggle="tab" data-bs-target="#services-specialty" type="button" role="tab">Specialty Care</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="services-diagnostics-tab" data-bs-toggle="tab" data-bs-target="#services-diagnostics" type="button" role="tab">Diagnostics</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="services-emergency-tab" data-bs-toggle="tab" data-bs-target="#services-emergency" type="button" role="tab">Emergency</button>
            </li>
          </ul>

          <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

            <div class="tab-pane fade show active" id="services-primary" role="tabpanel">
              <div class="row g-4">
                <div class="col-lg-6">
                  <div class="service-item">
                    <div class="service-icon-wrapper">
                      <i class="fa fa-stethoscope"></i>
                    </div>
                    <div class="service-details">
                      <h5>General Consultation</h5>
                      <p>Personalized medical consultations to assess symptoms, provide accurate diagnoses, and recommend appropriate treatment for your health concerns.</p>
                      <ul class="service-benefits">
                        <li><i class="fa fa-check-circle"></i>Comprehensive Health Assessment</li>
                        <li><i class="fa fa-check-circle"></i>Preventive Care Planning</li>
                        <li><i class="fa fa-check-circle"></i>Health Monitoring</li>
                      </ul>
                      <a href="{{ route('services.details', ['service' => 'consultation']) }}" class="service-link">
                        <span>Learn More</span>
                        <i class="fa fa-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="service-item">
                    <div class="service-icon-wrapper">
                      <i class="fa fa-syringe"></i>
                    </div>
                    <div class="service-details">
                      <h5>Vaccination Services</h5>
                      <p>Safe and reliable vaccination services to protect individuals and families against preventable diseases at every stage of life.</p>
                      <ul class="service-benefits">
                        <li><i class="fa fa-check-circle"></i>Adult Immunizations</li>
                        <li><i class="fa fa-check-circle"></i>Travel Vaccines</li>
                        <li><i class="fa fa-check-circle"></i>Flu Shots</li>
                      </ul>
                      <a href="{{ route('services.details', ['service' => 'vaccination']) }}" class="service-link">
                      <span>Learn More</span>
                      <i class="fa fa-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="service-item">
                    <div class="service-icon-wrapper">
                      <i class="fa fa-baby"></i>
                    </div>
                    <div class="service-details">
                      <h5>Maternal Health</h5>
                      <p>Comprehensive maternal healthcare supporting women through pregnancy, delivery, and postnatal care in a safe and supportive environment.</p>
                      <ul class="service-benefits">
                        <li><i class="fa fa-check-circle"></i>Prenatal Care</li>
                        <li><i class="fa fa-check-circle"></i>Delivery Support</li>
                        <li><i class="fa fa-check-circle"></i>Postnatal Care</li>
                      </ul>
                      <a href="{{ route('services.details', ['service' => 'maternal']) }}" class="service-link">
                        <span>Learn More</span>
                        <i class="fa fa-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="service-item">
                    <div class="service-icon-wrapper">
                      <i class="fa fa-user-md"></i>
                    </div>
                    <div class="service-details">
                      <h5>Family Medicine</h5>
                      <p>Continuous and holistic medical care for individuals and families, focusing on long-term health, prevention, and chronic disease management.</p>
                      <ul class="service-benefits">
                        <li><i class="fa fa-check-circle"></i>All-Age Care</li>
                        <li><i class="fa fa-check-circle"></i>Chronic Disease Management</li>
                        <li><i class="fa fa-check-circle"></i>Wellness Programs</li>
                      </ul>
                      <a href="{{ route('services.details', ['service' => 'family']) }}" class="service-link">
                        <span>Learn More</span>
                        <i class="fa fa-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="services-specialty" role="tabpanel">
              <div class="row g-4">
                <div class="col-lg-6">
                  <div class="service-item featured">
                    <div class="service-icon-wrapper">
                      <i class="fa fa-heartbeat"></i>
                    </div>
                    <div class="service-details">
                      <h5>Cardiology</h5>
                      <p>Specialized care for heart and cardiovascular conditions, focusing on accurate diagnosis, effective treatment, and long-term heart health management.</p>
                      <ul class="service-benefits">
                        <li><i class="fa fa-check-circle"></i>Heart Disease Treatment</li>
                        <li><i class="fa fa-check-circle"></i>Cardiac Surgery</li>
                        <li><i class="fa fa-check-circle"></i>Rehabilitation Programs</li>
                      </ul>
                      <a href="{{ route('services.details', ['service' => 'cardiology']) }}" class="service-link">
                        <span>Learn More</span>
                        <i class="fa fa-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="service-item">
                    <div class="service-icon-wrapper">
                      <i class="fa fa-brain"></i>
                    </div>
                    <div class="service-details">
                      <h5>Neurology</h5>
                      <p>Comprehensive evaluation and treatment of neurological conditions affecting the brain, nerves, and nervous system.</p>
                      <ul class="service-benefits">
                        <li><i class="fa fa-check-circle"></i>Neurological Assessment</li>
                        <li><i class="fa fa-check-circle"></i>Stroke Treatment</li>
                        <li><i class="fa fa-check-circle"></i>Memory Care</li>
                      </ul>
                      <a href="{{ route('services.details', ['service' => 'neurology']) }}" class="service-link">
                        <span>Learn More</span>
                        <i class="fa fa-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="service-item">
                    <div class="service-icon-wrapper">
                      <i class="fa fa-bone"></i>
                    </div>
                    <div class="service-details">
                      <h5>Orthopedics</h5>
                      <p>Expert care for bone, joint, and muscle conditions, helping patients restore mobility, reduce pain, and improve quality of life.</p>
                      <ul class="service-benefits">
                        <li><i class="fa fa-check-circle"></i>Joint Replacement</li>
                        <li><i class="fa fa-check-circle"></i>Sports Medicine</li>
                        <li><i class="fa fa-check-circle"></i>Pain Management</li>
                      </ul>
                      <a href="{{ route('services.details', ['service' => 'orthopedics']) }}" class="service-link">
                        <span>Learn More</span>
                        <i class="fa fa-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="service-item">
                    <div class="service-icon-wrapper">
                      <i class="fa fa-user-nurse"></i>
                    </div>
                    <div class="service-details">
                      <h5>Oncology</h5>
                      <p>Compassionate and coordinated cancer care, offering diagnosis, treatment options, and continuous patient support throughout the journey.</p>
                      <ul class="service-benefits">
                        <li><i class="fa fa-check-circle"></i>Cancer Treatment</li>
                        <li><i class="fa fa-check-circle"></i>Chemotherapy</li>
                        <li><i class="fa fa-check-circle"></i>Support Services</li>
                      </ul>
                      <a href="{{ route('services.details', ['service' => 'oncology']) }}" class="service-link">
                        <span>Learn More</span>
                        <i class="fa fa-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="services-diagnostics" role="tabpanel">
              <div class="row g-4">
                <div class="col-lg-6">
                  <div class="service-item">
                    <div class="service-icon-wrapper">
                      <i class="fa fa-vial"></i>
                    </div>
                    <div class="service-details">
                      <h5>Laboratory Testing</h5>
                      <p>Reliable laboratory services to support accurate diagnosis, including blood tests and pathology analysis with timely results.</p>
                      <ul class="service-benefits">
                        <li><i class="fa fa-check-circle"></i>Blood Analysis</li>
                        <li><i class="fa fa-check-circle"></i>Pathology Services</li>
                        <li><i class="fa fa-check-circle"></i>Quick Results</li>
                      </ul>
                      <a href="{{ route('services.details', ['service' => 'laboratory']) }}" class="service-link">
                        <span>Learn More</span>
                        <i class="fa fa-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="service-item">
                    <div class="service-icon-wrapper">
                      <i class="fa fa-x-ray"></i>
                    </div>
                    <div class="service-details">
                      <h5>Diagnostic Imaging</h5>
                      <p>Non-invasive imaging services to assist in medical evaluation and diagnosis using safe and modern technology</p>
                      <ul class="service-benefits">
                        <li><i class="fa fa-check-circle"></i>MRI Scans</li>
                        <li><i class="fa fa-check-circle"></i>CT Imaging</li>
                        <li><i class="fa fa-check-circle"></i>Ultrasound</li>
                      </ul>
                      <a href="{{ route('services.details', ['service' => 'imaging']) }}" class="service-link">
                        <span>Learn More</span>
                        <i class="fa fa-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="services-emergency" role="tabpanel">
              <div class="row g-4">
                <div class="col-lg-12">
                  <div class="service-item emergency-highlight">
                    <div class="service-icon-wrapper">
                      <i class="fa fa-ambulance"></i>
                    </div>
                    <div class="service-details">
                      <h5>24/7 Emergency Care</h5>
                      <p>Immediate medical attention for urgent but non-life-threatening conditions, with prompt assessment and appropriate referral when necessary.</p>
                      <ul class="service-benefits">
                        <li><i class="fa fa-check-circle"></i>Prompt Medical Assessment</li>
                        <li><i class="fa fa-check-circle"></i>First Aid & Stabilization</li>
                        <li><i class="fa fa-check-circle"></i>Urgent Care for Minor Injuries</li>
                        <li><i class="fa fa-check-circle"></i>Referral to Nearby Hospitals (if required)</li>
                      </ul>
                      <div class="emergency-actions">
                        <a href="tel:999" class="btn-emergency">
                          <i class="fa fa-phone"></i>
                          <span>Call Emergency</span>
                        </a>
                        <a href="/contact" class="btn-directions">
                          <i class="fa fa-map-marker-alt"></i>
                          <span>Get Directions</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="services-cta" data-aos="fade-up" data-aos-delay="400">
          <div class="row">
            <div class="col-lg-8 mx-auto text-center">
              <div class="cta-content">
                <i class="fa fa-calendar-check"></i>
                <h3>Ready to Schedule Your Appointment?</h3>
                <p>Appointments are available during clinic operating hours. Contact us for more information or urgent inquiries.</p>
                <div class="cta-buttons">
                  <a href="/appointment" class="btn-book">Book Now</a>
                  <a href="/contact" class="btn-contact">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Services Section -->

  </main>
@endsection