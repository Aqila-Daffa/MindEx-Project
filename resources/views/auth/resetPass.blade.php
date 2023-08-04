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
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card shadow text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
              <div class="d-flex justify-content-center">
              <img src="assets/img/logo.png" alt="" class="img-fluid" width="100px" height="100px">
              </div>
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Reset Password</p>

                <form method="post" action="/resetPassword">
                  @csrf

                  @foreach($user as $users)
                  <input type="hidden" name="id" value="{{ $users->id }}">
                  @endforeach
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-floating flex-fill mb-0">
                      <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control" placeholder="password" required/>
                      <label class="form-label" for="password">New Password</label>
                      <p class="form-check mt-2">
                        <input type="checkbox" class="form-check-input" onclick="showPass()"> 
                        <label class="form-check-label" for="flexCheckDefault">
                        Show Password
                      </p>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-floating flex-fill mb-0">
                      <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="confirm password" required/>
                      <label class="form-label" for="confirm_password">Confirm password</label>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="button" onclick="location.href='/login'" class="btn btn-primary btn-lg me-3">Back to Login</button>
                    <button type="submit" class="btn btn-primary btn-lg">Reset Password</button>
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