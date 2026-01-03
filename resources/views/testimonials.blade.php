<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>About - MediTrust Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <img src="assets/img/logo1.png" alt="">
        <!-- <svg class="my-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g id="bgCarrier" stroke-width="0"></g>
          <g id="tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="iconCarrier">
            <path d="M22 22L2 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
            <path d="M17 22V6C17 4.11438 17 3.17157 16.4142 2.58579C15.8284 2 14.8856 2 13 2H11C9.11438 2 8.17157 2 7.58579 2.58579C7 3.17157 7 4.11438 7 6V22" stroke="currentColor" stroke-width="1.5"></path>
            <path opacity="0.5" d="M21 22V8.5C21 7.09554 21 6.39331 20.6629 5.88886C20.517 5.67048 20.3295 5.48298 20.1111 5.33706C19.6067 5 18.9045 5 17.5 5" stroke="currentColor" stroke-width="1.5"></path>
            <path opacity="0.5" d="M3 22V8.5C3 7.09554 3 6.39331 3.33706 5.88886C3.48298 5.67048 3.67048 5.48298 3.88886 5.33706C4.39331 5 5.09554 5 6.5 5" stroke="currentColor" stroke-width="1.5"></path>
            <path d="M12 22V19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
            <path opacity="0.5" d="M10 12H14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
            <path opacity="0.5" d="M5.5 11H7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
            <path opacity="0.5" d="M5.5 14H7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
            <path opacity="0.5" d="M17 11H18.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
            <path opacity="0.5" d="M17 14H18.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
            <path opacity="0.5" d="M5.5 8H7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
            <path opacity="0.5" d="M17 8H18.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
            <path opacity="0.5" d="M10 15H14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
            <path d="M12 9V5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M14 7L10 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
          </g>
        </svg> -->
        <h1 class="sitename">Poliklinik Alisya</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ url('/') }}" >Home</a></li>
          <li><a href="{{ url('/about') }}" >About</a></li>        
          <li><a href="departments.html">Departments</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="doctors.html">Doctors</a></li>
          <li><a href="{{ url('/testimonials') }}" class="active">Testimonials</a></li>
          <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="appointment.html">Appointment</a>
    </div>
  </header>

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

   <footer id="footer" class="footer position-relative light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Poliklinik Alisya</span>
          </a>
          <div class="footer-contact pt-3">
            <p>38-G, Jalan TK 5/32a, Taman Mawar</p>
            <p>47100 Puchong, Selangor</p>
            <p class="mt-3"><strong>Phone:</strong> <span>011-6229 1644</span></p>
            <p><strong>Email:</strong> <span>alisyahealthcare@gmail.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Hic solutasetp</h4>
          <ul>
            <li><a href="#">Molestiae accusamus iure</a></li>
            <li><a href="#">Excepturi dignissimos</a></li>
            <li><a href="#">Suscipit distinctio</a></li>
            <li><a href="#">Dilecta</a></li>
            <li><a href="#">Sit quas consectetur</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nobis illum</h4>
          <ul>
            <li><a href="#">Ipsam</a></li>
            <li><a href="#">Laudantium dolorum</a></li>
            <li><a href="#">Dinera</a></li>
            <li><a href="#">Trodelas</a></li>
            <li><a href="#">Flexo</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">MyWebsite</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

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

</html>