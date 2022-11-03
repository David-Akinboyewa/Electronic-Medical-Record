<?php include('server.php');

	
	
	if (isset($_POST['reset-password'])) {
	$email_var = mysqli_real_escape_string($db, $_POST['email']);
	
	$query  ="SELECT * FROM ehealth_reg WHERE email = '$email_var'";
	$query_run = mysqli_query($db, $query);
	$result = mysqli_num_rows($query_run);
	$row = mysqli_fetch_assoc($result);
	if ($result >0) {

		//$name_var = echo $row['firstname'];

		//Email to Admin
		$to = "$email_var";
		$subject = "Password Reset";
		$message ="Dear $email_var  \nTo reset the password for $email_var username.
		\nclick the web address below or copy and paste it into your browser:
		\nhttps://ehealthpsuluth.com/new-password.php
		\n This link will expire within 60 minutes
		\n If you don't wish to reset password, simply ignore this email and nothing will change.

		\nTHANK YOU!";

		mail( $to, $subject, $message);
		header("location: reset-home.php"); //
		}


		//$query = "UPDATE ";

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
						<a href="forgot-password.php"><img src="assets/img/logo2.png" alt="Dreamguy's Technologies"></a>
					</div>
					<!-- /Account Logo -->
					
					<div class="account-box">
						<div class="account-wrapper">
							<h3 class="account-title">Forgot Password?</h3>
							<p class="account-subtitle">Enter your email to get a password reset link</p>
							
							<!-- Account Form -->
							<form action="forgot-password.php" method="post">
								<div class="form-group">
									<?php include('errors.php'); ?>
									<label>Email Address</label>
									<input class="form-control" type="text" name="email">
								</div>
								<div class="form-group text-center">
									<button class="btn btn-primary account-btn" name="reset-password" type="submit">Reset Password</button>
								</div>
								<div class="account-footer">
									<p>Remember your password? <a href="index.php">Login</a></p>
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