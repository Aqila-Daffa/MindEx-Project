@extends('patient-features.layout.main-user')
@section('contents')

<section>
  <div class="container h-100 mt-5">
  <div class="section-title" data-aos="fade-up">
          <p>Psychologist List</p>
  </div>

  @foreach ($psychologist as $psyc)
    <div class="row justify-content-center mb-3">
      <div class="col-md-12 col-xl-10">
        <div class="card shadow-0 border rounded-3">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                <div class="bg-image hover-zoom ripple rounded ripple-surface">
                  <img src="assets/img/Psychologist2.png"
                    class="w-100" />
                  <a href="#!">
                    <div class="hover-overlay">
                      <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 col-xl-6">
              <div class="mask">
                <div class="d-sm-flex justify-content-between align-items-center">
                <h5>Psych. {{ $psyc->fullname }}</h5> 
                </div>
              </div>

                <div class="mt-3 mb-1 text-muted small">
                  <span>Depression</span>
                  <span class="text-primary"> • </span>
                  <span>Stress</span>
                  <span class="text-primary"> • </span>
                  <span>Anxiety<br /></span>
                </div>
                <div class="mb-1 text-muted small">
                  <span>Occupation</span>
                  <span class="text-primary"> • </span>
                  <span>Emotion Control</span>
                  <span class="text-primary"> • </span>
                  <span>Family<br /></span>
                </div>
                <div class="mb-0 text-muted small">
                  <span>Marriage</span>
                  <span class="text-primary"> • </span>
                  <span>Love Life</span>
                  <span class="text-primary"> • </span>
                  <span>Self Development<br /></span>
                </div>
                
              </div>
              <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                <div class="d-flex flex-row align-items-center mb-1">
                  <h4 class="mb-1 me-1">Rp. 150.000</h4>
                  <!-- To make scratch in old price <span class="text-danger"><s>$20.99</s></span> -->
                </div>
                <h6 class="text-success mt-2 mb-0">For 1 Section of Consultation</h6>
                <div class="d-flex flex-column mt-5">
                  <button class="btn btn-primary btn-sm" onclick="location.href='/psychologist-detail?name={{ $psyc->fullname }}'" type="button">Detail Profile</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    
    </div>
  </div>
</section>

@endsection