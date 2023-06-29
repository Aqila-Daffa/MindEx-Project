@extends('patient-features.layout.main-user')
@section('contents')
<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq section-bg mt-5">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <p>Your Mental Health Result</p>
        </div>

        <div class="d-flex justify-content-center mt-3">
        <div class="card w-50" style="width: 18rem;">
            <div class="card-header text-center">
               <strong>Depression Test Result</strong>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Score:&emsp;<strong>{{ $dScore }}</strong></li>
                <li class="list-group-item">Interpretation:&emsp;<strong>{{ $dResult }}</strong></li>
            </ul>
        </div>
        </div>

        <div class="d-flex justify-content-center mt-4">
        <div class="card w-50" style="width: 18rem;">
            <div class="card-header text-center">
               <strong>Anxiety Test Result</strong>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Score:&emsp;<strong>{{ $aScore }}</strong></li>
                <li class="list-group-item">Interpretation:&emsp;<strong>{{ $aResult }}</strong></li>
            </ul>
        </div>
        </div>

        <div class="d-flex justify-content-center mt-4">
        <div class="card w-50" style="width: 18rem;">
            <div class="card-header text-center">
               <strong>Stress Test Result</strong>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Score:&emsp;<strong>{{ $sScore }}</strong></li>
                <li class="list-group-item">Interpretation:&emsp;<strong>{{ $sResult }}</strong></li>
            </ul>
        </div>
        </div>

        <div class="d-flex justify-content-center mx-4 mt-5 mb-2 mb-lg-3">
            <button type="button" onclick="location.href='/mental-health'" class="btn btn-primary btn-lg me-3">Back to Dashboard</button>
          </div>
        </div>
    </section>
    <!-- End Our Team Section -->

      </div>
    </section><!-- End F.A.Q Section -->
@endsection