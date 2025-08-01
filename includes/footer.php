<!-- Large Modal -->
<div
    class="modal fade"
    id="largeModal"
    tabindex="-1"
    aria-labelledby="largeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <!-- <div class="modal-header">
                    <h5 class="modal-title" id="largeModalLabel">
                      Consultancy Form
                    </h5>
                    <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    ></button>
                  </div> -->
            <!-- <div class="modal-body"> -->
            <section>
                <div class="card shadow">
                    <div class="card-header bg-warning">
                        <h2 class="mb-2 py-4 text-center text-white">
                            Consultancy Form
                        </h2>
                    </div>
                    <div class="card-body">
                        <!-- Step Form -->
                        <form id="consultForm">
                            <!-- Step 1 -->
                            <div class="step-content" id="step-1">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="fullName" class="form-label">Full Name
                                                <span class="text-danger">*</span></label>
                                            <input
                                                type="text"
                                                class="form-control rounded-3"
                                                id="fullName"
                                                name="fullName"
                                                placeholder="Enter Your Full Name"
                                                required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="phoneName" class="form-label">Phone Number
                                                <span class="text-danger">*</span></label>
                                            <input
                                                type="text"
                                                class="form-control rounded-3"
                                                id="phoneName"
                                                name="phoneName"
                                                placeholder="Enter Your Number"
                                                required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="businessName" class="form-label">Business Name / Brand Name</label>
                                            <input
                                                type="text"
                                                class="form-control rounded-3"
                                                id="businessName"
                                                name="businessName"
                                                placeholder="Enter Your Business Name / Brand Name"
                                                required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="website" class="form-label">Website / Instagram / LinkedIn Handle (if
                                                any)</label>
                                            <input
                                                type="text"
                                                class="form-control rounded-3"
                                                id="website"
                                                name="website"
                                                placeholder="Enter Your Website / Instagram / Other"
                                                required />
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button
                                        type="button"
                                        class="btn btn-warning text-white rounded-pill px-4"
                                        onclick="nextStep(2)">
                                        Continue <i class="fa fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Step 2 -->
                            <div class="step-content d-none" id="step-2">
                                <div class="mb-3">
                                    <label class="form-label">What stage are you currently at?</label>
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="ideaStage"
                                                    name="idea_stage"
                                                    checked />
                                                <label
                                                    class="form-check-label"
                                                    for="ideaStage">Idea stage</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="sixMonths"
                                                    name="six_months" />
                                                <label
                                                    class="form-check-label"
                                                    for="sixMonths">6 months to 1 year in</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="justLaunched"
                                                    name="just_launched" />
                                                <label
                                                    class="form-check-label"
                                                    for="justLaunched">Just launched</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="established"
                                                    name="established" />
                                                <label
                                                    class="form-check-label"
                                                    for="established">Established, looking to scale</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <button
                                        type="button"
                                        class="btn btn-outline-secondary rounded-pill px-4"
                                        onclick="nextStep(1)">
                                        <i class="fa fa-arrow-left"></i> Previous
                                    </button>
                                    <button
                                        type="button"
                                        class="btn btn-warning text-white rounded-pill px-4"
                                        onclick="nextStep(3)">
                                        Next <i class="fa fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Step 3 -->
                            <div class="step-content d-none" id="step-3">
                                <div class="mb-3">
                                    <label class="form-label">What type of business are you running?</label>
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="productBased"
                                                    checked />
                                                <label
                                                    class="form-check-label"
                                                    for="productBased">
                                                    Product-based
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="serviceBased" />
                                                <label
                                                    class="form-check-label"
                                                    for="serviceBased">Service-based</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="digitalCreator" />
                                                <label
                                                    class="form-check-label"
                                                    for="digitalCreator">Digital creator / Coach /
                                                    Consultant</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="Other" />
                                                <label class="form-check-label" for="Other">Other</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <button
                                        type="button"
                                        class="btn btn-outline-secondary rounded-pill px-4"
                                        onclick="nextStep(2)">
                                        <i class="fa fa-arrow-left"></i> Previous
                                    </button>
                                    <button
                                        type="button"
                                        class="btn btn-warning text-white rounded-pill px-4"
                                        onclick="nextStep(4)">
                                        Next <i class="fa fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Step 4 -->
                            <div class="step-content d-none" id="step-4">
                                <div class="mb-3">
                                    <label class="form-label">What’s your monthly marketing budget?</label>
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="ru10000"
                                                    checked />
                                                <label
                                                    class="form-check-label"
                                                    for="ru10000">Less than ₹10,000</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="ru25000" />
                                                <label
                                                    class="form-check-label"
                                                    for="ru25000">₹10,000 - ₹25,000</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="ru50000" />
                                                <label
                                                    class="form-check-label"
                                                    for="ru50000">₹25,000 - ₹50,000</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="1lakh" />
                                                <label class="form-check-label" for="1lakh">₹50,000 - ₹1 Lakh</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="1lakhmore" />
                                                <label
                                                    class="form-check-label"
                                                    for="1lakhmore">₹1 Lakh+</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <button
                                        type="button"
                                        class="btn btn-outline-secondary rounded-pill px-4"
                                        onclick="nextStep(3)">
                                        <i class="fa fa-arrow-left"></i> Previous
                                    </button>
                                    <button
                                        type="button"
                                        class="btn btn-warning text-white rounded-pill px-4"
                                        onclick="nextStep(5)">
                                        Next <i class="fa fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Step 5 -->
                            <div class="step-content d-none" id="step-5">
                                <div class="mb-3">
                                    <label class="form-label">What’s your monthly marketing budWhere do you
                                        need support right now? (You can select
                                        multiple)get?</label>
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="socialMedia"
                                                    checked />
                                                <label
                                                    class="form-check-label"
                                                    for="socialMedia">
                                                    Social Media Growth (IG/LinkedIn)</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="paidAds" />
                                                <label
                                                    class="form-check-label"
                                                    for="paidAds">Paid Ads (Meta/Google)</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="leadGeneration" />
                                                <label
                                                    class="form-check-label"
                                                    for="leadGeneration">Lead Generation</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="personalBranding" />
                                                <label
                                                    class="form-check-label"
                                                    for="personalBranding">Personal Branding</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="seoWebsiteTraffic" />
                                                <label
                                                    class="form-check-label"
                                                    for="seoWebsiteTraffic">SEO + Website Traffic</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="reelsViralContent" />
                                                <label
                                                    class="form-check-label"
                                                    for="reelsViralContent">Reels & Viral Content</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="somethingPleaseSpecify" />
                                                <label
                                                    class="form-check-label"
                                                    for="somethingPleaseSpecify">Something else (Please specify)</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <button
                                        type="button"
                                        class="btn btn-outline-secondary rounded-pill px-4"
                                        onclick="nextStep(4)">
                                        <i class="fa fa-arrow-left"></i> Previous
                                    </button>
                                    <button
                                        type="button"
                                        class="btn btn-warning text-white rounded-pill px-4"
                                        onclick="nextStep(6)">
                                        Next <i class="fa fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Step 6 -->
                            <div class="step-content d-none" id="step-6">
                                <div class="mb-3">
                                    <h5>Who is your ideal customer?</h5>
                                    <label class="form-label" for="ideaCustomer">Tell us in 1-2 lines — e.g. "Working
                                        professionals in Tier 1 cities" or "Moms aged
                                        28-35 looking for wellness solutions"</label>
                                    <textarea
                                        name=""
                                        id="ideaCustomer"
                                        class="form-control rounded-3"></textarea>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <button
                                        type="button"
                                        class="btn btn-outline-secondary rounded-pill px-4"
                                        onclick="nextStep(5)">
                                        <i class="fa fa-arrow-left"></i> Previous
                                    </button>
                                    <button
                                        type="button"
                                        class="btn btn-warning text-white rounded-pill px-4"
                                        onclick="nextStep(7)">
                                        Next <i class="fa fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Step 7 -->
                            <div class="step-content d-none" id="step-7">
                                <div class="mb-3">
                                    <label class="form-label" for="marketingChallenge">What is your current biggest marketing
                                        challenge?</label>
                                    <textarea
                                        name=""
                                        id="marketingChallenge"
                                        class="form-control rounded-3"></textarea>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <button
                                        type="button"
                                        class="btn btn-outline-secondary rounded-pill px-4"
                                        onclick="nextStep(6)">
                                        <i class="fa fa-arrow-left"></i> Previous
                                    </button>
                                    <button
                                        type="button"
                                        class="btn btn-warning text-white rounded-pill px-4"
                                        onclick="nextStep(8)">
                                        Next <i class="fa fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Step 8 -->
                            <div class="step-content d-none" id="step-8">
                                <div class="mb-3">
                                    <label class="form-label" for="marketingGoals">What are your top 3 marketing goals in the next
                                        3 months?</label>
                                    <textarea
                                        name=""
                                        id="marketingGoals"
                                        class="form-control rounded-3"></textarea>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button
                                        type="button"
                                        class="btn btn-outline-secondary rounded-pill px-4"
                                        onclick="nextStep(7)">
                                        <i class="fa fa-arrow-left"></i> Previous
                                    </button>
                                    <button
                                        type="button"
                                        class="btn btn-warning text-white rounded-pill px-4"
                                        onclick="nextStep(9)">
                                        Next <i class="fa fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Step 9 -->
                            <div class="step-content d-none" id="step-9">
                                <div class="mb-3">
                                    <label class="form-label">Are you willing to invest ₹500 in a 1:1
                                        Consultation Call to discuss the best growth
                                        plan for your brand?</label>
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="paymentLink"
                                                    checked />
                                                <label
                                                    class="form-check-label"
                                                    for="paymentLink">Yes, send me the payment link</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="1needmore" />
                                                <label
                                                    class="form-check-label"
                                                    for="1needmore">
                                                    I need more info</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="RightNow" />
                                                <label
                                                    class="form-check-label"
                                                    for="RightNow">Not right now</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="g-recaptcha my-3" data-sitekey="6LcyAZYrAAAAAFtJwBBfCJC_9wBsA1GAo5kacCU6"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button
                                        type="button"
                                        class="btn btn-outline-secondary rounded-pill px-4"
                                        onclick="nextStep(8)">
                                        <i class="fa fa-arrow-left"></i> Previous
                                    </button>
                                    <button
                                        type="submit"
                                        id="consultBtnForm"
                                        class="btn btn-success text-white rounded-pill px-4">
                                        Submit <i class="fa fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <!-- </div> -->
        </div>
    </div>
