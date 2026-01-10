@extends('master.clinic_layout')
@section('content')
    <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="bi bi-house"></i> Home</a></li>
            <li class="breadcrumb-item active current">Contact</li>
          </ol>
        </nav>
      </div>

      <div class="title-wrapper">
        <h1>Contact</h1>
        <p>Poliklinik Alisya is dedicated to providing you with the best healthcare services. Feel free to contact us for any inquiries, appointment requests, or general information. We are here to assist you.</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container">
        <div class="contact-wrapper">
          <div class="contact-info-panel">
            <div class="contact-info-header">
              <h3>Contact Information</h3>
              <p>Our clinic is committed to giving you the highest standard of care. Whether you are here for a routine check-up or a more specialized treatment, our team is always ready to help.</p>
            </div>

            <div class="contact-info-cards">
              <div class="info-card">
                <div class="icon-container">
                  <i class="bi bi-pin-map-fill"></i> 
                </div>
                <div class="card-content">
                  <h4>Our Location</h4>
                  <p>38-G, Jalan TK 5/32a, Taman Mawar, 47100 Puchong, Selangor </p>
                </div>
              </div>

              <div class="info-card">
                <div class="icon-container">
                  <i class="bi bi-envelope-open"></i>
                </div>
                <div class="card-content">
                  <h4>Email Us</h4>
                  <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="94fdfaf2fbd4f1ecf5f9e4f8f1baf7fbf9">alisyahealthcare@gmail.com</a></p>
                </div>
              </div>

              <div class="info-card">
                <div class="icon-container">
                  <i class="bi bi-telephone-fill"></i>
                </div>
                <div class="card-content">
                  <h4>Call Us</h4>
                  <p>011-6229 1644</p>
                </div>
              </div>

              <div class="info-card">
                <div class="icon-container">
                  <i class="bi bi-clock-history"></i>
                </div>
                <div class="card-content">
                  <h4>Working Hours</h4>
                  <p>Monday-Saturday: 9AM - 10PM</p>
                </div>
              </div>
            </div>

            <div class="social-links-panel">
              <h5>Follow Us</h5>
              <div class="social-icons">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-youtube"></i></a>
              </div>
            </div>
          </div>

          <div class="contact-form-panel">
            <div class="map-container">
              <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB2NIWI3Tv9iDPrlnowr_0ZqZWoAQydKJU&q=Poliklinik%20Alisya%20Puchong%2C%20Jalan%20TK%205%2F32a%2C%20Taman%20Mawar%2C%20Puchong%2C%20Selangor%2C%20Malaysia&maptype=roadmap" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

<div class="form-container">
    <h3>Send Us a Message</h3>
    <p>Have a question or need assistance? Use the form below to get in touch with us directly.</p>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="name" placeholder="Full Name">
        <label for="name">Full Name</label>
    </div>

    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="email" placeholder="Email Address">
        <label for="email">Email Address</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="subject" placeholder="Subject">
        <label for="subject">Subject</label>
    </div>

    <div class="form-floating mb-3">
        <textarea class="form-control" id="message" placeholder="Your Message" style="height: 150px"></textarea>
        <label for="message">Your Message</label>
    </div>

    <div class="d-grid">
        <button onclick="sendEmail()" class="btn-submit">
            Send Message <i class="bi bi-send-fill ms-2"></i>
        </button>
    </div>
</div>

<script>
function sendEmail() {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const subject = document.getElementById('subject').value;
    const message = document.getElementById('message').value;

    // Validation check (optional but recommended)
    if(!name || !email || !subject || !message) {
        alert("Please fill in all fields.");
        return;
    }

    // Construct the body text
  const bodyText = `Name: ${name}\nEmail: ${email}\nSubject: ${subject}\n\n${message}`;

  // Gmail Compose URL format
  const gmailLink = `https://mail.google.com/mail/?view=cm&fs=1` +
                    `&to=poliklinikalisya@gmail.com` +
                    `&su=${encodeURIComponent(subject)}` +
                    `&body=${encodeURIComponent(bodyText)}`;

  // Open Gmail in a new browser tab
  window.open(gmailLink, '_blank');
}
</script>

  </main>
@endsection
