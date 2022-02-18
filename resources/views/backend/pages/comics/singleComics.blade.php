<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DevFolio Bootstrap Portfolio Template - Blog Single</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('/theme/assets/')}}/img/favicon.png" rel="icon">
  <link href="{{asset('/theme/assets/')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/theme/assets/')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('/theme/assets/')}}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{asset('/theme/assets/')}}/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="{{asset('/theme/assets/')}}/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="{{asset('/theme/assets/')}}/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('/theme/assets/')}}/css/style.css" rel="stylesheet">

 
</head>

<body id="page-top">

  <!-- ======= Header/ Navbar ======= -->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">Comics</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#service">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#work">Work</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="intro intro-single route bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="intro-title mb-4">Comics Details</h2>
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
              <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="#">Library</a>
            </li>
            <li class="breadcrumb-item active">Data</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <main id="main">

    <!-- ======= Blog Single Section ======= -->
    <section class="blog-wrapper sect-pt4" id="blog">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="post-box">
              <div class="post-thumb">

              @php
                  foreach (json_decode($comics->image) as $key=>$pic){
                      $image[] = $pic;
                  }
                    
              @endphp
               
                    <img src="{{asset('image/comics_image/'.$image[0])}}" class="img-fluid" alt="" hight="300px" width="650px">
                     
               
              </div>
              <div class="post-meta">
                <h1 class="article-title"></h1>
                <ul>
                  <li>
                    <span class="ion-ios-person"></span>
                    <a href="#">{{ $comics->comics_title}}</a>
                  </li>
                  <li>
                    <span class="ion-pricetag"></span>
                    <a href="#">{{ $comics->comics_category->comics_category }}</a>
                  </li>
                  <li>
                    <span class="ion-chatbox"></span>
                    <a href="#">14</a>
                  </li>
                </ul>
              </div>
              <div class="article-content">
                {!! $comics->comics_description !!}
              </div>
            </div>
            
          </div>
          <div class="col-md-4">
            <div class="widget-sidebar sidebar-search">
              
              <div class="sidebar-content">
                 <img src="{{ asset('image/comics_image/'.$image[1] ) }}" hight="250px" width="250px"/>
              </div>
            </div>
            <div class="widget-sidebar">
              <h5 class="sidebar-title">Recent Post</h5>
              <div class="sidebar-content">
                <ul class="list-sidebar">
                @foreach ($recentPost as $key=>$item)
                    @if ($item->id != $comics->id)
                        <li>
                          <a href="{{ route('comics-details',$item->id) }}">{{ $item->comics_title }}</a>
                        </li>
                    @endif  
                 @endforeach
                 
                  {{-- <li>
                    <a href="#">Lorem ipsum dolor sit amet consectetur</a>
                  </li>
                  <li>
                    <a href="#">Nam quo autem exercitationem.</a>
                  </li>
                  <li>
                    <a href="#">Atque placeat maiores nam quo autem</a>
                  </li>
                  <li>
                    <a href="#">Nam quo autem exercitationem.</a>
                  </li> --}}
                </ul>
              </div>
            </div>
            <div class="widget-sidebar">
              
              <div class="sidebar-content">
                <img src="{{ asset('image/comics_image/'.$image[2]??'') }}" hight="250px" width="250px"/>
              </div>
            </div>
            <div class="widget-sidebar widget-tags">
              
              <div class="sidebar-content">
                  <img src="{{ asset('image/comics_image/'.$image[3]??'') }}" hight="250px" width="250px"/>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('/theme/assets/')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('/theme/assets/')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('/theme/assets/')}}/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="{{asset('/theme/assets/')}}/vendor/php-email-form/validate.js"></script>
  <script src="{{asset('/theme/assets/')}}/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="{{asset('/theme/assets/')}}/vendor/counterup/jquery.counterup.min.js"></script>
  <script src="{{asset('/theme/assets/')}}/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="{{asset('/theme/assets/')}}/vendor/typed.js/typed.min.js"></script>
  <script src="{{asset('/theme/assets/')}}/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('/theme/assets/')}}/js/main.js"></script>

</body>

</html>