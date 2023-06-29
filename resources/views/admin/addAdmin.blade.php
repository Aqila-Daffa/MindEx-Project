@extends('admin.layouts.main')
@section('content')

<form method="post" action="/createAdmin">
@csrf
<div class="pagetitle">
      <h1>Admin Form</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Add new admin</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="p-1">

  <!-- Text input -->
  <div class="d-flex justify-content-center mx-4 my-2">
    <div class="form-floating mb-3 w-50">
        <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="username" value="{{ old('username') }}" required>
        <label for="username">Username</label>
        @error('username')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
    </div>

    <div class="d-flex justify-content-center mx-4 my-2">
    <div class="form-floating mb-3 w-50">
        <input type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" id="fullname" placeholder="fullname" value="{{ old('fullname') }}" required>
        <label for="fullname">Full Name</label>
        @error('fullname')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
    </div>

    <div class="d-flex justify-content-center mx-4 my-2">
    <div class="form-floating mb-3 w-50">
        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="email" value="{{ old('email') }}" required>
        <label for="email">Email Address</label>
        @error('email')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
    </div>

  <div class="d-flex justify-content-center mx-4 my-2">
    <div class="form-floating mb-3 w-50">
        <input type="text" class="form-control @error('ic') is-invalid @enderror" name="ic" id="ic" placeholder="ic" value="{{ old('ic') }}" required>
        <label for="ic">IC Number</label>
        @error('ic')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
    </div>

    <div class="d-flex justify-content-center mx-4 my-2">
    <div class="form-floating mb-3 w-50">
        <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address" placeholder="address" value="{{ old('address') }}" required>
        <label for="address">Address</label>
        @error('address')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
    </div>

    <div class="d-flex justify-content-center mx-4 my-2">
    <div class="form-floating mb-3 w-50">
        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="phone" value="{{ old('phone') }}" required>
        <label for="address">Phone Number</label>
        @error('phone')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
    </div>

    <div class="d-flex justify-content-center mx-4 my-2">
    <div class="form-floating mb-3 w-50">
        <input type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" id="birthdate" placeholder="birthdate" min="1965-01-01" max="2010-01-01" required>
        <label for="address">Birth Date</label>
        @error('birthdate')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
    </div>

    <div class="d-flex justify-content-center mx-4 my-2">
    <div class="form-floating mb-3 w-50">
        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="password" required>
        <label for="username">Password</label>
        @error('password')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
    </div>

    <input type="hidden" name="role" id="role" value="Admin">

    <div class="d-flex justify-content-center mx-4 my-2">
      <button type="submit" class="btn btn-info btn-lg">Create account</button>
    </div>

  </div>
</form>

@endsection