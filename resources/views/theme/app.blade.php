
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DevFolio Bootstrap Portfolio Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('theme/assets')}}/img/favicon.png" rel="icon">
  <link href="{{asset('theme/assets')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="{{asset('theme/assets')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('theme/assets')}}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{asset('theme/assets')}}/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="{{asset('theme/assets')}}/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="{{asset('theme/assets')}}/vendor/venobox/venobox.css" rel="stylesheet">

  <!--  Main CSS File -->
  <link href="{{asset('theme/assets')}}/css/style.css" rel="stylesheet">

  @stack('css')
  @toastr_css
  
  
</head>

<body id="page-top">

  <!-- ======= Header/Navbar ======= -->
  @include('theme.partial.navbar')

  <!-- ======= Intro Section/slider ======= -->
  @include('theme.partial.slider')
  <!-- End Intro Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    @include('theme.page.about')
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    @include('theme.page.service')
    <!-- End Services Section -->

    <!-- ======= Counter Section ======= -->
    @include('theme.partial.counter')
    <!-- End Counter Section -->

    <!-- ======= Portfolio Section ======= -->
    @include('theme.page.protfolio')
    <!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    @include('theme.partial.testimonial')
    <!-- End Testimonials Section -->

    <!-- ======= Blog Section ======= -->
    @include('theme.page.blog')
    <!-- End Blog Section -->

    <!-- ======= Contact Section ======= -->
    @include('theme.page.contact')
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('theme.partial.footer')
  <!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('theme/assets')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('theme/assets')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('theme/assets')}}/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="{{asset('theme/assets')}}/vendor/php-email-form/validate.js"></script>
  <script src="{{asset('theme/assets')}}/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="{{asset('theme/assets')}}/vendor/counterup/jquery.counterup.min.js"></script>
  <script src="{{asset('theme/assets')}}/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="{{asset('theme/assets')}}/vendor/typed.js/typed.min.js"></script>
  <script src="{{asset('theme/assets')}}/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('theme/assets')}}/js/main.js"></script>
  @jquery
  @toastr_js
  @toastr_render
</body>

</html>