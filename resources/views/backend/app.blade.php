<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf_token" content="{{csrf_token()}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admins/assets/')}}/images/favicon.png">
    <title>Admin Press Admin Template - The Ultimate Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('admins/assets/')}}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="{{asset('admins/assets/')}}/plugins/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('admins/assets/css/')}}/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{asset('admins/assets/css/')}}/colors/blue.css" id="theme" rel="stylesheet">
    <link href="{{asset('admins/assets/plugins')}}/footable/css/footable.core.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
@stack('css')
@toastr_css
</head>

<body class="fix-header fix-sidebar card-no-border">
@jquery
@toastr_js
@toastr_render
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        @include('backend.include.header')
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('backend.include.sidebar')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            @include('backend.include.breadcrumb')
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
           <div class="row">
               <div class="col-12">
                   @yield('content')
               </div>
           </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            @include('backend.include.footer')
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('admins/assets/')}}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('admins/assets/')}}/plugins/bootstrap/js/popper.min.js"></script>
    <script src="{{asset('admins/assets/')}}/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('admins/assets/js/')}}/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="{{asset('admins/assets/js/')}}/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{asset('admins/assets/js/')}}/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="{{asset('admins/assets/')}}/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('admins/assets/js/')}}/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--sparkline JavaScript -->
    <script src="{{asset('admins/assets/')}}/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--morris JavaScript -->
    <script src="{{asset('admins/assets/')}}/plugins/raphael/raphael-min.js"></script>
    <script src="{{asset('admins/assets/')}}/plugins/morrisjs/morris.min.js"></script>
    <!-- Chart JS -->
    <script src="{{asset('admins/assets/js/')}}/dashboard1.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{asset('admins/assets/')}}/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="https://kit.fontawesome.com/6bc72a1579.js" crossorigin="anonymous"></script>
    <!-- ckeditor -->
    <script src="{{ asset('admins/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('admins/ckeditor/samples/js/sample.js') }}"></script>
    <script src="{{asset('admins/assets/plugins/footable/js/footable.all.min.js')}}"></script>
    <script>
	initSample();
    </script>
    <!-- ckeditor -->
    @stack('js')
</body>

</html>