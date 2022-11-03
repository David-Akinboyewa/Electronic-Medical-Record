<?php include('server.php');

		
	
	if (isset($_POST['consult'])) {
			$datepre_var = mysqli_real_escape_string($db, $_POST['datepre']);
			$firstname_var = mysqli_real_escape_string($db, $_POST['firstname']);
			$lastname_var = mysqli_real_escape_string($db, $_POST['lastname']);
			$hospitalnumber_var = mysqli_real_escape_string($db, $_POST['hospitalnumber']); 
			$address_var = mysqli_real_escape_string($db, $_POST['address']);
			$phonenumber_var = mysqli_real_escape_string($db, $_POST['phonenumber']);
			$age_var = mysqli_real_escape_string($db, $_POST['age']);
			$gender_var = mysqli_real_escape_string($db, $_POST['gender']);
			$sourceofreferral_var = mysqli_real_escape_string($db, $_POST['source_of_referral']);
			$presentingcompliant_var = mysqli_real_escape_string($db, $_POST['presenting_compliant']);
			$hpc_var = mysqli_real_escape_string($db, $_POST['hpc']);
			$examination_var = mysqli_real_escape_string($db, $_POST['examination']);
			$diagnosis_var = mysqli_real_escape_string($db, $_POST['diagnosis']);
			$diagnosis_two_var = mysqli_real_escape_string($db, $_POST['diagnosis_two']);
			$availableinvestigations_var = mysqli_real_escape_string($db, $_POST['available_investigations']);
			$requested_var = mysqli_real_escape_string($db, $_POST['requested']);
			$plan_var = mysqli_real_escape_string($db, $_POST['plan']);
			$second_review_var = mysqli_real_escape_string($db, $_POST['second_review']);
			$third_review_var = mysqli_real_escape_string($db, $_POST['third_review']);

			$sql_status = "SELECT hosp_number FROM unoperated_consult_records_tb WHERE hosp_number = '$hospitalnumber_var' ";
			$query1 = mysqli_query($db, $sql_status);
			$row = mysqli_fetch_assoc($query1);		
					

			//ensure that hospital number is entered into the form fields.
			if (empty($hospitalnumber_var) ) {
					array_push($errors, "Enter hospital number");
				}

			if ($row > 1 ) {
					array_push($errors, "Duplicate Hosiptal Number");
				}
					if (count($errors)==0) {
			
			//if there are not errors, save user into database
			$insert_consult = "INSERT INTO unoperated_consult_records_tb ( date_of_presentation, firstname, lastname, hosp_number, address, phonenumber, age, gender, source_of_referral, presenting_compliant, hpc , examination, diagnosis, diagnosis_two, available_investigations, requested, plan, second_review, third_review ) VALUES ( '$datepre_var', '$firstname_var', '$lastname_var', '$hospitalnumber_var', '$address_var','$phonenumber_var', '$age_var','$gender_var', '$sourceofreferral_var', '$presentingcompliant_var', '$hpc_var', '$examination_var', '$diagnosis_var' , '$diagnosis_two_var' , '$availableinvestigations_var', '$requested_var', '$plan_var', '$second_review_var', '$third_review_var' )";
			$query_run = mysqli_query($db, $insert_consult);

			if($query_run) {
				echo '<script type="text/javascript"> alert("Unoperated Information Saved")</script>';
			}else
				{
					echo '<script type="text/javascript"> alert("Unoperated Information Not Saved")</script>';
				}

		}
	}



?>

