<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('layouts.link')
</head>
<body style="background-color: #00142d;">
<div class="container h-100">
        <div class="row">
            <div class="col-sm-10 col-md-6 col-lg-6 mx-auto">
            
             <div class="card border-0 shadow-lg" style="border-radius: 10%; background:#1b2e45; top: 125px;">
                    <div class="d-flex justify-content-center">
                    <a href="/">
                    <div class="user_logo_bord">
                    <div class="d-flex justify-content-center">
                     <img src="assets/img/logo.png" class="user_logo" alt="user login image">
                    </div></a>
                    </div>
                    </div>
              <div class="card-body p-5 bck">
              <h4 class="card-title text-center mb-4 my-5 fs-3 text-white">{{ auth()->user()->username }}'s Profile</h4>
                <div class="mb-4">
                    <h5 class="text-light">Full Name:  &nbsp;<strong>{{auth()->user()->fullname}}</strong></h5>
                </div>
                <div class="mb-4">
                    <h5 class="text-light">Email Address: &nbsp;<strong>{{auth()->user()->email}}</strong></h5>
                </div>
                <div class="mb-4">
                    <h5 class="text-light">Phone Number Data: &nbsp;<strong>{{auth()->user()->phone}}</strong></h5>
                </div>
                <div class="mb-4">
                    <h5 class="text-light">Birth Date: &nbsp;<strong>{{auth()->user()->birthdate}}</strong></h5>
                </div>
                <div class="mb-4">
                    <h5 class="text-light">Address: &nbsp;<strong>{{auth()->user()->address}}</strong></h5>
                </div>
                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-2">
                    <button type="button" onclick="location.href='/'" class="btn btn-info btn-lg me-3">Home</button>
                    <button type="button" onclick="location.href='/update-profile'" class="btn btn-info btn-lg">Update</button>
                  </div>
              </div>
              </div>
            </div>
        </div>
    </div>
@include('sweetalert::alert')
</body>
</html>