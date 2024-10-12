<?php require_once 'core/init.php';
require_once 'core/init2.php';

if (count($_POST)>0){

	// Process form request
  if (isset($_POST['login'])) {
      $user->username = trim($_POST['username']);
      $user->password = trim($_POST['password']);

    // Ensure no field is empty
    if (!empty($user->username) && !empty($user->password)) {
      // Hash password
      $user->password = md5($user->password);
      if ($user->login($user->username, $user->password)) {
		  $_SESSION['loggedin_time'] = time();
        ($_SESSION['us3rgr0up'] == 118) ? redirectTo('welcome.php') : redirectTo('dash.php');
      }
      else {
        $errors[] = "Authentication failed. Wrong credentials";
		  header ("Location:$ref?q=Wrong Username or Password.");
      }
    }
    else {
      $errors[] = "All fields are required.";
    }
  }
}
?>


<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>NIS E-NOMINAL ROLL</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5 user-scalable=no" />
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta content="Nigeria Immigration Service - HRM Directorate Electronic Nominal Roll System" name="description">
		<meta content="MICHAEL OKE" name="author">
		<link href="assets/img/brand/favicon.ico" rel="icon" type="image/icon">

		<link rel="dns-prefetch" href="https://fonts.googleapis.com/">
		<link rel="dns-prefetch" href="https://fonts.gstatic.com/">
		<link rel="preconnect" href="https://fonts.googleapis.com/">
		<link rel="preconnect" href="https://fonts.gstatic.com/">
		<!-- preloading icon font is helping to speed up a little bit -->
		<link rel="preload" href="assets/fonts/flaticon/Flaticon.woff2" as="font" type="font/woff2" crossorigin>

		<link rel="stylesheet" href="assets/css/core.min.css">
		<link rel="stylesheet" href="assets/css/vendor_bundle.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet">

		<link rel="apple-touch-icon" href="assets/brand/img/logo_3.jpg">

		<?php if(@$_GET['q']) {
    echo'<script>alert("'.@$_GET['q'].'");</script>';
	}	
?>
<script>
	function validateForm() {
		var y = document.forms["form"]["username"].value;
		var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}
		var x = document.forms["form"]["email"].value;
		var atpos = x.indexOf("@");
		var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}
		var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}

		var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>
</head>