<!DOCTYPE html>
<html lang="en">
    

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="eHEALTH-PSU">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="eHEALTH-PSU">
        <meta name="robots" content="noindex, nofollow">
        <title>Unoperated consult</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="unoperated_consult.php" class="logo">
						<img src="assets/img/logo.png" width="40" height="40" alt="">
					</a>
                </div>
				<!-- /Logo -->
				
				<a id="toggle_btn" href="javascript:void(0);">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</a>
				
				<!-- Header Title -->
                <div class="page-title-box">
					<h3>eHEALTH-PSU-LUTH</h3>
                </div>
				<!-- /Header Title -->
				
				<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
				
				<!-- Header Menu -->
				<ul class="nav user-menu">
				
					<!-- Search -->
					<li class="nav-item">
						<div class="top-nav-search">
							<a href="javascript:void(0);" class="responsive-search">
								<i class="fa fa-search"></i>
						   </a>
							<form action="#">
								<input class="form-control" type="text" placeholder="Search here">
								<button class="btn" type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</li>
					<!-- /Search -->
				
					<!-- Flag -->
					<li class="nav-item dropdown has-arrow flag-nav">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
							<img src="assets/img/flags/us.png" alt="" height="20"> <span>English</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/us.png" alt="" height="16"> English
							</a>
							<!--<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/fr.png" alt="" height="16"> French
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/es.png" alt="" height="16"> Spanish
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/de.png" alt="" height="16"> German
							</a>-->
						</div>
					</li>
					<!-- /Flag -->
				
					<!-- Notifications -->
					<!--<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fa fa-bell-o"></i> <span class="badge badge-pill">3</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar">
													<img alt="" src="assets/img/profiles/avatar-02.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
													<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar">
													<img alt="" src="assets/img/profiles/avatar-03.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
													<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar">
													<img alt="" src="assets/img/profiles/avatar-06.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
													<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar">
													<img alt="" src="assets/img/profiles/avatar-17.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
													<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar">
													<img alt="" src="assets/img/profiles/avatar-13.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
													<p class="noti-time"><span class="notification-time">2 days ago</span></p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="activities.html">View all Notifications</a>
							</div>
						</div>
					</li>-->
					<!-- /Notifications -->
					
					<!-- Message Notifications -->
					<!--<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fa fa-comment-o"></i> <span class="badge badge-pill">8</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Messages</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="assets/img/profiles/avatar-09.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">Richard Miles </span>
													<span class="message-time">12:28 AM</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="assets/img/profiles/avatar-02.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">John Doe</span>
													<span class="message-time">6 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="assets/img/profiles/avatar-03.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author"> Tarah Shropshire </span>
													<span class="message-time">5 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="assets/img/profiles/avatar-05.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">Mike Litorus</span>
													<span class="message-time">3 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="assets/img/profiles/avatar-08.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author"> Catherine Manseau </span>
													<span class="message-time">27 Feb</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="chat.html">View all Messages</a>
							</div>
						</div>-->
					</li>
					<!-- /Message Notifications -->

					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img src="assets/img/profiles/" alt="">
							<span class="status online"></span></span>
							<span>Settings</span>
						</a>
						<div class="dropdown-menu">
							<!--<a class="dropdown-item" href="profile.html">My Profile</a>
							<a class="dropdown-item" href="settings.html">Settings</a>-->
							<a class="dropdown-item" href="change-password.php">Change Password</a>
							<a class="dropdown-item" href="index.php">Logout</a>
						</div>
					</li>
				</ul>
				<!-- /Header Menu -->
				
				<!-- Mobile Menu -->
				<div class="dropdown mobile-user-menu">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<div class="dropdown-menu dropdown-menu-right">
						<!--<a class="dropdown-item" href="profile.html">My Profile</a>
						<a class="dropdown-item" href="settings.html">Settings</a>-->
						<a class="dropdown-item" href="change-password.php">Change Password</a>
						<a class="dropdown-item" href="index.php">Logout</a>
					</div>
				</div>
				<!-- /Mobile Menu -->
				
            </div>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li class="" >
								<a href="dashboard.php"><i class="la la-dashboard"></i> <span> Dashboard</span> <!--<span class="menu-arrow"></span></a>-->
								<!--<ul style="display: none;">
									<li><a class="active" href="index.html">Admin Dashboard</a></li>
									<li><a href="employee-dashboard.html">Employee Dashboard</a></li>
								</ul>-->
							</li>
							<li class="active">
								<a href="#"><i class="la la-wheelchair"></i> <span> Patient</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="add_patient_record.php">Add Patient Record</a></li>
									<li><a href="patient-records.php">Search Patient Record</a></li>
									<li><a href="update_unoperated.php">Update Unoperated.php</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-calendar"></i> <span> Appointments</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="add_appointment.php">Add Appointment</a></li>
									<li><a href="appointments.php">All Appointment</a></li>
								</ul>
							</li>
							<!--<li class="submenu">
								<a href="#"><i class="la la-building"></i> <span> Departments</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="#">G.O.P.D</a></li>
									<li><a href="#">General Surgery</a></li>
									<li><a href="#">Gynecology</a></li>
									<li><a href="#">Pediatrician</a></li>
									<li><a href="#">Urology</a></li>
									<li><a href="#">Laboratory</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-stethoscope"></i> <span> Doctor</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="#">Doctors on Call</a></li>
									<li><a href="#">Assign Call</a></li>
									<li><a href="#">Add Doctor</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-female"></i> <span> Nurse</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="#">Nurses on Duty</a></li>
									<li><a href="#">Nurses Record</a></li>
									<li><a href="#">Add Nurse</a></li>
									<li><a href="#">Edit Nurse</a></li>
								</ul>
							</li>-->
							<li class="submenu">
								<a href="#"><i class="la la-cube"></i> <span> Applications</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<!--<li><a href="chat.html">Chat</a></li>-->
									<li><a href="events.php">Calendar</a></li>-->
									<!--<li><a href="inbox.html">Email</a></li>
									<li><a href="file-manager.html">File Manager</a></li>-->
								</ul>
							</li>
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Unoperated Consult Including Dama & Death</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Unoperated Consult Including Dama & Death</li><li class="breadcrumb-item active"><a href="update_unoperated.php" style="color:red;">Update Unoperated Consult</a></li><li class="breadcrumb-item active"><a href="add_patient_record.php"  style="color:red;">Back</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<!--display validation errors here-->
									<?php include('errors.php'); ?>
									<h4 class="card-title mb-0">Patient details</h4>
								</div>
								<div class="card-body">
									<form action="unoperated_consult.php" method="post">
										<div class="form-group">
											<label>Date of 1st Presentation </label>
											<input type="date" class="form-control" name="datepre">
										</div>
										<div class="form-group">
											<label>First Name</label>
											<input type="text" class="form-control" placeholder="" name="firstname">
										</div>
										<div class="form-group">
											<label>Last Name</label>
											<input type="text" class="form-control" placeholder="" name="lastname">
										</div>
										<div class="form-group">
											<label>Hospital Number</label>
											<input type="text" class="form-control" placeholder="" name="hospitalnumber">
										</div>
										<div class="form-group">
											<label>Address</label>
											<input type="text" class="form-control" placeholder="" name="address">
										</div>
										<div class="form-group">
											<label>Phone Number</label>
											<input type="text" class="form-control" placeholder="" name="phonenumber">
										</div>
										<div class="form-group">
											<label>Age</label>
											<input type="text" class="form-control" placeholder="" name="age">
										</div>
										<div class="form-group">
											<label>Gender</label>
												<select class="form-control" placeholder="" name="gender">
													<option></option>
													<option>Male</option>
													<option>Female</option>
													<option>Others</option>
												</select>	
										</div>
										<div class="form-group">
											<label>Source of Referral</label>
											<input type="text" class="form-control" placeholder="" name="source_of_referral">
										</div>
										<div class="form-group">
											<label>Presenting Compliant</label>
											<textarea type="text" class="form-control" placeholder="" name="presenting_compliant"></textarea>
										</div>
										<div class="form-group">
											<label>HPC SUmmary</label>
											<textarea type="text" class="form-control" placeholder="" name="hpc"></textarea>
										</div>
										<div class="form-group">
											<label>Examination</label>
											<textarea type="text" class="form-control" placeholder="" name="examination"></textarea>
										</div>
										<div class="form-group">
											<label>Diagnosis</label>
												<select class="form-control" placeholder="" name="diagnosis">
											  <option></option>
											  <option value="Anorectal Malformation - High">Anorectal Malformation - High</option>
											  <option value="Anorectal Malformation - Low">Anorectal Malformation - Low</option>
											  <option value="Anorectal Disease NOS*">Anorectal Disease NOS*</option>
											  <option value="vestibular anus"> Vestibular anus </option>
											  <option value="cloaca">Cloaca</option>
											  <option value="Hirschsprung Disease">Hirschsprung Disease</option>
											  <option value="Omphalocele">Omphalocele</option>
											  <option value="Gastroschisis">Gastroschisis</option>
											  <option value="Cloaca Exstrophy">Cloaca Exstrophy</option>
											  <option value="Pyloric stenosis">Pyloric stenosis</option>
											  <option value="Duodenal Obstruction">Duodenal Obstruction</option>
											  <option value="Jejunal atresia">Jejunal atresia</option>
											  <option value="Ileal atresia">Ileal atresia</option>
											  <option value="Colonic atresia">Colonic atresia</option>
											  <option value="Intestinal Atresia NOS*">Intestinal Atresia NOS*</option>
											  <option value="Biliary Atresia">Biliary Atresia</option>
											  <option value="Choledochal cyst">Choledochal cyst</option>
											  <option value="Mesenteric cyst">Mesenteric cyst</option>
											  <option value="Thyroglossal cyst">Thyroglossal cyst</option>
											  <option value="Esophageal Atresia with Tracheoesophegeal fistula">Esophageal Atresia with Tracheoesophegeal fistula</option>
											  <option value="Esophegeal Atresia - Other">Esophegeal Atresia - Other</option>
											  <option value="Congenital Diaphragmatic Hernia">Congenital Diaphragmatic Hernia</option>
											  <option value="Umblical or Episgastric hernia">Umblical or Episgastric hernia</option>
											  <option value="Inguinal hernia">Inguinal hernia</option>
											  <option value="Hydrocele">Hydrocele</option>
											  <option value="Undescended Testis">Undescended Testis</option>
											  <option value="Testicular Torsion">Testicular Torsion</option>
										  	  <option value="Bladder Exstrophy">Bladder Exstrophy</option>
											  <option value="Posterior Urethal valve">Posterior Urethal valve</option>
											  <option value="Hypospadias">Hypospadias</option>
											  <option value="Disorder of Sexual differentiation">Disorder of Sexual differentiation</option>
											  <option value="Urogenital malformation NOS*">Urogenital malformation NOS*</option>
											  <option value="Cleft Lip and/or Cleft palate">Cleft Lip and/or Cleft palate</option>
											  <option value="Congenital heart disease NOS*">Congenital heart disease NOS*</option>
											  <option value="Musculoskeletal malformation NOS*">Musculoskeletal malformation NOS*</option>
											  <option value="Hydrocephalus">Hydrocephalus</option>
											  <option value="Meningomyelocele/Spina bifida">Meningomyelocele/Spina bifida</option>
											  <option value="Sacroccygeal Teratoma">Sacroccygeal Teratoma</option>
											  <option value="Terotoma NOS*">Terotoma NOS*</option>
											  <option value="Wilms Tumor(Nephroblastoma)">Wilms Tumor(Nephroblastoma)</option>
											  <option value="Neuroblastoma">Neuroblastoma</option>
											  <option value="Hepatoblastoma">Hepatoblastoma</option>
											  <option value="Rhabdomyosarcoma">Rhabdomyosarcoma</option>
											  <option value="Cystic hygroma/Lymphatic malformation">Cystic hygroma/Lymphatic malformation</option>
											  <option value="Intraabdominal mass NOS*">Intraabdominal mass NOS*</option>
											  <option value="Ovarian tumor NOS*">Ovarian tumor NOS*</option>
											  <option value="Testicular tumor NOS*">Testicular tumor NOS*</option>
											  <option value="Soft tissue mass NOS*">Soft tissue mass NOS*</option>
											  <option value="Extremity Mass NOS*">Extremity Mass NOS*</option>
											  <option value="Burkitt's Lymphona">Burkitt's Lymphona</option>
											  <option value="Lymphoma NOS">Lymphoma NOS</option>
											  <option value="Intussusception">Intussusception</option>
											  <option value="Malrotation Volvulus">Malrotation Volvulus</option>
											  <option value="Small bowel obstruction">Small bowel obstruction</option>
											  <option value="Constipation/ Fecal impaction NOS*">Constipation/ Fecal impaction NOS*</option>
											  <option value="Rectal Prolapse">Rectal Prolapse</option>
											  <option value="Blunt Trauma">Blunt Trauma</option>
											  <option value="Splenic Injury">Splenic Injury</option>
											  <option value="Penetrating Trauma">Penetrating Trauma</option>
											  <option value="Trauma NOS*">Trauma NOS*</option>
											  <option value="Burns">Burns</option>
											  <option value="Abscess/cellutitis">Abscess/cellutitis</option>
											  <option value="Necrotizing fasciitis">Necrotizing fasciitis</option>
											  <option value="Appendicitis">Appendicitis</option>
											  <option value="Primary peritonis">Primary peritonis</option>
											  <option value="Typhoid ileal perforation">Typhoid ileal perforation</option>
											  <option value="Intestinal Perforation NOS*">Intestinal Perforation NOS*</option>
											  <option value="Cholecystitis/Cholangitis">Cholecystitis/Cholangitis</option>
											  <option value="Necrotizing enterocolitis">Necrotizing enterocolitis</option>
											  <option value="Neonatal sepsis NOS*">Neonatal sepsis NOS*</option>
											  <option value="Thoracic Empyema">Thoracic Empyema</option>
										  	  <option value="Acute Osteomyelitis">Acute osteomyelitis</option>
											  <option value="Chronic Osteomyelitis">Chronic osteomyelitis </option>
											  <option value="Post-surgery complications (includsurgical site infection & post-circumsion complication)">Post-surgery complications (includsurgical site infection & post-circumsion complication)</option>
											 <option value="Gastroesophageal reflux disease">Gastroesophageal reflux disease</option>
											 <option value="Conjoint twins">Conjoint twins</option>
											 <option value="Not specified">Not specified</option>
											</select>							
										</div>
										<div class="form-group">
											<label>Diagnosis (others)</label>
											<input type="text" class="form-control" placeholder="" name="diagnosis_two">
										</div>
										<div class="form-group">
											<label>Availabel  Investigations</label>
											<textarea type="text" class="form-control" placeholder="" name="available_investigations"></textarea>
										</div>
										<div class="form-group">
											<label>Requested</label>
											<textarea type="text" class="form-control" placeholder="" name="requested"></textarea>
										</div>
										<div class="form-group">
											<label>Plan</label>
											<textarea type="text" class="form-control" placeholder="" name="plan"></textarea>
										</div>
										<div class="form-group">
											<label>2<sup>nd</sup>Review</label>
											<textarea type="text" class="form-control" placeholder="" name="second_review"> </textarea>
										</div>
										<div class="form-group">
											<label>3<sup>rd</sup>Review</label>
												<textarea type="text" class="form-control" placeholder="" name="third_review"> </textarea>
										</div>
										<div class="text-center">
											<button type="submit" class="btn btn-primary" name="consult">Submit</button>
										</div>		
									</form>
								</div>
							</div>
						</div>
					</div>
				
				</div>			
			</div>
			<!-- /Main Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/app.js"></script>
		
    </body>

    <button onclick="topFunction()" id="myBtn" title="Go to top" style="float:right; color:white; background-color:#ff9b44;">Top</button>

    
</html>