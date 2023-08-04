<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mindex</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  @include('layouts.link')
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="logo">
        <a href="/psychologist-dashboard"><img src="assets/img/mindex.png" alt="" class="img-fluid"></a>
      </div>

      <h6 style="color: white">Psychologist Page</h6>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/psychologist-dashboard" class="nav-link" href="#hero">Home</a></li>
    
            <!-- User Profile -->   
            <li class="dropdown"><a href="#"><span style="font-style: italic;">Welcome <strong>{{ auth()->user()->username }}</strong></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><button onclick="location.href='/profile'" class="logoutButton dropdown-item">Profile</button></li>
            </ul>
          </li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
</div>
    </header>
    <!-- End Header -->

<section id="faq" class="faq section-bg mt-5">
      <div class="container">

      @if(session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>{{ session('error') }}</strong>
        </div>
      @endif
        <div class="section-title" data-aos="fade-up">
          <p>Your Consultation Schedule</p>
        </div>

        <form action="/psychologist-schedule-filter" method="post">
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
           <button type="button" onclick="location.href='/psychologist-schedule'" class="btn btn-outline-danger ms-3">Reset</button>
         </div>
        </form>

        @foreach ($app as $appointments)
        <div class="d-flex justify-content-center">
        <table class="table table-bordered w-50" style="background-color: white;">
          <thead class="table-secondary">
            <th class="text-center" colspan="2">Appointment Details</th>
          </thead>
          <tbody>
          <th>Patient</th>
          <td>{{ $appointments->patient->fullname }}</td>
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
          <td><input type="hidden" id="conf" value="{{ $appointments->appointmentStatus }}">{{ $appointments->appointmentStatus }}</td>
          </tbody>
          <tbody>
          <th>Meeting Link</th>
          <td>{{ $appointments->meetingLink }}</td>
          </tbody>
          <tbody>
          <td colspan="2" class="text-center" id="tblBtn">
            <a href="{{ url('/confirmApp/'.$appointments['id']) }}" onclick="return confirm('Are you sure want to confirm?')" class="btn btn-success">
            Confirm
            </a>
            <a href="{{ url('/rejectApp/'.$appointments['id']) }}" onclick="return confirm('Are you sure want to reject the appointment?')" class="btn btn-danger">
            Reject
            </a>
          </td>
          </tbody>
        </table>
        </div>
        @endforeach

        <div class="d-flex justify-content-center"> {{ $app->links() }} </div>

        <div class="d-flex justify-content-center mx-4 mt-5 mb-2 mb-lg-3">
            <button type="button" onclick="location.href='/psychologist-dashboard'" class="btn btn-primary btn-lg me-3">Back to Dashboard</button>
          </div>
        </div>
    </section>

      </div>
    </section>
    <script>
      var cnf = document.querySelectorAll("#conf");
      var tblBtn = document.querySelectorAll("#tblBtn");
      for (let i = 0; i < cnf.length; i++) {
        console.log(cnf[i].value);
        if(cnf[i].value !== "Waiting for confirmation"){
          tblBtn[i].remove();
        }
      }
    </script>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        @include('psychologist-features.layouts.footer')
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>
  
    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    @include('sweetalert::alert')
  
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