</div>

<!-- Collaboration Section -->
<section class="collaboration bg-warning mb-4">
    <div class="container pt-4 pb-4">
        <div class="row align-items-center">
            <div class="col-md-6 mb-3 mb-md-0 d-flex align-items-center">
                <a href="index.php">
                    <img
                        src="assets/img/seenandsold.webp"
                        alt="SEEN & SOLD"
                        height="50"
                        class="me-3" />
                </a>
                <div>
                    <h5 class="mb-1 fw-bold text-white">
                        Interested in Collaboration?
                    </h5>
                    <p class="mb-0 small text-white">
                        Challenge us! We want to work with you to create the really cool
                        stuff
                    </p>
                </div>
            </div>
            <div class="col-md-6 text-md-end">
                <form class="d-flex justify-content-center justify-content-md-end">
                    <input
                        type="email"
                        class="form-control w-50 me-2"
                        placeholder="Email Address" />
                    <button class="btn btn-danger">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</section>

<footer class="bg-warning text-dark pt-5 d-none d-lg-block">
    <!-- Main Footer -->
    <div class="container py-5">
        <div class="row">
            <!-- Left Column -->
            <div class="col-md-4 mb-4 mb-md-0">
                <a href="index.php">
                    <img
                        src="assets/img/seenandsold.webp"
                        alt="Seen & Sold"
                        height="50"
                        class="mb-3" />
                </a>
                <p>
                    Seen & Sold is your go-to performance-driven agency for product marketing, influencer partnerships, video commerce, and viral content creation. We help brands get seen, remembered, and sold.

                </p>
                <div class="d-flex gap-3">
                    <a href="#" class="bg-white px-3 py-2 rounded-circle"><i class="fab fa-facebook-f text-warning"></i></a>
                    <a href="#" class="bg-white px-3 py-2 rounded-circle"><i class="fab fa-twitter text-warning"></i></a>
                    <a href="#" class="bg-white px-3 py-2 rounded-circle"><i class="fab fa-linkedin-in text-warning"></i></a>
                    <a href="#" class="bg-white px-3 py-2 rounded-circle"><i class="fab fa-instagram text-warning"></i></a>
                </div>
            </div>

            <!-- Middle Column -->
            <div class="col-md-4 mb-4 mb-md-0">
                <h6 class="fw-bold">Quick Links</h6>
                <ul class="list-unstyled">
                    <li>
                        <a href="services.php" class="text-dark text-decoration-none">Services</a>
                    </li>
                    <li>
                        <a href="faqs.php" class="text-dark text-decoration-none">Help & Support</a>
                    </li>
                    <li>
                        <a href="about-us.php" class="text-dark text-decoration-none">About Us</a>
                    </li>
                    <li>
                        <a href="contact-us.php" class="text-dark text-decoration-none">Contact Us</a>
                    </li>
                </ul>
            </div>

            <!-- Right Column -->
            <div class="col-md-4">
                <h6 class="fw-bold">Address: </h6>
                <p class="mb-0">IX/6066 KASHYAP GALI,</p>
                <p class="mb-0">GANDHI NAGAR, East Delhi,</p>
                <p>Delhi, 110031, India</p>
            </div>
        </div>

        <hr class="my-4" />

        <!-- Bottom Footer -->
        <div class="d-flex justify-content-center align-items-center">
            <small class="text-dark"><a
                    href="terms-and-conditions.php"
                    class="text-decoration-none text-dark">Terms and conditions
                </a>
                |
            </small>
            <small class="text-dark"><a
                    href="privacy-policy.php"
                    class="text-decoration-none text-dark">
                    &nbsp;Privacy policy</a></small>
        </div>
    </div>
