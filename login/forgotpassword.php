<?php 
include('config.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="images/favicon.png" rel="icon" />
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<title>Oxyy - Login and Register Form Html Template</title>
<meta name="description" content="Login and Register Form Html Template">
<meta name="author" content="harnishdesign.net">

<!-- Web Fonts
========================= -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

<!-- Stylesheet
========================= -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/all.min.css" />
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
<!-- Colors Css -->
<link id="color-switcher" type="text/css" rel="stylesheet" href="#" />
</head>
<body>

<!-- Preloader -->
<div class="preloader preloader-dark">
  <div class="lds-ellipsis">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>
<!-- Preloader End -->

<div id="main-wrapper" class="oxyy-login-register bg-dark">
  <div class="container">
    <div class="row g-0 min-vh-100 py-4 py-md-5"> 
      <!-- Welcome Text
      ========================= -->
      <div class="col-lg-7 shadow-lg">
        <div class="hero-wrap d-flex align-items-center rounded-3 rounded-end-0 h-100">
          <div class="hero-mask opacity-9 bg-primary"></div>
          <div class="hero-bg hero-bg-scroll" style="background-image:url('./images/login-bg.jpg');"></div>
          <div class="hero-content mx-auto w-100 h-100 d-flex flex-column">
            <div class="row g-0">
              <div class="col-11 col-lg-10 mx-auto">
                <div class="logo mt-5 mb-5 mb-lg-0"> <a href="index.html" title="Oxyy"><img src="images/logo-light.png" alt="Oxyy"></a> </div>
              </div>
            </div>
            <div class="row g-0 my-auto">
              <div class="col-11 col-lg-10 mx-auto">
                <h1 class="text-11 text-white mb-3">Don't worry,</h1>
                <p class="text-5 text-white lh-base mb-4">We are here help you to recover your password.</p>
                <a class="btn btn-dark rounded-pill shadow-none video-btn py-1 px-3 d-inline-flex align-items-center mb-5" href="#" data-src="#" data-bs-toggle="modal" data-bs-target="#videoModal"><span class="me-2 text-7"><i class='bx bx-play-circle' ></i></span>Watch demo</a> </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Welcome Text End --> 
      
      <!-- Forgot password Form
      ========================= -->
      <div class="col-lg-5 shadow-lg d-flex align-items-center rounded-3 rounded-start-0 bg-dark">
        <div class="container my-auto py-5">
          <div class="row">
            <div class="col-11 col-lg-10 mx-auto">
              <h3 class="text-white text-center mb-4">Forgot password?</h3>
              <p class="text-white-50 text-center mb-4">Enter the email address or mobile number you used when you joined and we will send you temporary password.</p>
              <form id="forgotForm" class="form-dark" method="post">
                <div class="mb-3">
                  <label class="form-label text-light" for="emailAddress">Email or Mobile Number</label>
                  <input type="text" class="form-control" id="emailAddress" required placeholder="Enter Email or Mobile Number">
                </div>
                <div class="d-grid my-4">
					<button class="btn btn-primary" type="submit">Continue</button>
				</div>
              </form>
              <div class="d-flex align-items-center my-3">
                <hr class="flex-grow-1 border-secondary">
                <span class="mx-2 text-2 text-white-50">Or with Social Profile</span>
                <hr class="flex-grow-1 border-secondary">
              </div>
              <div class="d-flex flex-column align-items-center mb-4">
                <ul class="social-icons social-icons-circle">
                  <li class="social-icons-facebook"><a href="#" data-bs-toggle="tooltip" data-bs-original-title="Log In with Facebook"><i class='bx bxl-facebook'></i></a></li>
                  <li class="social-icons-twitter"><a href="#" data-bs-toggle="tooltip" data-bs-original-title="Log In with Twitter"><i class='bx bxl-twitter' ></i></a></li>
                  <li class="social-icons-google"><a href="#" data-bs-toggle="tooltip" data-bs-original-title="Log In with Google"><i class='bx bxl-google' ></i></a></li>
                  <li class="social-icons-linkedin"><a href="#" data-bs-toggle="tooltip" data-bs-original-title="Log In with Linkedin"><i class='bx bxl-linkedin' ></i></a></li>
                </ul>
              </div>
              <p class="text-2 text-center text-light mb-0">Return to <a href="login.php">Sign In</a></p>
            </div>
          </div>
        </div>
      </div>
      <!-- Forgot password Form End --> 
    </div>
  </div>
</div>

<!-- Video Modal
========================= -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content bg-transparent border-0">
      <button type="button" class="btn-close btn-close-white ms-auto me-n3" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body p-0">
        <div class="ratio ratio-16x9">
          <iframe id="video" allow="autoplay" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Video Modal end --> 

<!-- Styles Switcher -->
<div id="styles-switcher" class="left">
  <h5>Color Switcher</h5>
  <hr>
  <ul class="mb-0">
    <li class="blue" data-bs-toggle="tooltip" title="Blue" data-path="#"></li>
    <li class="indigo" data-bs-toggle="tooltip" title="Indigo" data-path="css/color-indigo.css"></li>
    <li class="purple" data-bs-toggle="tooltip" title="Purple" data-path="css/color-purple.css"></li>
    <li class="pink" data-bs-toggle="tooltip" title="Pink" data-path="css/color-pink.css"></li>
    <li class="red" data-bs-toggle="tooltip" title="Red" data-path="css/color-red.css"></li>
    <li class="orange" data-bs-toggle="tooltip" title="Orange" data-path="css/color-orange.css"></li>
    <li class="yellow" data-bs-toggle="tooltip" title="Yellow" data-path="css/color-yellow.css"></li>
    <li class="teal" data-bs-toggle="tooltip" title="Teal" data-path="css/color-teal.css"></li>
    <li class="green" data-bs-toggle="tooltip" title="Green" data-path="css/color-green.css"></li>
    <li class="cyan" data-bs-toggle="tooltip" title="Cyan" data-path="css/color-cyan.css"></li>
    <li class="brown" data-bs-toggle="tooltip" title="Brown" data-path="css/color-brown.css"></li>
  </ul>
  <button class="btn switcher-toggle"><i class="fas fa-cog"></i></button>
</div>
<!-- Styles Switcher End --> 

<!-- Script --> 
<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<!-- Style Switcher --> 
<script src="js/switcher.min.js"></script> 
<script src="js/theme.js"></script>
</body>
</html>