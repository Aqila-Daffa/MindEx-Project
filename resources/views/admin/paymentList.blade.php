@extends('admin.layouts.main')
@section('content')

    <div class="pagetitle">
      <h1>Transaction List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item active">Transaction List</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between">
              <h5 class="card-title">List Data of Transaction</h5>
              <form action="/search-transaction-list" method="post">
                @csrf
                <div class="input-group mt-3">
                  <input type="search" class="form-control rounded" name="search" placeholder="Put App ID, Pay Date" aria-label="Search" aria-describedby="search-addon" />
                  <button type="submit" class="btn btn-outline-primary">search</button>
                </div>
              </form>
            </div>  
              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Payment Proof</th>
                    <th scope="col">Date</th>
                    <th scope="col">Price</th></th>
                    <th scope="col">Status</th>
                    <th scope="col">Appointment ID</th>
                    <th scope="col" class="text-center" colspan="2">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $index = 0;
                ?>
                @foreach ($trans as $payment)
                <?php
                $index += 1;
                ?>
                  <tr>
                    <th scope="row">{{ $index }}</th>
                    <td>{{ $payment->id }}</td>
                    <td>
                    <a href="{{ asset('paymentProof/'.$payment['paymentLink']) }}" target="_blank">View Payment Proof</a>
                    </td>
                    <td>{{ $payment->paymentDate }}</td>
                    <td>{{ $payment->totalPrice }}</td>
                    <td>{{ $payment->paymentStatus }}</td>
                    <td>{{ $payment->appointment_id }}</td>
                    <td>
                        <a href="{{ url('/edit-payment-link/'.$payment['id']) }}" class="btn btn-success">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('/deletePayment/'.$payment['id']) }}" onclick="return confirm('Are you sure want to delete this payment ?')" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>

              {{ $trans->links() }}

            </div>
          </div>

        </div>
      </div>
    </section>
    

@endsection