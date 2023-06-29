<div class="container d-flex align-items-center justify-content-between">
      <div class="logo">
        <a href="/psychologist-dashboard"><img src="assets/img/mindex.png" alt="" class="img-fluid"></a>
      </div>

      <h6 style="color: white">Psychologist Page</h6>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#faq">QnA</a></li>
          <li><a class="nav-link" href="/psychologist-schedule">Consultation Schedule</a></li>
          <!-- <li><a href="{{ url('/login') }}" class="nav-link">Sign In</a></li>
          <li><a href="{{ url('/login') }}" class="nav-link">Sign Up</a></li> -->
          @auth
            <!-- User Profile -->   
            <li class="dropdown"><a href="#"><span style="font-style: italic;">Welcome <strong>Psyc. {{ auth()->user()->username }}</strong></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><button onclick="location.href='/psychologist-profile'" class="logoutButton dropdown-item">Profile</button></li>

              <li><button onclick="location.href='/'" class="logoutButton dropdown-item">Switch to Client</button></li>

              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="logoutButton dropdown-item">
                  Logout
                </button>
              </form>
            </ul>
          </li>

          @endauth
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
</div>