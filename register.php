<?php include('server.php');

		/******************Register if click registration button***********************/ 
		if (isset($_POST['register'])) {
			$firstname_var = mysqli_real_escape_string($db, $_POST['firstname']);
			//$firstname_var = mysqli_real_escape_string($db, strip_tags($_POST['firstname']));
			$lastname_var = mysqli_real_escape_string($db, $_POST['lastname']);
			$unit_var = mysqli_real_escape_string($db, $_POST['unit']);
			$email_var = mysqli_real_escape_string($db, $_POST['email']);
			$password_var = mysqli_real_escape_string($db, $_POST['password']);
			$password2_var = mysqli_real_escape_string($db, $_POST['password2']);
			//$to = "akinboyewadavid@gmail.com";


		/**************ensure thtat form fields are filled properly**************************/
			if (empty($firstname_var)) {
				array_push($errors, "* Firstname is required");
			}
			if (empty($lastname_var)) {
				array_push($errors, "* Lastname is required");
			}
			if (empty($unit_var)) {
				array_push($errors, "* Unit is requied");
			}
			if (empty($email_var)) {
				array_push($errors, "* Email is required");
			}
			if (empty($password_var)) {
				array_push($errors, "* Password is required");
			}
			if ($password_var != $password2_var) {
				array_push($errors, "* The two password do not match");
			}

		/************if there are not errors, save user into database************/

			if (count($errors) == 0) {
				$password2 = uniqid('PSU');
				//$password2 = md5($password_var);// encryt password before storing in database
				$sql = "INSERT INTO ehealth_reg (firstname, lastname, unit, email, password, enpassword ) VALUES('$firstname_var', '$lastname_var', '$unit_var', '$email_var', '$password_var','$password2')";
				mysqli_query($db, $sql);

				//$_SESSION['firstname'] = $first_name_var;
				//$_SESSION['success'] = "Registration process complete please check your email for activation";

				//Email to Admin
				$to = "akinboyewadavid@gmail.com,adesojiademuyiwa@yahoo.co.uk,info@ehealthpsuluth.com,	doctoroae@gmail.com,fmainc2002@yahoo.com,moyoojo2015@gmail.com,oyegbolachristiana@gmail.com";
				$subject = "eHealth-PSU-LUTH Verification";
				$message ="$firstname_var $lastname_var has registered on the eHealth-PSU-LUTH.\nKindly click https://ehealthpsuluth.com/admin_login.php to activate.\n \nTHANK YOU!";
				$headers = "Dear Admin";
				//$headers .= "MIME-VERSION: 1.0". " \r\n";
				//$headers .= "Content-type:text/html;charset=UTF-8"."\r\n";

				mail( $to, $subject, $message, $headers); 
				//mail( $to, $subject, $message, $headers);
				header('location:email_access.php');// redirecting to home page

				
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
        <title>Register </title>
		
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
						<a href="index.php"><img src="assets/img/logo2.png" alt="e-health-PSU"></a>
					</div>
					<!-- /Account Logo -->
					
					<div class="account-box">
						<div class="account-wrapper">
							<h3 class="account-title">Register</h3>
							<p class="account-subtitle">Access to our eHealth-PSU-LUTH</p>
							
							<!-- Account Form -->
							<form action="register.php" method="post">
								<!--display validation errors here-->
								<?php include('errors.php'); ?>
								<div class="form-group">
									<label>First Name</label>
									<input class="form-control" type="text" name="firstname">
								</div>
								<div class="form-group">
									<label>Last Name</label>
									<input class="form-control" type="text" name="lastname">
								</div>
								<div class="form-group">
									<label>Unit</label>
									<input class="form-control" type="text" name="unit">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" type="text" name="email">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input class="form-control" type="password" name="password">
								</div>
								<div class="form-group">
									<label>Repeat Password</label>
									<input class="form-control" type="password" name="password2">
								</div>
								<div class="form-group text-center">
									<button class="btn btn-primary account-btn" type="submit" name="register">Register</button>
								</div>
								<div class="account-footer">
									<p>Already have an account? <a href="login.php">Login</a></p>
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