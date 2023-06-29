<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mindexbot Page</title>
    @include('layouts.link')

    <!-- <link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css"> -->

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header">
        @include('patient-features.layout.header-user')
    </header>
    <!-- End Header -->

    <section>
    <div class="section-title text-center p-5" data-aos="fade-up">
          <p>MindExBot</p>
    </div>

    <div class="d-flex justify-content-center">
        <img src="assets/img/mindexbot.png" class="w-50" />
    </div> 
    </section> 
</body>


<script>
    var botmanWidget = {
        aboutText: 'Write Something',
        introMessage: "Hi "+"{{ auth()->user()->username }},"+" I'm MindExBot, you can type 'list' if you want to see the tutorial list!"
    };
</script>

<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    @include('sweetalert::alert')
  
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</html>