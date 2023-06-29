<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('admin.layouts.link')
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
   @include('admin.layouts.header')
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
  @include('admin.layouts.sidebar')
  </aside><!-- End Sidebar-->

  <main id="main" class="main">
  @yield('content')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>MindEx</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets1/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets1/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets1/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('assets1/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('assets1/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('assets1/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('assets1/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('assets1/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets1/js/main.js') }}"></script>

</body>

</html>