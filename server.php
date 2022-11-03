<?php
		

		session_start();

			$firstname_var = "";
			$lastname_var = "";
			$unit_var = "";
			$email_var ="";
			$password_var =""; 
			$password2_var = "";
			$snumber_var = "";
			$errors = array();




		//connect to the database(ehealth_db)

			//$db = mysqli_connect('akinboyewadavid39491.ipagemysql.com','ehealth','Epsuluth@20','ehealth_db');
			$db = mysqli_connect('localhost','root','','ehealth_db');

			if (!$db) {
				echo "Connection Error" .mysqli_connect_error();
			}

 


			// logout
	/*if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['email']);
		header('location:index.php');
	}*/






?>