</footer>

<footer
    class="mobile-footer d-md-none fixed-bottom bg-white shadow-lg rounded-top-4 px-4 py-3">
    <div
        class="d-flex justify-content-between text-center align-items-center">
        <!-- Home -->
        <div class="flex-fill">
            <a href="index.php" class="text-decoration-none">
                <i class="fa fa-house text-warning fs-4 d-block"></i>
                <small class="text-warning">Home</small>
            </a>
        </div>

        <!-- Consult Now -->
        <div class="flex-fill" style="margin-top: -30px">
            <a href="javascript:void(0)" data-bs-toggle="modal"
                data-bs-target="#largeModal" class="text-decoration-none">
                <div
                    class="bg-light rounded-circle mx-auto mb-1 d-flex align-items-center justify-content-center"
                    style="width: 40px; height: 40px">
                    <i class="fa fa-plus fs-5 text-secondary d-block mt-1"></i>
                </div>
                <small class="text-secondary">Consult Now</small>
            </a>
        </div>

        <!-- Profile -->
        <div class="flex-fill">
            <a href="profile.php" class="text-decoration-none">
                <i class="fa fa-user text-secondary fs-4 d-block"></i>
                <small class="text-secondary">Profile</small>
            </a>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
    const testimonialSwiper = new Swiper(".testimonialSwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            },
        },
    });

    const brandSwiper = new Swiper(".brandSwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        breakpoints: {
            300: {
                slidesPerView: 2
            },
            480: {
                slidesPerView: 2
            },
            576: {
                slidesPerView: 3
            },
            768: {
                slidesPerView: 4
            },
            992: {
                slidesPerView: 5
            }
        }
    });

    const serviceSwiper = new Swiper(".serviceSwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        breakpoints: {
            300: {
                slidesPerView: 2
            },
            480: {
                slidesPerView: 2
            },
            576: {
                slidesPerView: 3
            },
            768: {
                slidesPerView: 4
            },
            992: {
                slidesPerView: 5
            }
        }
    });

    const valueSwiper = new Swiper(".valueSwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        breakpoints: {
            300: {
                slidesPerView: 1
            },
            480: {
                slidesPerView: 1
            },
            576: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 3
            },
            992: {
                slidesPerView: 3
            }
        }
    });
