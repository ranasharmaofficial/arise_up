<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
  <!-- Bootstrap CSS -->
  <link href="{{ asset('public/assets/assets_admin/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('public/assets/assets_admin/css/bootstrap-extended.css')}}" rel="stylesheet" />
  <link href="{{ asset('public/assets/assets_admin/css/style.css')}}" rel="stylesheet" />
  <link href="{{ asset('public/assets/assets_admin/css/icons.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- loader-->
	<link href="{{ asset('public/assets/assets_admin/css/pace.min.css')}}" rel="stylesheet" />

  <title>Login | {{ env('APP_NAME') }}</title>
</head>

<body>

  <!--start wrapper-->
  <div class="wrapper">
    
       <!--start content-->
       <main class="authentication-content">
        <div class="container-fluid">
          <div class="authentication-card">
            <div class="card shadow rounded-0 overflow-hidden">
              <div class="row g-0">
                <div class="col-lg-6 bg-login d-flex align-items-center justify-content-center">
                  <img src="{{ asset('public/assets/assets_admin/images/error/login-img.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6">
                  <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title">Sign In</h5>
                    <p class="card-text">See your growth!</p>
                    <form method="post" action="{{ route('adminAuthLogin') }}" class="form-body">
						@csrf
                      <div class="login-separater text-center mb-4"> <span>SIGN IN WITH YOUR CREDENTIALS</span>
                        <hr>
                      </div>
					  <div class="flash-message">
							@foreach (['danger', 'warning', 'success', 'info'] as $msg)
								@if (Session::has('alert-' . $msg))
									<div class="alert alert-{{ $msg }} alert-dismissible fade show" role="alert">
										{{ Session::get('alert-' . $msg) }}
										<button type="button" class="btn btn-info btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
									</div>
								@endif
							@endforeach
						</div>
                        <div class="row g-3">
                          <div class="col-12">
                            <label for="inputEmailAddress" class="form-label">Email Username</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                              <input type="text" name="username" class="form-control radius-30 ps-5" id="inputEmailAddress" placeholder="Email Username">
							  <small class="form-text text-danger">@error('username') {{ $message }} @enderror</small>
                            </div>
                          </div>
                          <div class="col-12">
                            <label for="inputChoosePassword" class="form-label">Enter Password</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                              <input type="password" name="password" class="form-control radius-30 ps-5" id="inputChoosePassword" placeholder="Enter Password">
							  <small class="form-text text-danger">@error('password') {{ $message }} @enderror</small>
                            </div>
                          </div>
						 
								
								
                          <div class="col-6">
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
                              <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                            </div>
                          </div>
                          <div class="col-6 text-end">	<a href="javascript:void(0)">Forgot Password ?</a>
                          </div>
                          <div class="col-12">
                            <div class="d-grid">
                              <button type="submit" class="btn btn-primary radius-30">Sign In</button>
                            </div>
                          </div>
                          <div class="col-12 d-none">
                            <p class="mb-0">Don't have an account yet? <a href="authentication-signup.html">Sign up here</a></p>
                          </div>
                        </div>
                    </form>
                 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </main>
        
       <!--end page main-->

  </div>
  <!--end wrapper-->


  <!--plugins-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/pace.min.js"></script>


</body>

</html>


@if(false)
	<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>{{ env('APP_NAME') }}</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/assets_admin/img/favicon.png')}}">
	<link rel="stylesheet" href="{{ asset('public/assets/assets_admin/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('public/assets/assets_admin/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/assets/assets_admin/asset/splugins/fontawesome/css/all.min.css')}}">
	<link rel="stylesheet" href="{{ asset('public/assets/assets_admin/assets/css/feathericon.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/assets_admin/assets/plugins/morris/morris.css')}}">
	<link rel="stylesheet" href="{{ asset('public/assets/assets_admin/assets/css/style.css')}}">
 </head>


<body>
	<div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">
            <div class="col-md-12 text-center mt-2">
                <!-- <h3 class="text-primary">Blog CMS</h3> -->
            <img class="img-fluid" src="{{ asset('public/assets/logo.png')}}" alt="Logo" style="height:50px;">
            </div>
				<div class="loginbox">
					<div class="login-right">
						<div class="login-right-wrap">
							<h1>Login</h1>
                            <div class="flash-message">
                                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                    @if (Session::has('alert-' . $msg))
                                        <div class="alert alert-{{ $msg }} alert-dismissible fade show" role="alert">
                                            {{ Session::get('alert-' . $msg) }}
                                            <button type="button" class="btn btn-info btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <p class="account-subtitle">Access to our dashboard</p>
                            <form method="post" action="{{ route('adminAuthLogin') }}" enctype="multipart/form-data">
                                    @csrf
                                <div class="form-group">
                                    <input class="form-control" name="username" type="text" placeholder="Email" id="text1"> </div>
                                    <small class="form-text text-danger">@error('username') {{ $message }} @enderror</small>
                                <div class="form-group">
                                    <input class="form-control" name="password" type="password" placeholder="Password" id="text2"> </div>
                                    <small class="form-text text-danger">@error('password') {{ $message }} @enderror</small>
                                <div class="form-group">
                                    <button class="btn btn-info btn-block" type="submit">Login</button>
                                </div>
                            </form>
                            @if(false)
                            <div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a> </div>
                            <div class="login-or"> <span class="or-line"></span> <span class="span-or">or</span> </div>
                            {{-- <div class="social-login"> <span>Login with</span> <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a> </div> --}}
                            <div class="text-center dont-have">Don’t have an account? <a href="register.html">Register</a></div>
                            @endif
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>
	<script src="{{ asset('public/assets/assets_admin/assets/js/jquery-3.5.1.min.js')}}"></script>
	<script src="{{ asset('public/assets/assets_admin/assets/js/popper.min.js')}}"></script>
	<script src="{{ asset('public/assets/assets_admin/assets/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('public/assets/assets_admin/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{ asset('public/assets/assets_admin/assets/js/script.js')}}"></script>

</body>

</html>

@endif