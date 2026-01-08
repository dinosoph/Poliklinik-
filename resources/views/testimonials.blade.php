@extends('master.clinic_layout')
@section('content')

   <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="bi bi-house"></i> Home</a></li>
            <li class="breadcrumb-item active current">Testimonials</li>
          </ol>
        </nav>
      </div>

      <div class="title-wrapper">
        <h1>Testimonials</h1>
        <p>Poliklinik Alisya offers compassionate, professional healthcare with over 25 years of experience, providing personalized care from general check-ups to specialized treatments.</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Featured Testimonials Section -->
    <section id="featured-testimonials" class="featured-testimonials section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="testimonials-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "slidesPerView": 1,
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              }
            }
          </script>

          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row">
                  <div class="col-lg-8">
                    <h2>A Loyal Client</h2>
                    <p>
                      I’ve been visiting Poliklinik Alisya for several years, and the level of care they provide is unmatched.
                    </p>
                    <p>
                      The staff is friendly, and they always make me feel comfortable during my visits. I highly recommend them to anyone looking for reliable and compassionate healthcare!
                    </p>
                    <div class="profile d-flex align-items-center">
                      <img src="assets/img/person/m1.jpeg" class="profile-img" alt="">
                      <div class="profile-info">
                        <h3>Saiful Hakim</h3>
                        <span>Client</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="featured-img-wrapper">
                      <img src="assets/img/person/m1.jpeg" class="featured-img" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row">
                  <div class="col-lg-8">
                    <h2>A Creative Designer</h2>
                    <p>
                      Poliklinik Alisya has been an incredible support in maintaining my health. The professionalism of the doctors and the care they provide is exceptional.
                    </p>
                    <p>
                      Every time I visit, I am greeted with a warm and caring environment, making my healthcare experience stress-free.
                    </p>
                    <div class="profile d-flex align-items-center">
                      <img src="assets/img/person/f1.jpg" class="profile-img" alt="">
                      <div class="profile-info">
                        <h3>Siti Aisyah</h3>
                        <span>Designer</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="featured-img-wrapper">
                      <img src="assets/img/person/f1.jpg" class="featured-img" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row">
                  <div class="col-lg-8">
                    <h2>
                      A Freelance Professional
                    </h2>
                    <p>
                      I had a fantastic experience with Poliklinik Alisya. Their doctors truly listen to your concerns and provide effective treatment plans.
                    </p>
                    <p>
                      The clinic is well-maintained, and the staff is always ready to assist you. I will definitely continue to be a patient here!
                    </p>
                    <div class="profile d-flex align-items-center">
                      <img src="assets/img/person/m2.jpg" class="profile-img" alt="">
                      <div class="profile-info">
                        <h3>Muhammad Faris</h3>
                        <span>Freelancer</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="featured-img-wrapper">
                      <img src="assets/img/person/m2.jpg" class="featured-img" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row">
                  <div class="col-lg-8">
                    <h2>A Successful Store Owner</h2>
                    <p>
                      I trust Poliklinik Alisya with all my health needs. The level of expertise and attention to detail is amazing.
                    </p>
                    <p>
                      I’ve always felt well taken care of, and their holistic approach to health and wellness has made a significant difference in my life.
                    </p>
                    <div class="profile d-flex align-items-center">
                      <img src="assets/img/person/f2.jpg" class="profile-img" alt="">
                      <div class="profile-info">
                        <h3>Noraini binti Zainal</h3>
                        <span>Store Owner</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="featured-img-wrapper">
                      <img src="assets/img/person/f2.jpg" class="featured-img" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Item -->

          </div>

          <div class="swiper-navigation w-100 d-flex align-items-center justify-content-center">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>

    </section><!-- /Featured Testimonials Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4">
          <!-- Testimonial Item 1 -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-item">
              <div class="stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <p>I am very satisfied with the service at Poliklinik Alisya. They always give full attention to me and my family. Every time I visit, I can feel the friendly and efficient service. I have no hesitation in recommending them to others.</p>
              <div class="testimonial-footer">
                <div class="testimonial-author">
                  <img src="assets/img/person/f3.webp" alt="Author" class="img-fluid rounded-circle" loading="lazy">
                  <div>
                    <h5>Zainab Khairuddin</h5>
                    <span>Teacher</span>
                  </div>
                </div>
                <div class="quote-icon">
                  <i class="bi bi-quote"></i>
                </div>
              </div>
            </div>
          </div><!-- End Testimonial Item -->

          <!-- Testimonial Item 2 -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="testimonial-item">
              <div class="stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <p>Poliklinik Alisya is my go-to clinic for healthcare. The service provided is very professional, and they always take the time to explain everything about my health condition. I feel truly valued as a patient here.</p>
              <div class="testimonial-footer">
                <div class="testimonial-author">
                  <img src="assets/img/person/m3.jpg" alt="Author" class="img-fluid rounded-circle" loading="lazy">
                  <div>
                    <h5>Fauzi Rahman</h5>
                    <span>Engineer</span>
                  </div>
                </div>
                <div class="quote-icon">
                  <i class="bi bi-quote"></i>
                </div>
              </div>
            </div>
          </div><!-- End Testimonial Item -->

          <!-- Testimonial Item 3 -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="testimonial-item">
              <div class="stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <p>This clinic truly provides the best service. I feel comfortable and confident every time I meet with the doctors at Poliklinik Alisya. They always give useful advice and pay full attention to my health.</p>
              <div class="testimonial-footer">
                <div class="testimonial-author">
                  <img src="assets/img/person/f4.png" alt="Author" class="img-fluid rounded-circle" loading="lazy">
                  <div>
                    <h5>Nurul Huda</h5>
                    <span>Housewife</span>
                  </div>
                </div>
                <div class="quote-icon">
                  <i class="bi bi-quote"></i>
                </div>
              </div>
            </div>
          </div><!-- End Testimonial Item -->

          <!-- Testimonial Item 4 -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="testimonial-item">
              <div class="stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <p>Poliklinik Alisya offers excellent service and I feel at ease every time I come here. The doctors are very professional, and I feel truly valued. They also provide very effective and satisfying treatments.</p>
              <div class="testimonial-footer">
                <div class="testimonial-author">
                  <img src="assets/img/person/m4.avif" alt="Author" class="img-fluid rounded-circle" loading="lazy">
                  <div>
                    <h5>Ismail Ali</h5>
                    <span>UX Designer</span>
                  </div>
                </div>
                <div class="quote-icon">
                  <i class="bi bi-quote"></i>
                </div>
              </div>
            </div>
          </div><!-- End Testimonial Item -->

          <!-- Testimonial Item 5 -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
            <div class="testimonial-item">
              <div class="stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <p>As someone who often faces health issues related to my voice, Poliklinik Alisya is where I get the right treatment. They are very professional in taking care of my vocal health and provide very helpful advice.</p>
              <div class="testimonial-footer">
                <div class="testimonial-author">
                  <img src="assets/img/person/f5.jpg" alt="Author" class="img-fluid rounded-circle" loading="lazy">
                  <div>
                    <h5>Lina Sulaiman</h5>
                    <span>Entrepreneur</span>
                  </div>
                </div>
                <div class="quote-icon">
                  <i class="bi bi-quote"></i>
                </div>
              </div>
            </div>
          </div><!-- End Testimonial Item -->

          <!-- Testimonial Item 6 -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
            <div class="testimonial-item">
              <div class="stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <p>I really appreciate the care and professionalism shown by Poliklinik Alisya. Every time I come for a check-up or treatment, I feel like I’m in good hands. The clinic is also very clean and well-maintained, which makes me feel safe.</p>
              <div class="testimonial-footer">
                <div class="testimonial-author">
                  <img src="assets/img/person/f6.jpg" alt="Author" class="img-fluid rounded-circle" loading="lazy">
                  <div>
                    <h5>Rashidah Aziz</h5>
                    <span>Financial Analyst</span>
                  </div>
                </div>
                <div class="quote-icon">
                  <i class="bi bi-quote"></i>
                </div>
              </div>
            </div>
          </div><!-- End Testimonial Item -->

        </div>

      </div>

    </section><!-- /Testimonials Section -->

  </main>

@endsection