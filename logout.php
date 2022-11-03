<?php include('server.php');
	
			// logout
	
		
		unset($_SESSION['email']);
		header('location:index.php');
	



?>