@extends('patient-features.layout.main-user')
@section('contents')

<section>
  <div class="container h-100 mt-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card shadow text-black" style="border-radius: 25px;">
          <div class="card-body p-md-3">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Online Consultation Time</p>

                <form method="post" action="/updateProfile">
                  @csrf

                <div class="card w-100 mb-3">
                  <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-primary">Button</a>
                  </div>
                </div>  

                <div class="form-floating mb-3">
                    <input type="date" class="form-control @error('appointmentDate') is-invalid @enderror" name="appointmentDate" id="appointmentDate" placeholder="appointmentDate" min="1965-01-01" max="2010-01-01" required>
                    <label for="appointmentDate">Appointment Date</label>
                    @error('appointmentDate')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                
                <div class="form-floating mb-3">
                    <select class="form-select form-select-sm" aria-label=".form-select-lg example" id="appointmentSection" name="appointmentSection">
                        <option hidden>Select Appointment Section</option>
                        <option value="08.00 AM - 09.30 AM">08.00 AM - 09.30 AM</option>
                        <option value="10.00 AM - 11.30 AM">10.00 AM - 11.30 AM</option>
                        <option value="13.30 PM - 15.00 PM">13.30 PM - 15.00 PM</option>
                        <option value="15.30 PM - 17.00 PM">15.30 PM - 17.00 PM</option>
                    </select>
                    @error('address')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <input type="hidden" name="status" value="Pending" />

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="button" onclick="location.href='/'" class="btn btn-primary btn-lg me-3">Home</button>
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="assets/img/consult.png"
                  class="img-fluid" alt="consult image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection