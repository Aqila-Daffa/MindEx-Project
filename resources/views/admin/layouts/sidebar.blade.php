<ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="/admin-dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/admin-user-list">
              <i class="bi bi-circle"></i><span>User List</span>
            </a>
          </li>
          <li>
            <a href="/admin-add-psychologist">
              <i class="bi bi-circle"></i><span>Add new psychologist</span>
            </a>
          </li>
          <li>
            <a href="/admin-add-admin">
              <i class="bi bi-circle"></i><span>Add new admin</span>
            </a>
          </li>
        </ul>
      </li><!-- End Users Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/admin-mental-health-list">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Mental Health Result List</span>
        </a>
      </li><!-- End User List Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/admin-appointment-list">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Appointment List</span>
        </a>
      </li><!-- End User List Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/admin-transaction-list">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Transaction List</span>
        </a>
      </li><!-- End User List Nav -->

      

      <li class="nav-heading">Pages</li>

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li> -->
      <!-- End Profile Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li> -->
      <!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/">
          <i class="bi bi-card-list"></i>
          <span>Switch to Client</span>
        </a>
      </li><!-- End Register Page Nav -->

      <form action="/logout" method="post">
        @csrf
        <li class="nav-item">
       <button type="submit" class="nav-link collapsed border border-white">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
       </button>
      </li>
      </form>

    </ul>

    <script
    src="https://code.jquery.com/jquery-3.6.4.js"
    integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
    crossorigin="anonymous"
  ></script>
    <script>
      // $("a").click(function (e) {
      //   //e.preventDefault();
      //   //console.log('btn')
      //   $(this).removeClass("collapsed");
      // });

      const actvPg = window.location.pathname;
      //console.log(actvPg);
      const hLink = document.querySelectorAll('.nav-link');
      const hLinkLength = hLink.length;
      for(let i = 0; i < hLinkLength; i++){
        if(hLink[i].href === actvPg){
          hLink[i].removeClass("collapsed");
        }
      }
    </script>