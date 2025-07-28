<?php include 'includes/header.php'; ?>

<section class="container my-5">
  <div class="card shadow">
    <div class="card-header bg-warning">
      <h2 class="mb-2 py-4 text-center text-white">Consultancy Form</h2>
    </div>
    <div class="card-body">
      <!-- Step Form -->
      <form id="consultForm">
        <!-- Step 1 -->
        <div class="step-content" id="step-1">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="mb-3">
                <label for="fullName" class="form-label">Full Name <span class="text-danger">*</span></label>
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
                <label for="phoneName" class="form-label">Phone Number <span class="text-danger">*</span></label>
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
                <label for="website" class="form-label">Website / Instagram / LinkedIn Handle (if any)</label>
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
                  <label class="form-check-label" for="ideaStage">Idea stage</label>
                </div>
              </div>
              <div class="col-md-6 mb-2">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="sixMonths"
                    name="six_months" />
                  <label class="form-check-label" for="sixMonths">6 months to 1 year in</label>
                </div>
              </div>
              <div class="col-md-6 mb-2">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="justLaunched"
                    name="just_launched" />
                  <label class="form-check-label" for="justLaunched">Just launched</label>
                </div>
              </div>
              <div class="col-md-6 mb-2">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="established"
                    name="established" />
                  <label class="form-check-label" for="established">Established, looking to scale</label>
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
                  <label class="form-check-label" for="productBased">
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
                  <label class="form-check-label" for="serviceBased">Service-based</label>
                </div>
              </div>
              <div class="col-md-6 mb-2">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="digitalCreator" />
                  <label class="form-check-label" for="digitalCreator">Digital creator / Coach / Consultant</label>
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
                  <label class="form-check-label" for="ru10000">Less than ₹10,000</label>
                </div>
              </div>
              <div class="col-md-6 mb-2">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="ru25000" />
                  <label class="form-check-label" for="ru25000">₹10,000 - ₹25,000</label>
                </div>
              </div>
              <div class="col-md-6 mb-2">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="ru50000" />
                  <label class="form-check-label" for="ru50000">₹25,000 - ₹50,000</label>
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
                  <label class="form-check-label" for="1lakhmore">₹1 Lakh+</label>
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
            <label class="form-label">What’s your monthly marketing budWhere do you need support
              right now? (You can select multiple)get?</label>
            <div class="row">
              <div class="col-md-6 mb-2">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="socialMedia"
                    checked />
                  <label class="form-check-label" for="socialMedia">
                    Social Media Growth (IG/LinkedIn)</label>
                </div>
              </div>
              <div class="col-md-6 mb-2">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="paidAds" />
                  <label class="form-check-label" for="paidAds">Paid Ads (Meta/Google)</label>
                </div>
              </div>
              <div class="col-md-6 mb-2">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="leadGeneration" />
                  <label class="form-check-label" for="leadGeneration">Lead Generation</label>
                </div>
              </div>
              <div class="col-md-6 mb-2">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="personalBranding" />
                  <label class="form-check-label" for="personalBranding">Personal Branding</label>
                </div>
              </div>
              <div class="col-md-6 mb-2">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="seoWebsiteTraffic" />
                  <label class="form-check-label" for="seoWebsiteTraffic">SEO + Website Traffic</label>
                </div>
              </div>
              <div class="col-md-6 mb-2">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="reelsViralContent" />
                  <label class="form-check-label" for="reelsViralContent">Reels & Viral Content</label>
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
            <label class="form-label" for="ideaCustomer">Tell us in 1-2 lines — e.g. "Working professionals in Tier 1
              cities" or "Moms aged 28-35 looking for wellness
              solutions"</label>
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
            <label class="form-label" for="marketingChallenge">What is your current biggest marketing challenge?</label>
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
            <label class="form-label" for="marketingGoals">What are your top 3 marketing goals in the next 3
              months?</label>
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
            <label class="form-label">Are you willing to invest ₹500 in a 1:1 Consultation Call to
              discuss the best growth plan for your brand?</label>
            <div class="row">
              <div class="col-md-6 mb-2">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="paymentLink"
                    checked />
                  <label class="form-check-label" for="paymentLink">Yes, send me the payment link</label>
                </div>
              </div>
              <div class="col-md-6 mb-2">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="1needmore" />
                  <label class="form-check-label" for="1needmore">
                    I need more info</label>
                </div>
              </div>
              <div class="col-md-6 mb-2">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="RightNow" />
                  <label class="form-check-label" for="RightNow">Not right now</label>
                </div>
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
              class="btn btn-success text-white rounded-pill px-4">
              Submit <i class="fa fa-arrow-right"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>