<body>

	<div id="wrapper">


		<!-- Header -->
		<header id="header" class="shadow-xs">


			<!-- Navbar -->
			<div class="container position-relative">

				<nav class="navbar navbar-expand-lg navbar-light justify-content-lg-between justify-content-md-inherit">

					<div class="align-items-start">

						<!-- mobile menu button : show -->
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMainNav" aria-controls="navbarMainNav" aria-expanded="false" aria-label="Toggle navigation">
							<svg width="25" viewBox="0 0 20 20">
								<path d="M 19.9876 1.998 L -0.0108 1.998 L -0.0108 -0.0019 L 19.9876 -0.0019 L 19.9876 1.998 Z"></path>
								<path d="M 19.9876 7.9979 L -0.0108 7.9979 L -0.0108 5.9979 L 19.9876 5.9979 L 19.9876 7.9979 Z"></path>
								<path d="M 19.9876 13.9977 L -0.0108 13.9977 L -0.0108 11.9978 L 19.9876 11.9978 L 19.9876 13.9977 Z"></path>
								<path d="M 19.9876 19.9976 L -0.0108 19.9976 L -0.0108 17.9976 L 19.9876 17.9976 L 19.9876 19.9976 Z"></path>
							</svg>
						</button>

						<!-- navbar : brand (logo) -->
						<a class="navbar-brand" href="#">
							<img src="assets/img/nis-logo.jpg" width="110" height="38" alt="...">
						</a>

					</div>




					<!-- Menu -->
					<div class="collapse navbar-collapse navbar-animate-fadein" id="navbarMainNav">


						<!-- navbar : mobile menu -->
						<div class="navbar-xs d-none">

							<!-- mobile menu button : close -->
							<button class="navbar-toggler pt-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMainNav" aria-controls="navbarMainNav" aria-expanded="false" aria-label="Toggle navigation">
								<svg width="20" viewBox="0 0 20 20">
									<path d="M 20.7895 0.977 L 19.3752 -0.4364 L 10.081 8.8522 L 0.7869 -0.4364 L -0.6274 0.977 L 8.6668 10.2656 L -0.6274 19.5542 L 0.7869 20.9676 L 10.081 11.679 L 19.3752 20.9676 L 20.7895 19.5542 L 11.4953 10.2656 L 20.7895 0.977 Z"></path>
								</svg>
							</button>

							<!-- 
									Mobile Menu Logo 
									Logo : height: 70px max
								-->
							<a class="navbar-brand" href="#">
								<img src="assets/img/nis-logo.jpg" width="110" height="38" alt="...">
							</a>

						</div>
					</div>





					<!-- OPTIONS -->
					<ul class="list-inline list-unstyled mb-0 d-flex align-items-end">

						<li class="list-inline-item mx-1 dropdown">




							<a href="#" aria-label="Admin Sign In" class="js-ajax-modal btn btn-sm btn-secondary btn-pill"
								data-href="_ajax/modal_signin.html"
								data-ajax-modal-size="modal-md"
								data-ajax-modal-centered="true"
								data-ajax-modal-backdrop="static">
								<span class="group-icon">
									<i class="fi fi-user-male"></i>
									<i class="fi fi-close"></i>
								</span>
								<span>Admin</span>
							</a>

						</li>

					</ul>
					<!-- /OPTIONS -->



				</nav>

			</div>
			<!-- /Navbar -->

		</header>
		<!-- /Header -->





		<!-- COVER + SEARCH -->
		<div class="section bg-theme-color-light overlay-dark overlay-opacity-8 bg-cover lazy"
			data-background-image="assets/images/nis-cover-2.jpg">

			<div class="container">

				<div class="row text-center-md text-center-xs d-middle justify-content-start">

					<div class="col-12 col-lg-6 mb-5 text-white" data-aos="fade-in" data-aos-delay="0" data-aos-offset="0">

						<!-- main title -->
						<h1 class="display-4 fw-bold mb-0">
							<span class="d-inline-block">

								<!-- <span class="h6 fw-normal d-block text-align-end text-center-xs">
										Over 28.988 Properties
									</span> -->

								<span class="text-success">NIS</span> E-HRM
							</span>
						</h1>

						<!-- slogan -->
						<p class="h3 fw-normal mb-0">
							Electronic Record Management System
						</p>

					</div>

					<div class="col-12 col-lg-6 text-align-end text-center-md text-center-xs" data-aos="fade-in" data-aos-delay="50" data-aos-offset="0">

						<div class="d-inline-block bg-white shadow-primary-xs rounded p-4 p-md-5 w-100 max-w-450 text-align-start">
							<div class="modal-header">
							<h3>Sign in with Credentials</h3>
                        		<?php error($errors); ?>
        					</div>
								<div class="modal-body">
									<form action="index.php" method="post" id="form" onsubmit="return validateForm()">

										<div class="form-group">
											<label class="form-label">UserName</label>
												<input type="email" name="username" placeholder="Domain Email" class="form-control" required />
											</div>
										&nbsp;
										<div class="form-group">
											<label class="form-label">Password</label>
											
												<input type="password" name="password" placeholder="" class="form-control" required />
										</div>
										&nbsp; &nbsp;
										<div class="form-group">
											<button type="submit" class="btn w-100 btn-lg btn-success bg-gradient-success">
												<i class="fa fa-lock"></i> Login
											</button>
											<input type="hidden" name="login" value="login">
										</div>
									</form>
								</div>

						</div>

					</div>

				</div>

			</div>

		</div>
		<!-- /COVER + SEARCH -->


		<footer id="footer" class="bg-gray-900 text-white">
			<div class="row">
				<div class="fs-6 py-2 float-start float-none-xs m-0-xs">
							&copy;2024 NIGERIA IMMIGRATION SERVICE
					</div>
				</div>
		</footer>


	</div><!-- /#wrapper -->


	<script src="assets/js/core.min.js"></script>


</body>

</html>