</script>
<!-- JavaScript to control step flow -->
<script>
    function nextStep(step) {
        document
            .querySelectorAll(".step-content")
            .forEach((el) => el.classList.add("d-none"));
        document.getElementById("step-" + step).classList.remove("d-none");

        const steps = document.querySelectorAll(".step-circle");
        steps.forEach((el, i) => {
            if (i + 1 === step) {
                el.classList.add("bg-warning", "text-white");
                el.classList.remove("bg-light", "text-dark", "border");
            } else {
                el.classList.remove("bg-warning", "text-white");
                el.classList.add("bg-light", "text-dark", "border");
            }
        });
    }

    // Optional: Handle consult form submit
    const consultForm = document.querySelector("#consultForm");
    const consultSubmitBtn = consultForm.querySelector("#consultBtnForm");
    consultForm.addEventListener("submit", function(e) {
        e.preventDefault();

        // Disable the button to prevent multiple clicks
        consultSubmitBtn.disabled = true;
        consultSubmitBtn.textContent = "Submitting...";

        const formData = new FormData(consultForm);
        const url =
            "https://script.google.com/macros/s/AKfycbxhujKYzvTrqQ3DCI3PVXrbhQjAuqBAialWrYEzyfuP91yX4KasIhx3IoiEeam7zfo/exec";

        fetch(url, {
                method: "POST",
                body: new URLSearchParams(formData),
            })
            .then((response) => response.text())
            .then((data) => {
                alert("Form submitted successfully!");
                consultForm.reset();
                this.reset();
                nextStep(1);
            })
            .catch((error) => {
                console.error("Error!", error.message);
            })
            .finally(() => {
                // Re-enable the button after success or failure
                consultSubmitBtn.disabled = false;
                consultSubmitBtn.textContent = "Submit";
            });
    });


    // Optional: Handle consult form submit
    const contactForm = document.querySelector("#contactForm");
    const contactSubmitBtn = contactForm.querySelector("#contactBtnForm");
    contactForm.addEventListener("submit", function(e) {
        e.preventDefault();

        const recaptchaResponse = grecaptcha.getResponse();
        if (!recaptchaResponse) {
            alert("Please complete the reCAPTCHA.");
            return;
        }

        // Disable the button to prevent multiple clicks
        contactSubmitBtn.disabled = true;
        contactSubmitBtn.textContent = "Sending...";

        const formData = new FormData(contactForm);

        formData.append("g-recaptcha-response", recaptchaResponse);

        const url =
            "https://script.google.com/macros/s/AKfycbxIj17vNvBXlQ3pFx7K0nf7nV8CtuFB4A6uFSrQHb3DrKojnkJIFjtNs7u0XriVThw/exec";

        fetch(url, {
                method: "POST",
                body: new URLSearchParams(formData),
            })
            .then((response) => response.text())
            .then((data) => {
                alert("Form submitted successfully!");
                contactForm.reset();
                this.reset();
                nextStep(1);
            })
            .catch((error) => {
                console.error("Error!", error.message);
            })
            .finally(() => {
                // Re-enable the button after success or failure
                contactSubmitBtn.disabled = false;
                contactSubmitBtn.textContent = "Send Message";
            });
    });
</script>
</body>

</html>