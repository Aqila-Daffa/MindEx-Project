@extends('patient-features.layout.main-user')
@section('contents')
<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq section-bg mt-5">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <p>Appointment Dashboard</p>
        </div>

        <div class="d-flex justify-content-center">
        <div class="card w-50 mb-4">
          <div class="card-body">
            <h5 class="card-title mb-3">Appointment History</h5>
            <p class="card-text mb-4">This is your appointment history of online mental health consultation.</p>
            <div class="d-flex justify-content-end">
            <a href="/appointment-history" class="btn btn-primary">Go</a>
            </div>
          </div>
        </div>
        </div>

        <div class="d-flex justify-content-center">
        <div class="card w-50">
          <div class="card-body">
            <h5 class="card-title mb-3">Consultation Appointment</h5>
            <p class="card-text mb-4">You will fill in your personal data form first, and after that you can choose the psychologist for your online mental health consultation.</p>
            <div class="d-flex justify-content-end">
            <a href="/psychologist-list" class="btn btn-primary">Go</a>
            </div>
          </div>
        </div>
        </div>

        </div>
    </section><!-- End Our Team Section -->

      </div>
    </section><!-- End F.A.Q Section -->
@endsection