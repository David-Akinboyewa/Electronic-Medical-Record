<?php include('server.php');

/*-----------------------Login form-----------------------------------*/
		//Log user in from login page


				
	

			if (isset($_POST['login'] )) {
				$email_log = mysqli_real_escape_string($db, $_POST['email']);
				$password_log = mysqli_real_escape_string($db, $_POST['password']);

				$sql_status = "SELECT * FROM ehealth_reg";
				$query1 = mysqli_query($db, $sql_status);
				$row = mysqli_fetch_assoc($query1);

				//ensure that form fields are filled properly
				if ($row['activate'] == 0 ) {
					array_push($errors, "* No access granted | Contact the admin");
				}
				if (empty($email_log) ) {
					array_push($errors, "*unauthorized | Contact the eHealth-PSU Admin");
				}
				/*if (empty($password_log)) {
					array_push($errors, "*unauthorized | Contact the eHealth-PSU Admin*");
				}*/

				if (count($errors)==0) {
					//$password_log = md5($password_log);//encryt password before comparing with that of database
					//$password_log = md5($password_log);//encryt password before comparing with that of database 
					//$rowlink_elective = 'view_elective_surgery.php?hosp_number='.$idrow_elective;
					$query = "SELECT * FROM ehealth_reg WHERE email='$email_log' AND password = '$password_log' AND activate = 1"; 
					$result = mysqli_query($db, $query);
					$queryResult = mysqli_num_rows($result);
					if (mysqli_num_rows($result) ==1 ) {
					 $useremail_var= $row["email"];
					//$rowlink_useremail_var = 'index.php?firstname='.$useremail_var;
						 //log user in
					$_SESSION['email']  = $email_var;
					//$_SESSION['success'] = "You are now logged in";
					header("location: dashboard.php?email=$email_log"); //redirect to home page
					}else
					array_push($errors, "Unauthorised user | Contact e-health-PSU admin");
				}
				
			}

		

 ?>


<!DOCTYPE html>
<html lang="en">
    

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Login ehealth-PSU-LUTH</title>
		
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
				<a href="visit_appointment.php" class="btn btn-primary apply-btn">Book Appointment</a>
				<div class="container">
				
					<!-- Account Logo -->
					<div class="account-logo">
						<a href="admin_login.php#"><img src="assets/img/logo2.png" alt="ENS"></a>
					</div>
					<!-- /Account Logo -->
					
					<div class="account-box">
						<div class="account-wrapper">
							<h3 class="account-title">Login</h3>
							<p class="account-subtitle">e-HEALTH-PSU-LUTH</p>
							
							<!-- Account Form -->
							<form action="index.php" method="post">
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
								<div class="account-footer">
									<p>Don't have an account yet? <a href="register.php">Register</a></p>
								</div>
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

</html>