@extends('admin.layouts.main')
@section('content')

<div class="pagetitle">
      <h1>Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row justify-content-center">

        <div class="col-lg-6">
          <!-- Card with titles, buttons, and links -->
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">User List Page</h5>
              <h6 class="card-subtitle mb-2 text-muted">Manage User</h6>
              <p class="card-text">This page is will show the list of user account and the function to manage it.</p>
              <p class="card-text"><a href="/admin-user-list" class="btn btn-primary">Proceed</a></p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
        </div>

        <div class="col-lg-6">
          <!-- Card with titles, buttons, and links -->
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">List of Mental Health Test Result</h5>
              <h6 class="card-subtitle mb-2 text-muted">Mental Health Test Result</h6>
              <p class="card-text">This page will show the all of mental health test result that is done by the patients.</p>
              <p class="card-text"><a href="/admin-mental-health-list" class="btn btn-primary">Proceed</a></p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
        </div>

        <div class="col-lg-6">
          <!-- Card with titles, buttons, and links -->
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">List of Mental Health Appointment</h5>
              <h6 class="card-subtitle mb-2 text-muted">Mental Health Consultation Appointment</h6>
              <p class="card-text">This page is for manage the list of mental health consultation appointment.</p>
              <p class="card-text"><a href="/admin-appointment-list" class="btn btn-primary">Proceed</a></p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
        </div>

        <div class="col-lg-6">
          <!-- Card with titles, buttons, and links -->
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">List of The Transaction</h5>
              <h6 class="card-subtitle mb-2 text-muted">Transaction of The Appointment</h6>
              <p class="card-text">This page is for manage the list of mental health consultation transaction.</p>
              <p class="card-text"><a href="/admin-transaction-list" class="btn btn-primary">Proceed</a></p>
            </div>
          </div><!-- End Card with titles, buttons, and links -->
        </div>

      </div>
    </section>

@endsection