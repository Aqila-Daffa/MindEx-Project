@extends('patient-features.layout.main-user')
@section('contents')

<section id="faq" class="faq section-bg mt-5">
      <div class="container">

      @if(session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>{{ session('error') }}</strong>
        </div>
      @endif

        <div class="section-title" data-aos="fade-up">
          <p>Your Appointment History</p>
        </div>

        <form action="/appointment-history-filter" method="post">
         @csrf
         <div class="d-flex justify-content-center mb-5 mt-3">
         <select class="custom-select me-3" id="status" name="status">
            <option hidden value="null">Appointment Status</option>
            <option value="Waiting for confirmation">Waiting for confirmation</option>
            <option value="Rejected">Rejected</option>
            <option value="Confirmed">Confirmed</option>
            <option value="Pending">Pending</option>
            <option value="Payment Rejected">Payment Rejected</option>
            <option value="Payment Approved">Payment Approved</option>
          </select>

          <input type="date" class="form-control-sm border border-dark border-1 me-3" name="date" id="date" value="{{ request('date') }}">

           <button type="submit" class="btn btn-outline-primary">Filter</button>
           <button type="button" onclick="location.href='/appointment-history'" class="btn btn-outline-danger ms-3">Reset</button>
         </div>
        </form>

        @foreach ($app as $appointments)
        <div class="d-flex justify-content-center">
        <table class="table table-bordered w-50" style="background-color: white;">
          <thead class="table-secondary">
            <th class="text-center" colspan="2">Appointment Details</th>
          </thead>
          <tbody>
          <th>Psychologist</th>
          <td>{{ $appointments->psychologist->fullname }}</td>
          </tbody>
          <tbody>
          <th>Appointment Date</th>
          <td>{{ $appointments->appointmentDate }}</td>
          </tbody>
          <tbody>
          <th>Appointment Section</th>
          <td>{{ $appointments->appointmentSection }}</td>
          </tbody>
          <tbody>
          <th>Appointment Status</th>
          <td><input type="hidden" class="conf" value="{{ $appointments->appointmentStatus }}">{{ $appointments->appointmentStatus }}</td>
          </tbody>
          <tbody>
          <th>Meeting Link</th>
          <td>{{ $appointments->meetingLink }}</td>
          </tbody>
          <tbody>
          <td colspan="2" class="text-center" id="cancelBtn">
            <a href="{{ url('/deleteAppointment/'.$appointments['id']) }}" onclick="return confirm('Are you sure want to cancel the appointment?')" class="btn btn-danger">
              Cancel Appointment
            </a>
          </td>
          <td colspan="2" class="text-center" id="tblBtn">
            <a href="/payment-page?id={{ $appointments->id }}" class="btn btn-success">
              Proceed to Payment
            </a>
            <a href="{{ url('/deleteAppointment/'.$appointments['id']) }}" onclick="return confirm('Are you sure want to cancel the appointment?')" class="btn btn-danger">
              Cancel Appointment
            </a>
          </td>
          </tbody>
        </table>
        </div>
        @endforeach

        <div class="d-flex justify-content-center"> {{ $app->links() }} </div>

        <div class="d-flex justify-content-center mx-4 mt-5 mb-2 mb-lg-3">
            <button type="button" onclick="location.href='/consultation'" class="btn btn-primary btn-lg me-3">Back to Dashboard</button>
          </div>
        </div>
    </section>

    <script>
      var cnf = document.querySelectorAll(".conf");
      var cancelBtn = document.querySelectorAll("#cancelBtn");
      var tblBtn = document.querySelectorAll("#tblBtn");

      for (let i = 0; i < cnf.length; i++) {
        if(cnf[i].value !== "Waiting for confirmation"){
          cancelBtn[i].remove();
        }

        if(cnf[i].value !== "Confirmed"){
          tblBtn[i].remove();
        }
      }
    </script>
@endsection