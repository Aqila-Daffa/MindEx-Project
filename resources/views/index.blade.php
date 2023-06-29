@extends('layouts.main')
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero">
<div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Take care of your <span>Mental Health</span></h1>
            <h2>MindEx consists of professional psychologist team who will help you with your mental health issues</h2>
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto">Get Started</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(58, 59, 110, 0.9)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(58, 59, 110, 1.0)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
</svg>
</section>
<!-- End Hero -->

<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <a href="" class=""></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>MindEx Features</h3>
            <p>MindEx web applications can provide support and guidance to individuals experiencing anxiety, depression, or other mental health concerns. With the help of MindEx, you can connect with mental health professionals and receive therapy and counseling services remotely.</p>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><a href="/mental-health"><i class="bi bi-clipboard2-pulse"></i></div>
              <h4 class="title">Mental Health Test</a></h4>
              <p class="description">This MindEx will help you to track your mental health interpretation by filling the questions</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><a href="/consultation"><i class="bi bi-file-medical"></i></div>
              <h4 class="title">Book Online Consultation</a></h4>
              <p class="description">You can book an online consultation session with the help of mental health professionals</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bi bi-robot"></i></div>
              <h4 class="title"><a href="/MindExBot-page">Ask Mindexbot</a></h4>
              <p class="description">If you confuse with our features, you can ask this Mindexbot for the explanation</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row" data-aos="fade-up">

          <div class="col-lg-4 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ $patient }}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Patients</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-journal-medical"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ $appointment }}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Times Of Consultations</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-person-fill-check"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ $psychologist }}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Registered Psychologists</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <p>Frequently Asked Questions</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">What is the purpose of MindEx? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  MindEx System is a web application which is developed to assist “Dialektika Psikologi” organization for conducting online consultation to provide a help for some people who have mental health issue.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">What are the main features of MindEx? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  There are 2 main features which are Mental Health test and Make appointment for online consultation, and for the tutorial you can ask to MindExBot.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">How many questions for mental health test? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  There are 42 questions of mental health test and it is based on DASS (Depression Anxiety Stress Scales) standart.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">How many times the consultation will be held every day? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  There are 4 sections of online consultation every day which are section 1 will be held from 08.00 AM - 09.30 AM, section 2 from 10.00 AM - 11.30 AM, section 3 from 13.30 PM - 15.00 PM, and section 4 from 15.30 PM - 17.00 PM.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">How to book a consultation if the system down? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  If the system goes down, then you can book manually through our social media.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End F.A.Q Section -->
    
</main>
<!-- End #main -->

@endsection
