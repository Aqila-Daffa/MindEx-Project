@extends('admin.layouts.main')
@section('content')

    <div class="pagetitle">
      <h1>Mental Health Test List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item active">Mental Health Test List</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              
              <div class="d-flex justify-content-between">
              <h5 class="card-title">List Data of Mental Health Test</h5>

              <form action="/admin-mental-health-search" method="get">
                @csrf
                <div class="input-group mt-3">
                  <input type="search" class="form-control rounded" name="search" placeholder="Search by User ID" aria-label="Search" aria-describedby="search-addon" value="{{ request('search') }}" />
                  <button type="submit" class="btn btn-outline-primary">search</button>
                </div>
              </form>
              </div>
              
              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">User ID</th>
                    <th scope="col">Depression Score</th>
                    <th scope="col">Depression Result</th>
                    <th scope="col">Anxiety Score</th>
                    <th scope="col">Anxiety Result</th>
                    <th scope="col">Stress Score</th>
                    <th scope="col">Stress Result</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $index = 0;
                ?>
                @foreach ($mh as $mht)
                <?php
                $index += 1;
                ?>
                  <tr>
                    <th scope="row">{{ $index }}</th>
                    <td>{{ $mht->user_id }}</td>
                    <td>{{ $mht->depScore }}</td>
                    <td>{{ $mht->depResult }}</td>
                    <td>{{ $mht->anxScore }}</td>
                    <td>{{ $mht->anxResult }}</td>
                    <td>{{ $mht->strScore }}</td>
                    <td>{{ $mht->strResult }}</td>
                  </tr>
                @endforeach
                </tbody>
              </table>

              {{ $mh->links() }}

            </div>
          </div>

        </div>
      </div>
    </section>
    

@endsection