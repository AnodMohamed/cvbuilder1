
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{ $info->name }}</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('frontend/assets/img/favicon.png')}}" rel="icon">
  <link href="{{ asset('frontend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}"rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('frontend/assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Kelly
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

   <!-- header -->
   @include('include.header')



  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="{{ asset('frontend/assets/img/hero-bg.jpg')}}" alt="" data-aos="fade-in" style="opacity: 0.5;">

      <div class="container text-center" data-aos="zoom-out" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h2>{{ $info->name }}</h2>
            <p>I'm a web developer</p>
            <a href="#about" class="btn-get-started">About Me</a>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

     <!-- About Section -->
     <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>About</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="row gy-4 justify-content-center">
            <div class="col-lg-4">
              <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 content">
              <h2> Web Developer.</h2>

              <div class="row">
                <div class="col-lg-8">
                    <ul>
                      <li><i class="bi bi-chevron-right"></i> <strong>Education:</strong> </li>
                      <div class="resume-item">
                        <h5>{{ $edu->field }}</h5>
                        <h6>{{ $edu->startDate }} - {{ $edu->EndDate }}</h6>
                        <p><em>{{ $edu->eduName }}</em></p>
                        <p>{{ $edu->desc }}</p>
                      </div><!-- Edn Resume Item -->
                    </ul>
                </div>

                <div class="col-lg-4">
                    <ul>
                      <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{ $info->city }}</span></li>
                      <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{ $info->email }}</span></li>
                      <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{ $info->phone }}</span></li>
                      <li><i class="bi bi-chevron-right"></i> <strong>Language:</strong> <span>{{  $languageName }}</span></li>

                    </ul>
                </div>
              </div>
              <p class="py-3">
                {{ $profile->des }}
              </p>


            </div>
          </div>

        </div>

      </section><!-- /About Section -->


       <!-- /Skills Section -->
       <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Skills</h2>
        </div><!-- End Section Title -->

        <div class="container">
          <div class="row gy-4">
            @foreach ($skills as $skill)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item item-cyan position-relative">
                    <a href="#" class="stretched-link">
                    <h3>{{ $skill }}</h3>
                    </a>
                </div>
                </div><!-- End Service Item -->
            @endforeach
          </div>
        </div>

      </section><!-- /Skills Section -->

      <!-- Skills Section -->
      <section id="program" class="skills section">


        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Technical Skills</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="row skills-content skills-animation">

            @foreach ($proskills as $proskill)
                <div class="col-lg-6">
                <div class="progress">
                    <span class="skill"><span>{{ $proskill->skill }}</span> <i class="val">{{ $proskill->skill_level }}</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar"
                            aria-valuenow="{{ $proskill->skill_level }}"
                            aria-valuemin="0"
                            aria-valuemax="100"
                            style="width: {{ $proskill->skill_level }}%;"></div>
                    </div>
                </div><!-- End Skills Item -->

                </div>
            @endforeach

          </div>

        </div>

      </section><!-- /Skills Section -->

     <!-- Skills Section -->
     <section id="program" class="skills section">


        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Portfolio</h2>

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 isotope-container aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" >
                    @foreach ($portfolios as $portfolio)
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding" style=" left: 879.976px; top: 0px;">
                            <div class="portfolio-info">
                            <h4>{{ $portfolio->title }}</h4>
                            <p>{{ $portfolio->des }}</p>
                            <a href="{{ $portfolio->youtube }}" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link" style="font-size: 40px;"><i class="bi bi-youtube"></i></a>
                            <a href="{{ $portfolio->github }}" title="More Details" class="details-link" style="font-size: 40px;"><i class="bi bi-github"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div><!-- End Section Title -->

      </section><!-- /Skills Section -->


  </main>


   @include('include.footer')
   <!-- end footer -->
   <!-- Javascript files-->

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>


  <!-- Main JS File -->
  <script src="{{ asset('frontend/assets/js/main.js')}}"></script>

</body>

</html>
