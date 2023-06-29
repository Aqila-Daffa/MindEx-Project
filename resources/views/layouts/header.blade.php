<div class="container d-flex align-items-center justify-content-between">
      <div class="logo">
        <a href="/"><img src="assets/img/mindex.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li class="dropdown"><a href="#"><span>Contacts</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a target="_blank" href="#">Whatsapp</a></li>
              <li><a target="_blank" href="https://www.instagram.com/dialektika.psikologi/">Instagram</a></li>
              <li><a target="_blank" href="#">Facebook</a></li>
            </ul>
          </li>
          <!-- <li><a href="{{ url('/login') }}" class="nav-link">Sign In</a></li>
          <li><a href="{{ url('/login') }}" class="nav-link">Sign Up</a></li> -->
          @auth
            <!-- User Profile -->   
            <li class="dropdown"><a href="#"><span style="font-style: italic;">Welcome <strong>{{ auth()->user()->username }}</strong></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><button onclick="location.href='/profile'" class="logoutButton dropdown-item">Profile</button></li>

              @can('admin')
              <li><button onclick="location.href='/admin-dashboard'" class="logoutButton dropdown-item">Switch to Admin</button></li>
              @endcan

              @can('psychologist')
              <li><button onclick="location.href='/psychologist-dashboard'" class="logoutButton dropdown-item">Switch to Psychologist</button></li>
              @endcan

              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="logoutButton dropdown-item">
                  Logout
                </button>
              </form>
            </ul>
          </li>

          @else
          <button onclick="location.href='/login'" class="btn btn-info navbar-text ms-2 btn-sm" style="color: #00142d;">
              Sign In
          </button>
          <button onclick="location.href='/register'" class="btn btn-primary navbar-text ms-2 btn-sm" href="/" style="color: white;">
              Sign Up
          </button>
          @endauth
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
</div>