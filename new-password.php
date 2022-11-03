<?php include('server.php');

	
	
	if (isset($_POST['newpassword-submit'])) {
	$email_var = mysqli_real_escape_string($db, $_POST['email']);
	$new_password_var = mysqli_real_escape_string($db,$_POST['new-password']);
	$confirm_password_var = mysqli_real_escape_string($db,$_POST['confirm-password']);

	if (empty($email_var)) {
		array_push($errors, "Enter email");
	}
	if (empty($new_password_var)) {
		array_push($errors, " Enter new password");
	}
	if (empty($confirm_password_var)) {
		array_push($errors, " Confirm new password ");
	}
	if ($new_password_var != $confirm_password_var) {
		array_push($errors, " New Password does not match");
	}
	
	if (count($errors)==0) {
	
		$query = "UPDATE ehealth_reg SET password = '$new_password_var' WHERE email = '$email_var' ";
		$query_run = mysqli_query($db, $query);
		if($query_run) {
			echo '<script type="text/javascript"> alert("Password Reset")</script>';

		}else
			{
			echo '<script type="text/javascript"> alert("Password Not Reset")</script>';
		}


		$to = "$email_var";
		$subject = "Password Changed";
		$message ="Dear $email_var  \n Your password has been reset.
		\nclick the web address below to login with your new password:
		\nhttps://ehealthpsuluth.com/index.php

		\nTHANK YOU!";

		mail( $to, $subject, $message);

		
							
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
        <title>Forgot Password</title>
		
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
				
				<div class="container">
				
					<!-- Account Logo -->
					<div class="account-logo">
						<a href="new-password.php"><img src="assets/img/logo2.png" alt=""></a>
					</div>
					<!-- /Account Logo -->
					
					<div class="account-box">
						<div class="account-wrapper">
							<h3 class="account-title">Reset Password</h3>
							<p class="account-subtitle">Enter your new password</p>
							
							<!-- Account Form -->
							<form action="new-password.php" method="post">
								<div class="form-group">
									<?php include('errors.php'); ?>
									<label>Email</label>
									<input class="form-control" type="text" name="email">
								</div>
								<div class="form-group">
									<label>Enter new Password</label>
									<input class="form-control" type="text" name="new-password">
								</div>
								<div class="form-group">
									<label>Confirm Password</label>
									<input class="form-control" type="text" name="confirm-password">
								</div>
								<div class="form-group text-center">
									<button class="btn btn-primary account-btn" name="newpassword-submit" type="submit">Submit</button>
								</div>
								<div class="account-footer">
									<p>CLick <a href="index.php">Here</a>to Login</p>
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