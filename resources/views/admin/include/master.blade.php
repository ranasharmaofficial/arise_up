<!doctype html>
<html lang="en" class="semi-dark">

<head>
  <!-- Required meta tags -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title') | {{ env('APP_NAME') }}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
  <!--plugins-->
  <link href="{{ static_asset('assets/assets_admin/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
  <link href="{{ static_asset('assets/assets_admin/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
  <link href="{{ static_asset('assets/assets_admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
  <link href="{{ static_asset('assets/assets_admin/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="{{ static_asset('assets/assets_admin/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{ static_asset('assets/assets_admin/css/bootstrap-extended.css')}}" rel="stylesheet" />
  <link href="{{ static_asset('assets/assets_admin/css/style.css')}}" rel="stylesheet" />
  <link href="{{ static_asset('assets/assets_admin/css/icons.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- loader-->
	<link href="{{ static_asset('assets/assets_admin/css/pace.min.css')}}" rel="stylesheet" />

  <!--Theme Styles-->
  <link href="{{ static_asset('assets/assets_admin/css/dark-theme.css')}}" rel="stylesheet" />
  <link href="{{ static_asset('assets/assets_admin/css/light-theme.css')}}" rel="stylesheet" />
  <link href="{{ static_asset('assets/assets_admin/css/semi-dark.css')}}" rel="stylesheet" />
  <link href="{{ static_asset('assets/assets_admin/css/header-colors.css')}}" rel="stylesheet" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<!-- Toaster Cdn -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<!-- Tags Cdn -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet" />
    <!-- Sweet Alert Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

</head>

<body>

  <!--start wrapper-->
	<div class="wrapper">
	 
		@include('admin.include.header');

		@include('admin.include.left_sidebar');

		@yield('content')

	 

	<script>
        $(document).ready(function() {
            toastr.options.timeOut = 5000;
            @if (Session::has('alert-danger'))
                toastr.error('{{ Session::get('alert-danger') }}');
            @elseif(Session::has('alert-success'))
                toastr.success('{{ Session::get('alert-success') }}');
            @elseif(Session::has('alert-warning'))
                toastr.success('{{ Session::get('alert-warning') }}');
            @endif
        });
    </script>

	
	
	<!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
       <!--end overlay-->

       <!--start footer-->
       <footer class="footer">
        <div class="footer-text">
           Copyright © {{ date('Y') }}. All right reserved.
        </div>
        </footer>
        <!--end footer-->

       <!--Start Back To Top Button-->
		     <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
       <!--End Back To Top Button-->

       <!--start switcher-->
       <div class="switcher-body">
        <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bi bi-paint-bucket me-0"></i></button>
        <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
          <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
          </div>
          <div class="offcanvas-body">
            <h6 class="mb-0">Theme Variation</h6>
            <hr>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1">
              <label class="form-check-label" for="LightTheme">Light</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
              <label class="form-check-label" for="DarkTheme">Dark</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3">
              <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
            </div>
            <hr>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme" value="option3" checked>
              <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
            </div>
            <hr/>
            <h6 class="mb-0">Header Colors</h6>
            <hr/>
            <div class="header-colors-indigators">
              <div class="row row-cols-auto g-3">
                <div class="col">
                  <div class="indigator headercolor1" id="headercolor1"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor2" id="headercolor2"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor3" id="headercolor3"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor4" id="headercolor4"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor5" id="headercolor5"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor6" id="headercolor6"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor7" id="headercolor7"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor8" id="headercolor8"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </div>
       <!--end switcher-->

  </div>
  <!--end wrapper-->


  <!-- Bootstrap bundle JS -->
  <script src="{{ static_asset('assets/assets_admin/js/bootstrap.bundle.min.js')}}"></script>
  <!--plugins-->
  <script src="{{ static_asset('assets/assets_admin/js/jquery.min.js')}}"></script>
  <script src="{{ static_asset('assets/assets_admin/plugins/simplebar/js/simplebar.min.js')}}"></script>
  <script src="{{ static_asset('assets/assets_admin/plugins/metismenu/js/metisMenu.min.js')}}"></script>
  <script src="{{ static_asset('assets/assets_admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
  <script src="{{ static_asset('assets/assets_admin/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
  <script src="{{ static_asset('assets/assets_admin/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
  <script src="{{ static_asset('assets/assets_admin/js/pace.min.js')}}"></script>
  <script src="{{ static_asset('assets/assets_admin/plugins/chartjs/js/Chart.min.js')}}"></script>
  <script src="{{ static_asset('assets/assets_admin/plugins/chartjs/js/Chart.extension.js')}}"></script>
  <script src="{{ static_asset('assets/assets_admin/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
  <!--app-->
  <script src="{{ static_asset('assets/assets_admin/js/app.js')}}"></script>
  <script src="{{ static_asset('assets/assets_admin/js/index4.js')}}"></script>
  <script>
    new PerfectScrollbar(".best-product")
 </script>


</body>

</html>
