<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('layouts.link')
</head>
<body style="background-color: #eee;">
<section>
  <div class="container h-100">
            @if(session()->has('logError'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ session('logError') }}</strong>
              </div>
            @endif
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card shadow text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
              <div class="d-flex justify-content-center">
              <img src="assets/img/logo.png" alt="" class="img-fluid" width="100px" height="100px">
              </div>
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign In</p>

                <form method="post" action="/signin">
                  @csrf

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-floating flex-fill mb-0">
                      <input type="email" id="email" name="email" class="form-control" placeholder="email" />
                      <label class="form-label" for="email">Your Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-floating flex-fill mb-0">
                      <input type="password" id="password" name="password" class="form-control" placeholder="password" />
                      <label class="form-label" for="password">Password</label>
                    </div>
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                    <p>Click <a href="/register" style="color:blue;">HERE</a> if you don't have an account yet</p>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="button" onclick="location.href='/'" class="btn btn-primary btn-lg me-3">Home</button>
                    <button type="submit" class="btn btn-primary btn-lg">Login</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="assets/img/login.png"
                  class="img-fluid" alt="Login image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@include('sweetalert::alert')
</body>
</html>