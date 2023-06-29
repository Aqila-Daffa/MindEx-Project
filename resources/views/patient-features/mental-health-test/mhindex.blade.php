@extends('patient-features.layout.main-user')
@section('contents')
<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq section-bg mt-5">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <p>Mental Health Test Dashboard</p>
        </div>

        <div class="d-flex justify-content-center">
        <div class="card w-50 mb-4">
          <div class="card-body">
            <h5 class="card-title mb-3">Mental Health Status</h5>
            <p class="card-text mb-4">This is your current mental health interpretation or you can retest if you feel your mental condition is getting better.</p>
            <div class="d-flex justify-content-end">
            <a href="/mental-health-status" class="btn btn-primary">Go</a>
            </div>
          </div>
        </div>
        </div>

        <div class="d-flex justify-content-center">
        <div class="card w-50">
          <div class="card-body">
            <h5 class="card-title mb-3">Mental Health Test</h5>
            <p class="card-text mb-4">There will be <strong>42 questions</strong> that you need to fill in with your very honest answer to know what is your mental health interpretation.</p>
            <div class="d-flex justify-content-end">
            <a href="/mental-health-test" onclick="return checkReady()" class="btn btn-primary">Go</a>
            </div>
          </div>
        </div>
        </div>

        <script>
            function checkReady() {
                const response = confirm("Are you ready to fill out 42 questions of mental health test?");
            if (response) {
                return true;
            } else {
                return false;
            }
            }
        </script>

        </div>
    </section><!-- End Our Team Section -->

      </div>
    </section><!-- End F.A.Q Section -->
@endsection