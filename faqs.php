<?php include 'includes/header.php'; ?>


<section class="py-5 bg-white">
  <div class="container">
    <div class="row align-items-center">
      <!-- Left Image -->
      <div class="col-md-5 text-center mb-4 mb-md-0">
        <div class="d-none d-lg-block">
          <img
            src="assets/img/faq.webp"
            alt="FAQ"
            class="img-fluid"
            style="max-height: 400px" />
        </div>
      </div>

      <!-- Right Accordion -->
      <div class="col-md-7">
        <h2 class="fw-bold mb-4">Frequently Asked Questions</h2>

        <div class="accordion" id="faqAccordion">
          <!-- Item 1 -->
          <div class="accordion-item border-0 mb-3 shadow-sm rounded">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed rounded"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#faq1">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr
              </button>
            </h2>
            <div
              id="faq1"
              class="accordion-collapse collapse"
              data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                diam nonumy eirmod.
              </div>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="accordion-item border-0 mb-3 shadow-sm rounded">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed rounded"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#faq2">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr
              </button>
            </h2>
            <div
              id="faq2"
              class="accordion-collapse collapse"
              data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                diam nonumy eirmod.
              </div>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="accordion-item border-0 mb-3 shadow-sm rounded">
            <h2 class="accordion-header">
              <button
                class="accordion-button rounded"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#faq3"
                aria-expanded="true">
                <span class="text-warning fw-bold">Lorem ipsum dolor sit amet, consetetur sadipscing
                  elitr</span>
              </button>
            </h2>
            <div
              id="faq3"
              class="accordion-collapse collapse show"
              data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                diam nonumy eirmod.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>