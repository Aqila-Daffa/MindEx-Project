@extends('patient-features.layout.main-user')
@section('contents')

<section>
  <div class="container h-100 mt-5">
  <div class="section-title" data-aos="fade-up">
          <p>Psychologist Details</p>
  </div>

  <div class="container mb-3 mt-3">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images">
                            <div class="text-center p-3"> <img id="main-image" src="assets/img/Psychologist2.png" width="100%" height="100%" /> </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-3">                                     
                            
                            <form action="/book" method="post">
                                @csrf
                          @foreach ($pDetail as $pDetails)    
                            <div class="mb-2">
                              <h5 class="text-uppercase text-muted brand">Profile Details</h5> 
                            </div>    
                            <div class="mb-1 d-sm-flex justify-content-between align-items-center"> 
                              <h5 class="text-uppercase mt-1">Psych. {{ $pDetails->fullname }}</h5>
                            </div>
                            
                            <div> 
                              <h6>Price: <strong>Rp. 150.000</strong></h6>
                              <h6 class="text-success mt-2 mb-0">For 1 Section of Consultation</h6>
                            </div>

                            <div class="d-sm-flex mt-3">
                              <h6 class="text-uppercase me-3">Appointment Date</h6>
                              <input type="date" class="form-control-sm border border-dark border-1" name="appointmentDate" id="appointmentDate">
                            </div>
                            <script>
                              var today = new Date();
                              var minDate = new Date(today.setDate(today.getDate() + 1)).toISOString().split("T")[0];
                              document.getElementById("appointmentDate").min = minDate;
                            </script>

                            <div class="d-sm-flex mt-3">
                              <h6 class="text-uppercase me-3">Appointment Section</h6>
                              <select class="form-select-sm border border-dark border-1" aria-label=".form-select-lg example" id="appointmentSection" name="appointmentSection">
                                <option hidden>Select Section</option>
                                <option value="1">1 (08.00 AM - 09.30 AM)</option>
                                <option value="2">2 (10.00 AM - 11.30 AM)</option>
                                <option value="3">3 (13.30 PM - 15.00 PM)</option>
                                <option value="4">4 (15.30 PM - 17.00 PM)</option>
                              </select>
                            </div>
                                
                            <input type="hidden" name="appointmentStatus" value="Waiting for confirmation">
                            <input type="hidden" name="meetingLink" value="-">
                            <input type="hidden" name="user_id_patient" value="{{ auth()->user()->id }}">
                            <input type="hidden" name="user_id_psychologist" value="{{ $pDetails->id }}">
                            <div class="mt-4 d-sm-flex justify-content-between align-items-center"> 
                              <button type="button" onclick="location.href='/psychologist-list'" class="btn btn-primary"><- Go Back</button>
                              <button type="submit" class="btn btn-primary mt-2">Book Appointment -></button> 
                            </div>
                            @endforeach
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    </div>
  </div>
</section>

@endsection