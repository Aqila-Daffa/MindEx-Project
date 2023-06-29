<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('layouts.link')
</head>
<body style="background-color: #00142d;">
<div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-6 mx-auto">
             <div class="card border-0 shadow-lg" style="border-radius: 10%; background:#1b2e45; top: 120px;">
                    <div class="d-flex justify-content-center">
                    <div class="user_logo_bord">
                    <div class="d-flex justify-content-center">
                     <img src="assets/img/logo.png" class="user_logo" alt="user login image">
                    </div>
                    </div>
                    </div>
              <div class="card-body p-5">
              <h5 class="card-title text-center mb-4 my-5 fs-4 text-white">Update Profile</h5>
              <form action="/updateProfile" method="post">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" id="fullname" placeholder="fullname" value="{{ old('fullname') }}" required>
                    <label for="username">Full Name</label>
                    @error('fullname')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address" placeholder="address" value="{{ old('address') }}" required>
                    <label for="address">Address</label>
                    @error('address')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="phone" value="{{ old('phone') }}" required>
                    <label for="address">Phone Number</label>
                    @error('phone')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" id="birthdate" placeholder="birthdate" min="1965-01-01" max="2010-01-01" required>
                    <label for="address">Birth Date</label>
                    @error('birthdate')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="d-flex justify-content-center mx-4 my-2">
                    <button type="button" onclick="location.href='/profile'" class="btn btn-info btn-lg me-3">Back</button>
                    <button type="submit" class="btn btn-info btn-lg">Save</button>
                </div>
                </form>
              </div>
              </div>
            </div>
        </div>
    </div>
@include('sweetalert::alert')
</body>
</html>