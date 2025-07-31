<?php include 'includes/header.php'; ?>

<section class="py-5 bg-white">
  <div class="container">
    <div class="row align-items-center">
      <!-- Text Content -->
      <div class="col-md-6 mb-4 mb-md-0">
        <h2 class="fw-bold">
          Have questions? Ready to scale your business online? We’re just a <span class="text-warning">message</span> away.<br>

        </h2>
        <p class="mt-3 text-muted">
          Whether you’re looking to grow your brand visibility, drive more sales, or craft a winning digital strategy — our team at Seen & Sold is here to help you take the next big step.

        </p>
      </div>

      <!-- Image -->
      <div class="col-md-6 text-center">
        <img src="assets/img/contact-img.webp" alt="Work Together Illustration" class="img-fluid" style="max-width: 90%;">
      </div>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="row g-0 shadow rounded overflow-hidden">
          <!-- Left Side -->
          <div class="col-md-5 p-4 text-white d-flex flex-column justify-content-between" style="background-color: #f6c340;">
            <div>
              <h4 class="fw-bold mb-3">Contact Us</h4>
              <p class="text-light">Let’s discuss your goals and build a digital roadmap tailored for your brand.
                Click the button below to book your free strategy session with our experts.</p>
              <a href="tel:+91 8877004937" class="text-decoration-none text-white">
                <p class="mb-2"><i class="fa fa-phone me-2"></i>+91 8877004937</p>
              </a>
              <a href="mailto:hello@seenandsold.in" class="text-decoration-none text-white">
                <p class="mb-2"><i class="fa fa-envelope me-2"></i> hello@seenandsold.in</p>
              </a>
              <p class="mb-4"><i class="fa fa-clock me-2"></i> Mon–Sat: 10:00 AM – 7:00 PM IST</p>
            </div>
            <div class="d-flex gap-3 mt-3">
              <a href="#" class="text-white"><i class="fab fa-facebook fs-5"></i></a>
              <a href="#" class="text-white"><i class="fa fa-x fs-5"></i></a>
              <a href="#" class="text-white"><i class="fab fa-instagram fs-5"></i></a>
            </div>
          </div>

          <!-- Right Side -->
          <div class="col-md-7 bg-light p-4">
            <form id="contactForm">
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label fw-semibold">First Name</label>
                  <input type="text" class="form-control" name="firstName" placeholder="First Name">
                </div>
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Last Name</label>
                  <input type="text" class="form-control" name="lastName" placeholder="Last Name">
                </div>
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Email Address</label>
                  <input type="email" class="form-control" name="email" placeholder="Email Address">
                </div>
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Phone Number</label>
                  <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                </div>
                <div class="col-12">
                  <label class="form-label fw-semibold">Subject</label>
                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>
                <div class="col-12">
                  <label class="form-label fw-semibold">Message</label>
                  <textarea class="form-control" rows="4" name="message" placeholder="Message"></textarea>
                </div>
                <div class="col-12">
                  <!-- Google reCAPTCHA -->
                  <div class="g-recaptcha my-3" data-sitekey="6LcyAZYrAAAAAFtJwBBfCJC_9wBsA1GAo5kacCU6"></div>
                </div>
                <div class="col-12">
                  <button type="submit" id="contactBtnForm" class="btn btn-warning fw-bold text-white shadow-sm">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div> <!-- row g-0 -->
      </div>
    </div>
  </div>
</section>

<style>
  .contact-section {
    background: linear-gradient(to right, rgba(255, 204, 0, 0.7), rgba(255, 204, 0, 0.7)),
      url('assets/img/contact-bg.webp') center center / cover no-repeat;
    color: #fff;
    padding: 60px 0;
  }

  .contact-section h2 {
    font-weight: bold;
  }

  .social-icons i {
    font-size: 24px;
    margin-right: 15px;
    color: #fff;
    transition: 0.3s;
  }

  .social-icons i:hover {
    color: #000;
  }
</style>

<section class="contact-section">
  <div class="container">
    <div class="row align-items-center">
      <!-- Left Column -->
      <div class="col-md-6 mb-4">
        <h6 class="text-uppercase">Contact Us</h6>
        <h2 class="mb-3">We'd love to hear<br> from you</h2>
        <p class="text-white">Have any question in mind or want to enquire? Please feel free to contact us through the form or the following details.</p>
      </div>

      <!-- Right Column -->
      <div class="col-md-6">
        <h6 class="fw-bold">Let’s talk!</h6>
        <p>
          <a href="tel:+91 8877004937" class="text-decoration-none text-white">+91 8877004937</a><br>
          <a href="mailto:hello@seenandsold.in" class="text-white text-decoration-none">hello@seenandsold.in</a>
        </p>

        <h6 class="fw-bold">Headoffice</h6>
        <p class="text-white">IX/6066 KASHYAP GALI, GANDHI NAGAR, <br> East Delhi, Delhi, 110031, India</p>

        <div class="social-icons mt-3">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/faq.php'; ?>

<?php include 'includes/footer.php'; ?>