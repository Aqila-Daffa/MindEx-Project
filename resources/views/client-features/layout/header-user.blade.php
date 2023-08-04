<div class="container d-flex align-items-center justify-content-between">
      <div class="logo">
        <a href="/"><img src="assets/img/mindex.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" class="nav-link" href="#hero">Home</a></li>
          <li class="dropdown"><a href="#"><span>Contacts</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Whatsapp</a></li>
              <li><a target="_blank" href="https://www.instagram.com/dialektika.psikologi/">Instagram</a></li>
              <li><a href="#">Facebook</a></li>
            </ul>
          </li>
    
            <!-- User Profile -->   
            <li class="dropdown"><a href="#"><span style="font-style: italic;">Welcome <strong>{{ auth()->user()->username }}</strong></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><button onclick="location.href='/profile'" class="logoutButton dropdown-item">Profile</button></li>
            </ul>
          </li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
</div>