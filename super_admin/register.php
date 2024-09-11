<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Zanex - Bootstrap 5 Premium Admin & Dashboard Template </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="keywords" content="bootstrap template, template dashboard bootstrap, admin template, html admin panel template, bootstrap admin template, html and css templates, bootstrap, bootstrap html template, html admin dashboard template, bootstrap dashboard, admin panel html template">
    
    <!-- Favicon -->
    <link rel="icon" href="assets/images/brand-logos/favicon.ico" type="image/x-icon">
    
    <!-- Choices JS -->
    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- Main Theme Js -->
    <script src="assets/js/main.js"></script>
    
    <!-- Bootstrap Css -->
    <link id="style" href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Style Css -->
    <link href="assets/css/styles.min.css" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="assets/css/icons.css" rel="stylesheet" >

    <!-- Node Waves Css -->
    <link href="assets/libs/node-waves/waves.min.css" rel="stylesheet" > 

    <!-- Simplebar Css -->
    <link href="assets/libs/simplebar/simplebar.min.css" rel="stylesheet" >
    
    <!-- Color Picker Css -->
    <link rel="stylesheet" href="assets/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="assets/libs/@simonwep/pickr/themes/nano.min.css">

    <!-- Choices Css -->
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">


</head>

<body  class="login-img">

    <!-- Loader -->
    <div id="loader" >
        <img src="assets/images/media/loader.svg" alt="">
    </div>
    <!-- Loader -->

    <div class="page">

     	<!-- PAGE -->
			<div class="page login-page">
				<div>
				    <!-- CONTAINER OPEN -->
					<div class="col col-login mx-auto mt-7">
						<div class="text-center">
							<img src="assets/images/brand-logos/desktop-white.png" class="header-brand-img" alt="">
						</div>
					</div>
					<div class="container-login100">
						<div class="card wrap-login100 p-0">
							<div class="card-body">
								<form action="backend/register.php" class="login100-form validate-form" method="post" enctype="multipart/form-data">
									<span class="login100-form-title">Registration</span>

									<!-- Username Input -->
									<div class="wrap-input100 validate-input" data-bs-validate="User name is required">
										<input type="text" class="form-control input100" name="username" id="username" placeholder="User name" required>
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="ri-user-fill" aria-hidden="true"></i>
										</span>
									</div>

									<!-- Email Input -->
									<div class="wrap-input100 validate-input" data-bs-validate="Valid email is required: ex@abc.xyz">
										<input type="email" class="form-control input100" name="useremail" id="useremail" placeholder="Email" required>
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="ri-mail-fill" aria-hidden="true"></i>
										</span>
									</div>

									<div class="wrap-input100 validate-input">
										<input type="text" class="form-control input100" name="useraddress" id="useraddress" placeholder="Address" required>
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="ri-home-4-line" aria-hidden="true"></i>
										</span>
									</div>

									<!-- Date of Birth Input -->
									<div class="wrap-input100 validate-input" data-bs-validate="Date of birth is required">
										<input type="date" class="form-control input100" name="dob" id="dob" required>
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="ri-calendar-fill" aria-hidden="true"></i>
										</span>
									</div>

									<!-- NIC Number Input -->
									<div class="wrap-input100 validate-input" data-bs-validate="NIC number is required">
										<input type="text" class="form-control input100" name="nicno" id="nicno" placeholder="NIC no" required>
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="ri-id-card-fill" aria-hidden="true"></i>
										</span>
									</div>

									<!-- Mobile Number Input -->
									<div class="wrap-input100 validate-input" data-bs-validate="Mobile number is required">
										<input type="text" class="form-control input100" name="phoneno" id="phoneno" placeholder="Mobile No" required>
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="ri-phone-fill" aria-hidden="true"></i>
										</span>
									</div>

									<!-- NIC Front Image Input -->
									<div class="wrap-input100 validate-input" data-bs-validate="NIC front image is required">
										<label for="nicfront">NIC Front Image</label>
										<input type="file" class="form-control input100" name="nicfront" id="nicfront" required>
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="ri-image-fill" aria-hidden="true"></i>
										</span>
									</div>

									<!-- NIC Back Image Input -->
									<div class="wrap-input100 validate-input" data-bs-validate="NIC back image is required">
										<label for="nicback">NIC Back Image</label>
										<input type="file" class="form-control input100" name="nicback" id="nicback" required>
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="ri-image-fill" aria-hidden="true"></i>
										</span>
									</div>

									<!-- Password Input -->
									<div class="wrap-input100 validate-input" data-bs-validate="Password is required">
										<input type="password" class="form-control input100" name="userpass" id="userpass" placeholder="Password" required>
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="ri-lock-fill" aria-hidden="true"></i>
										</span>
									</div>

									<!-- Terms and Conditions Checkbox -->
									<label class="custom-control custom-checkbox mt-4">
										<input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
										<span class="custom-control-label ms-1">Agree to the <a href="terms.php" class="text-primary">terms and policy</a></span>
									</label>

									<!-- Register Button -->
									<div class="container-login100-form-btn">
										<button type="submit" class="login100-form-btn btn-primary">Register</button>
									</div>

									<!-- Sign In Link -->
									<div class="text-center pt-3">
										<p class="text-dark mb-0">Already have an account?<a href="login.php" class="text-primary ms-1">Sign In</a></p>
									</div>
								</form>
							</div>

							<!-- Social Media Links -->
							<div class="card-footer border-top">
								<div class="d-flex justify-content-center my-3">
									<a href="javascript:void(0);" class="social-login text-center">
										<i class="ri-google-fill"></i>
									</a>
									<a href="javascript:void(0);" class="social-login text-center mx-4">
										<i class="ri-facebook-fill"></i>
									</a>
									<a href="javascript:void(0);" class="social-login text-center">
										<i class="ri-twitter-fill"></i>
									</a>
								</div>
							</div>
						</div>
					</div>

					<!-- CONTAINER CLOSED -->
				</div>
			</div>
			<!-- END PAGE -->

    </div>


</body>

</html>