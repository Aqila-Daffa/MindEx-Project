@extends('admin.layouts.main')
@section('content')

<div class="pagetitle">
      <h1>Update Transaction Status</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Transaction List</li>
          <li class="breadcrumb-item active">Update Transaction Status</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="p-1">
  <form method="post" action="/update-payment-status">
  @csrf
  @foreach ($trans as $payment)
  <!-- Text input -->
  <div class="d-flex justify-content-center mx-4 my-2">
    <div class="form-control mb-2 w-50">
        <label>Payment ID</label>&emsp;
        <input type="text" name="id" value="{{ $payment->id }}" disabled>
    </div>
  </div>

  <div class="d-flex justify-content-center mx-4 my-2">
    <div class="form-control mb-2 w-50">
        <label>Appointment Status</label>&emsp;
        <input type="text" value="{{ $payment->appointment->appointmentStatus }}" disabled>
    </div>
  </div>

  <h5 class="text-center mt-4">Payment Status</h5>
  <div class="d-flex justify-content-center mx-4 my-2">
    <select class="form-select mb-2 w-50" name="paymentStatus" required>
      <option hidden value="{{ $payment->paymentStatus }}">{{ $payment->paymentStatus }}</option>
      <option value="Payment Approved">Payment Approved</option>
      <option value="Payment Rejected">Payment Rejected</option>
    </select>
  </div>  

  @endforeach

  <input type="hidden" name="id" value="{{ $payment->id }}">
    <div class="d-flex justify-content-center mx-4 my-2">
      <button type="button" onclick="location.href='/update-payment-status'" class="btn btn-danger btn-lg me-3">Go Back</button>
      <button type="submit" class="btn btn-info btn-lg">update Status</button>
    </div>

  </div>
</form>

@endsection