<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mindex | Forget Password</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('layouts.link')
</head>
<body style="background-color: #eee;">
<section>
  <div class="container h-100">
            @if(session()->has('checkError'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ session('checkError') }}</strong>
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
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Forget Password</p>

                <form method="post" action="/checkAcc">
                  @csrf

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-floating flex-fill mb-0">
                      <input type="email" id="email" name="email" class="form-control" placeholder="email" required/>
                      <label class="form-label @error('email') is-invalid @enderror" for="email">Your Email</label>
                      @error('email')
                      <div class="invalid-feedback">
                        {{$message}}
                      </div>
                      @enderror
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-floating flex-fill mb-0">
                      <input type="text" id="phone" name="phone" class="form-control" placeholder="phone" required/>
                      <label class="form-label @error('phone') is-invalid @enderror" for="phone">Your Phone</label>
                      @error('phone')
                      <div class="invalid-feedback">
                        {{$message}}
                      </div>
                      @enderror
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="button" onclick="location.href='/login'" class="btn btn-primary btn-lg me-3">Back</button>
                    <button type="submit" class="btn btn-primary btn-lg">Confirm Account</button>
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