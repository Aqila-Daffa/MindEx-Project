@extends('admin.layouts.main')
@section('content')

<div class="pagetitle">
      <h1>Add Meeting Link</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Appointment List</li>
          <li class="breadcrumb-item active">Add Meeting Link</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    @if(session()->has('Error'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ session('Error') }}</strong>
      </div>
    @endif

    <div class="p-1">
  <form method="post" action="/updateLink">
  @csrf
  @foreach ($appointment as $appointments)
  <!-- Text input -->
  <div class="d-flex justify-content-center mx-4 my-2">
    <div class="form-control mb-2 w-50">
        <label>Appointment ID</label>&emsp;
        <input type="text" name="id" value="{{ $appointments->id }}" disabled>
    </div>
  </div>

  <div class="d-flex justify-content-center mx-4 my-2">
    <select class="form-select mb-2 w-50" name="appointmentStatus" required>
      <option hidden value="{{ $appointments->appointmentStatus }}">{{ $appointments->appointmentStatus }}</option>
      <option value="Payment Approved">Payment Approved</option>
      <option value="Payment Rejected">Payment Rejected</option>
    </select>
  </div>  

  <div class="d-flex justify-content-center mx-4 my-2">
    <div class="form-floating mb-2 w-50">
        <input type="text" class="form-control @error('meetingLink') is-invalid @enderror" name="meetingLink" id="meetingLink" placeholder="link" value="{{ $appointments->meetingLink }}" required>
        <label for="meetingLink">Meeting Link</label>
        @error('link')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
  </div>
  @endforeach

  <input type="hidden" name="id" value="{{ $appointments->id }}">
    <div class="d-flex justify-content-center mx-4 my-2">
      <button type="button" onclick="location.href='/admin-appointment-list'" class="btn btn-danger btn-lg me-3">Go Back</button>
      <button type="submit" class="btn btn-info btn-lg">Update</button>
    </div>

  </div>
</form>

@endsection