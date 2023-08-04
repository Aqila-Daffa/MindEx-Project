<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mindex | Sign Up</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('layouts.link')
</head>
<body style="background-color: #eee;">
<section>
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card shadow text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

              <div class="d-flex justify-content-center">
              <img src="assets/img/logo.png" alt="" class="img-fluid" width="100px" height="100px">
              </div>
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form method="post" action="/regist">
                  @csrf
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-floating flex-fill mb-0">
                      <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" placeholder="username"/>
                      <label class="form-label" for="username">Your Username</label>
                      @error('username')
                      <div class="invalid-feedback">
                        {{$message}}
                      </div>
                      @enderror
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-floating flex-fill mb-0">
                      <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="email" />
                      <label class="form-label" for="email">Your Email</label>
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
                      <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="password" />
                      <label class="form-label" for="password">Password</label>
                      <p class="form-check mt-2">
                        <input type="checkbox" class="form-check-input" onclick="showPass()"> 
                        <label class="form-check-label" for="flexCheckDefault">
                        Show Password
                      </p>
                      @error('password')
                      <div class="invalid-feedback">
                        {{$message}}
                      </div>
                      @enderror
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-floating flex-fill mb-0">
                      <input type="password" id="confirm_password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" placeholder="confirm password" />
                      <label class="form-label" for="confirm_password">Repeat your password</label>
                      @error('confirm_password')
                      <div class="invalid-feedback">
                        {{$message}}
                      </div>
                      @enderror
                    </div>
                  </div>

                  <div class="form-check d-flex justify-content-center mb-3">
                    <p>Click <a href="/login" style="color:blue;">HERE</a> if you already have an account</p>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="button" onclick="location.href='/'" class="btn btn-primary btn-lg me-3">Home</button>
                    <button type="submit" class="btn btn-primary btn-lg">Register</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="assets/img/register.png"
                  class="img-fluid" alt="Register image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
    var password = document.getElementById("password")
    var confirm_password = document.getElementById("confirm_password");

    function validatePassword(){
        if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;

    function showPass() {
        var x = document.getElementById("password");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
    }
</script>
</body>
</html>