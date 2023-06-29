@extends('patient-features.layout.main-user')
@section('contents')

<section id="faq" class="faq section-bg mt-5">
  <div class="container h-100 mt-5">
  <div class="section-title" data-aos="fade-up">
          <p>Psychologist Details</p>
  </div>

    <div class="card">
      <div class="card-body">
        <div class="row d-flex justify-content-center pb-5">
          <div class="col-md-7 col-xl-5 mb-4 mb-md-0">
            <div class="py-4 d-flex flex-row">
              <h5><span class="far fa-check-square pe-2"></span><b>MindEx</b> |</h5>
              <span class="ps-2">Online Consultation Payment</span>
            </div>
            <h4 class="text-success">Rp. 150.000</h4>
            <h4>Online Consultation</h4>
            @foreach ($appointment as $appointments)
            <div class="d-flex pt-2">
              <div>
                <p>
                  <b>Psychologist: <span class="text-success">{{ $appointments->psychologist->fullname }}</span></b>
                </p>
              </div>
            </div>
            
            <div class="rounded d-flex" style="background-color: #f8f9fa;">
              <div class="p-2">Consultation Date</div>
              <div class="ms-auto p-2">{{ $appointments->appointmentDate }}</div>
            </div>

            <?php 
            $time = "";
            if($appointments->appointmentSection == 1){
                $time .= "08.00 AM - 09.30 AM";
            }else if($appointments->appointmentSection == 2){
                $time .= "10.00 AM - 11.30 AM";
            }else if($appointments->appointmentSection == 3){
                $time .= "13.30 PM - 15.00 PM";
            }else if($appointments->appointmentSection == 4){
                $time .= "15.30 PM - 17.00 PM";
            }
            ?>
            <div class="rounded d-flex my-3" style="background-color: #f8f9fa;">
              <div class="p-2">Consultation Time</div>
              <div class="ms-auto p-2">{{ $time }}</div>
            </div>

            <div class="rounded d-flex" style="background-color: #f8f9fa;">
              <div class="p-2">Appointment Status</div>
              <div class="ms-auto p-2">{{ $appointments->appointmentStatus }}</div>
            </div>
            @endforeach

            <!-- <div class="rounded mt-4" style="background-color: #f8f9fa;">
              <strong class="p-2">Payment Tutorial</strong>
              <p class="ms-2">1. Pay the fees with any bank to our account</p>
              <p class="ms-2">2. Put the payment proof to your Google drive account</p>
              <p class="ms-2">3. Share and Make the link limited to anyone who has the link</p>
            </div> -->

            <form method="POST" action="/upload-payment-proof" enctype="multipart/form-data">
              @csrf
              <h5 class="mt-4">Submit your payment proof</h5>
              <div class="form-floating-sm mt-1">
                  <input type="file" class="form-control" name="paymentLink" id="paymentLink" accept="image/*" required>
              </div>
              <input type="hidden" name="paymentDate" id="paymentDate" value='{{ date("Y/m/d") }}'>
              <input type="hidden" name="totalPrice" id="totalPrice" value="Rp. 150,000">
              <input type="hidden" name="paymentStatus" id="paymentStatus" value="Pending">
              <input type="hidden" name="appointment_id" id="appointment_id" value="{{ $appointments->id }}">
              <div class="pt-2 mt-1">
                <input type="submit" value="Submit Payment" class="btn btn-primary btn-sm btn-block btn-lg" />
              </div>
            </form>
          </div>

          <div class="col-md-5 col-xl-4 offset-xl-1">
            <div class="py-4 d-flex justify-content-end">
              <h6><a href="/appointment-history">Cancel and return to appointment history</a></h6>
            </div>
            <div class="rounded d-flex flex-column p-2" style="background-color: #f8f9fa;">
              <div class="p-2 me-3">
                <h4>Bank Information</h4>
              </div>
              <div class="p-2 d-flex">
                <div class="col-8">Bank: <br><b>MANDIRI</b></div>
              </div>
              <div class="p-2 d-flex">
                <div class="col-8">Account Name: <b>MUHAMMAD AQILA</b></div>
              </div>
              <div class="p-2 d-flex">
                <div class="col-8">Account Number: <b>1560019398694</b></div>
              </div>
              
              <div class="border-top px-2 mx-2"></div>
              <div class="p-2 d-flex pt-3">
                <div class="col-8">Consultation Fees</div>
                <div class="ms-auto"><b>Rp. 150.000</b></div>
              </div>
              <div class="p-2 d-flex">
                <div class="col-8">
                  Service Fees <span class="fa fa-question-circle text-dark"></span>
                </div>
                <div class="ms-auto"><b>Rp. 5.000</b></div>
              </div>
              <div class="border-top px-2 mx-2"></div>
              <div class="p-2 d-flex pt-3">
                <div class="col-8"><b>Total</b></div>
                <div class="ms-auto"><b class="text-success">Rp. 155.000</b></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection