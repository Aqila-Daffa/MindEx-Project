@extends('admin.layouts.main')
@section('content')

    <div class="pagetitle">
      <h1>User List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">User List</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

              <div class="d-flex justify-content-between">
              <h5 class="card-title">List Data of Users</h5>

              <form action="/admin-user-search" method="post">
                @csrf
                <div class="input-group mt-3">
                  <input type="search" class="form-control rounded" name="search" placeholder="Search" aria-label="Search" aria-describedby="search-addon" value="{{ request('search') }}" />
                  <button type="submit" class="btn btn-outline-primary">search</button>
                </div>
              </form>
              </div>
              
              <!-- Table rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $index = 0;
                ?>
                @foreach ($user as $users)
                <?php
                $index += 1;
                ?>
                <script>
                  const check = () => {
                    return confirm("Are you sure want to delete this user ?");
                  }
                </script>
                  <tr>
                    <th scope="row">{{ $index }}</th>
                    <td>{{ $users->username }}</td>
                    <td>{{ $users->email }}</td>
                    <td>{{ $users->role }}</td>
                    <input type="hidden" name="userId" value="{{ $users['id'] }}">
                    <td><a href="{{ url('/deleteUser/'.$users['id']) }}" onclick="return check()" class="btn btn-danger">Delete</a></td>
                  </tr>
                @endforeach
                </tbody>
              </table>

              {{ $user->links() }}

            </div>
          </div>

        </div>
      </div>
    </section>
    

@endsection