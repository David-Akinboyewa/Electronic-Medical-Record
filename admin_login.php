<?php include('server.php');

/*-----------------------Login form-----------------------------------*/
		//Log user in from login page

		

	if (isset($_POST['login'])) {
		$email_log = mysqli_real_escape_string($db, $_POST['email']);
		$password_log = mysqli_real_escape_string($db, $_POST['password']);

		//ensure that form fields are filled properly
		if (empty($email_log) ) {
			array_push($errors, "*Unauthorized Admin");
		}
		/*if (empty($password_log)) {
			array_push($errors, "*unauthorized | Contact the eHealth-PSU Admin*");
		}*/

		if (count($errors)==0) {
			//$password_log = md5($password_log);//encryt password before comparing with that of database
			//$password_log = md5($password_log);//encryt password before comparing with that of database 
			$query = "SELECT * FROM ehealth_reg WHERE email='$email_log' AND admin = '$password_log' "; 
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) ==1 ) {
				 //log user in
			$_SESSION['email']  = $email_var;
			$_SESSION['success'] = "You are now logged in";
			header('location: admin_access.php'); //redirect to home page
			}else
			array_push($errors, "Unauthorised Admin");
		}
		
	}






 ?>


<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/smarthr/orange/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Apr 2020 11:59:26 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="eHEALTH-PSU">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="eHEALTH-PSU">
        <meta name="robots" content="noindex, nofollow">
        <title>Login ehealth-PSU</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body class="account-page">
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="account-content">
				<!---<a href="visit_appointment.php" class="btn btn-primary apply-btn">Book Appointment</a>-->
				<div class="container">
				
					<!-- Account Logo -->
					<div class="account-logo">
						<a href="index.php"><img src="assets/img/logo2.png" alt="ENS"></a>
					</div>
					<!-- /Account Logo -->
					
					<div class="account-box">
						<div class="account-wrapper">
							<h3 class="account-title">Admin-Login</h3>
							<p class="account-subtitle">Access e-HEALTH-PSU</p>
							
							<!-- Account Form -->
							<form action="admin_login.php" method="post">
								<!--display validation errors here-->
								<?php include('errors.php'); ?>
								<div class="form-group">
									<label>Email </label>
									<input class="form-control" type="text" name="email">
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col">
											<label>Password</label>
										</div>
										<div class="col-auto">
											<a class="text-muted" href="forgot-password.php">
												Forgot password?
											</a>
										</div>
									</div>
									<input class="form-control" type="password" name="password">
								</div>
								<div class="form-group text-center">
									<button class="btn btn-primary account-btn" type="submit" name="login">Login</button>
								</div>
								<!--<div class="account-footer">
									<p>Don't have an account yet? <a href="register.php">Register</a></p>
								</div>-->
							</form>
							<!-- /Account Form -->
							
						</div>
					</div>
				</div>
			</div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/smarthr/orange/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Apr 2020 11:59:27 GMT -->
</html>