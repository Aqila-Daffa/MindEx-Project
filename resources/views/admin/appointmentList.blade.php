@extends('admin.layouts.main')
@section('content')

    <div class="pagetitle">
      <h1>Appointment List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item active">Appointment List</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between">
              <h5 class="card-title">List Data of Appointment</h5>

              <form action="/admin-appointment-data" method="post">
                @csrf
                <div class="input-group mt-3">
                  <input type="search" class="form-control rounded" name="search" placeholder="Put ID, Date, Status" aria-label="Search" aria-describedby="search-addon" value="{{ request('search') }}" />
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
                    <th scope="col">Date</th>
                    <th scope="col">Section</th>
                    <th scope="col">Status</th>
                    <th scope="col">Link</th>
                    <th scope="col">Patient</th>
                    <th scope="col">Psychologist</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $index = 0;
                ?>
                @foreach ($app as $apps)
                <?php
                $index += 1;
                ?>
                  <tr>
                    <th scope="row">{{ $index }}</th>
                    <td>{{ $apps->id }}</td>
                    <td>{{ $apps->appointmentDate }}</td>
                    <td>{{ $apps->appointmentSection }}</td>
                    <td><input type="hidden" id="conf" value="{{ $apps->appointmentStatus }}">{{ $apps->appointmentStatus }}</td>
                    <td>{{ $apps->meetingLink }}</td>
                    <td>{{ $apps->user_id_patient }}</td>
                    <td>{{ $apps->user_id_psychologist }}</td>
                    <td id="tblBtn">
                        <a href="{{ url('/edit-link/'.$apps['id']) }}" onclick="return check()" class="btn btn-success">Edit</a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
              {{ $app->links() }}

              <script>
                var cnf = document.querySelectorAll("#conf");
                var tblBtn = document.querySelectorAll("#tblBtn");
                for (let i = 0; i < cnf.length; i++) {
                  console.log(cnf[i].value);
                  if(cnf[i].value === "Waiting for confirmation"){
                    tblBtn[i].remove();
                  }
                }
              </script>

            </div>
          </div>

        </div>
      </div>
    </section>
    

@endsection