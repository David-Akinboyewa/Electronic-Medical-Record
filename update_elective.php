<?php include("server.php"); 

			
			/*if (isset($_POST['emergency'])) {
			$datepre_var = mysqli_real_escape_string($db, $_POST['datepre']);
			$firstname_var = mysqli_real_escape_string($db, $_POST['firstname']);
			$lastname_var = mysqli_real_escape_string($db, $_POST['lastname']);
			$hospitalnumber_var = mysqli_real_escape_string($db, $_POST['hospitalnumber']);
			$age_var = mysqli_real_escape_string($db, $_POST['age']);
			$gender_var = mysqli_real_escape_string($db, $_POST['gender']);
			$pc_var = mysqli_real_escape_string($db, $_POST['pc']);
			$hx_var = mysqli_real_escape_string($db, $_POST['hx']); 
			$hpc_var = mysqli_real_escape_string($db, $_POST['hpc']);
			$phy_var = mysqli_real_escape_string($db, $_POST['phy_exam']);
			$available_var = mysqli_real_escape_string($db, $_POST['available']);
			$diagnosis_var = mysqli_real_escape_string($db, $_POST['diagnosis']);
			$diagnosis_two_var = mysqli_real_escape_string($db, $_POST['diagnosis_two']);
			$requested_ix_var = mysqli_real_escape_string($db, $_POST['requested_ix']);
			$plan_var = mysqli_real_escape_string($db, $_POST['plan']);
			$er_care_summary_var = mysqli_real_escape_string($db, $_POST['er_care_summary']);
			$surgery_performed_var = mysqli_real_escape_string($db, $_POST['surgery_performed']);
			$intraop_var = mysqli_real_escape_string($db, $_POST['intraop']);
			$date_time_surgery_var = mysqli_real_escape_string($db, $_POST['date_time_of_surgery']);
			$reason_for_delay_var = mysqli_real_escape_string($db, $_POST['reason_for_delay']);
			$admissionsummary_1_var = mysqli_real_escape_string($db, $_POST['admissionsummary1']);
			$admissionsummary_2_var = mysqli_real_escape_string($db, $_POST['admissionsummary2']);
			$admissionsummary_3_var = mysqli_real_escape_string($db, $_POST['admissionsummary3']);
			$complication_var = mysqli_real_escape_string($db, $_POST['complication']);
			$outcomes_var = mysqli_real_escape_string($db, $_POST['outcomes']);
			$dateofdischarge_var = mysqli_real_escape_string($db, $_POST['dateofdischarge']);
			$length_hospital_stay_var = mysqli_real_escape_string($db, $_POST['length_hospital_stay']);
			$surgeon_var = mysqli_real_escape_string($db, $_POST['surgeon']);
			$dateofsurgery2_var = mysqli_real_escape_string($db, $_POST['date-of-surgery']);
			$totalcostofcare_var = mysqli_real_escape_string($db, $_POST['totalcostofcare']);
			$costofsurgery_var = mysqli_real_escape_string($db, $_POST['costofsurgery']);
			$education_var = mysqli_real_escape_string($db, $_POST['education']);
			$fathermonthlyoccupation_var = mysqli_real_escape_string($db, $_POST['fatheroccup']);
			$mothermonthlyoccupation_var = mysqli_real_escape_string($db, $_POST['motheroccup']);
			$fathermonthlyincome_var = mysqli_real_escape_string($db, $_POST['fathermonthlyincome']);
			$mothermonthlyincome_var = mysqli_real_escape_string($db, $_POST['mothermonthlyincome']);
			$monthlyexpenditure_var = mysqli_real_escape_string($db, $_POST['monthlyexpenditure']);
			$monthlyincomeleft_var = mysqli_real_escape_string($db, $_POST['monthly-income-left']);
			$sourcecurrenthealthexpenditure_var = mysqli_real_escape_string($db, $_POST['sourceoffund']);	

			/*if there are not errors, save user into database
			$insert_emergency = "INSERT INTO emergency_surgery_records_tb ( date_of_presentation, firstname , lastname, hosp_number, age, gender, pc, hx, hpc, phy, available_ix, diagnosis, diagnosis_two , requested_ix, plan, er_care_summary, surgery_performed, intraop, date_time_of_surgery, reason_for_delay, admission_summary_1, admission_summary_2, admission_summary_3, complications , outcome , date_of_discharge, length_hospital_stay, surgeon, date_of_surgery, total_cost_of_care , cost_of_surgery, education, fatheroccup, motheroccup, father_monthly_income, mother_monthly_income, monthly_household_expenditure , monthly_income_left, source_of_fund ) VALUES ('$datepre_var','$firstname_var', '$lastname_var','$hospitalnumber_var', '$age_var' , '$gender_var', '$pc_var', '$hx_var', '$hpc_var', '$phy_var', '$available_var', '$diagnosis_var', '$diagnosis_two_var' , '$requested_ix_var', '$plan_var', '$er_care_summary_var' , '$surgery_performed_var', '$intraop_var', '$date_time_surgery_var','$reason_for_delay_var', '$admissionsummary_1_var', '$admissionsummary_2_var', '$admissionsummary_3_var', '$complication_var' , '$outcomes_var', '$dateofdischarge_var', '$length_hospital_stay_var', '$surgeon_var', '$dateofsurgery2_var', '$totalcostofcare_var', '$costofsurgery_var', '$education_var', '$fathermonthlyoccupation_var', '$mothermonthlyoccupation_var' , '$fathermonthlyincome_var', '$mothermonthlyincome_var', '$monthlyexpenditure_var' , '$monthlyincomeleft_var', '$sourcecurrenthealthexpenditure_var')";
				
				mysqli_query($db, $insert_emergency);

		}*/
		
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
        <title>Update emergency surgery</title>
		
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
                    <a href="dashboard.php" class="logo">
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
									<li><a href="events.php">Calendar</a></li>
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
								<h3 class="page-title">Update Elective Surgery Record</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Update Elective Surgery</li><li class="breadcrumb-item active"><a href="elective_surgery.php"  style="color:red;">Back</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<!-- Search Filter -->
					<form action="update_elective.php" method="post">
						<div class="row filter-row">
							<div class="col-sm-6 col-md-3">  
								<div class="form-group form-focus">
									<input type="text" class="form-control floating" name="search_hospital_number">
									<label class="focus-label">Hospital number</label>
								</div>
							</div>
							<!--<div class="col-sm-6 col-md-3">  
								<div class="form-group form-focus">
									<input type="text" class="form-control floating" name="diagnosis">
									<label class="focus-label">Diagnosis</label>
								</div>
							</div>
								<div class="col-sm-6 col-md-3"> 
								<div class="form-group form-focus select-focus">
									<select class="select floating" name="records" >
										<option value="clinical_records_tb" >clinical_records_tb</option>
										<option value="elective_surgery_records_tb">elective_surgery_records_tb</option>
										<option value="emergency_surgery_records_tb">emergency_surgery_records_tb</option>
										<option value="unoperated_consult_records_tb">unoperated_consult_records_tb</option>
										<option value="ward_consult_records_tb">ward_consult_records_tb</option>
									</select>
									<label class="focus-label" >Records </label>
								</div>
							</div>-->
							<div class="col-sm-6 col-md-3">
								<button class="btn btn-success btn-block" type="submit" name="search_number" > Search</button>  
								<!-- <a href="#" class="btn btn-success btn-block"> Search </a>  -->
							</div>     
	                    </div>
                <!--</form>-->
					<!-- /Search Filter -->

						<?php

								if (isset($_POST['search_number'])) {
									
								//$hospitalnumber_var =  $_POST['search_hospital_number'];
								$hospitalnumber_var = mysqli_real_escape_string($db, $_POST['search_hospital_number']);
								$query = "SELECT * FROM elective_surgery_records_tb WHERE hosp_number = '$hospitalnumber_var' ";
								$query_run = mysqli_query($db, $query);
								while ($row = mysqli_fetch_array($query_run)) {
								
						?>	

								<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title mb-0">Patient details</h4>
								</div>
								<div class="card-body">
									<form action="emergency_surgery.php" method="post">
										<div class="form-group">
											<label>Hospital Number</label>
											<input type="text" class="form-control" placeholder="" name="hospitalnumber" value="<?php echo $row['hosp_number'] ?>"/>
										</div>
										<div class="form-group">
											<label>Date of 1st Presentation </label>
											<input type="date" class="form-control" name="datepre" value="<?php echo $row['date_of_presentation'] ?>"/>
										</div>
										<div class="form-group">
											<label>First Name</label>
											<input type="text" class="form-control" placeholder="" name="firstname" value="<?php echo $row['firstname'] ?>"/>
										</div>
										<div class="form-group">
											<label>Last Name</label>
											<input type="text" class="form-control" placeholder="" name="lastname" value="<?php echo $row['lastname'] ?>"/>
										</div>
										<div class="form-group">
											<label>Hospital Number</label>
											<input type="text" class="form-control" placeholder="" name="hospitalnumber" value="<?php echo $row['hosp_number'] ?>"/>
										</div>
										<div class="form-group">
											<label>Age</label>
											<input type="text" class="form-control" placeholder="" name="age" value="<?php echo $row['age']?>"/>
										</div>
										<div class="form-group">
											<label>Gender</label>	
											<input type="text" class="form-control" placeholder="" name="gender" value="<?php echo $row['gender']?>"/>
										</div>
										<div class="form-group">
											<label>HPC</label>
											<textarea type="text" class="form-control" placeholder="" name="hpc"  value="" > <?php echo $row['hpc'] ?> </textarea>
										</div>
										<div class="form-group">
											<label>PHY.EXAM</label>
											<input type="text" class="form-control" placeholder="" name="phy_exam" value="<?php echo $row['phy_exam']?>">
										</div>
										<div class="form-group">
											<label>INV</label>
											<input type="text" class="form-control" placeholder="" name="inv" value="<?php echo $row['inv']?>">
										</div>
										<div class="form-group">
											<label>Diagnosis</label>
											<input type="text" class="form-control" placeholder="" name="diagnosis" value="<?php echo $row['diagnosis']?>">
										</div>
										
										<div class="form-group">
											<label>Diagnosis (others)</label>
											<input type="text" class="form-control" placeholder="" name="diagnosis_two" value="<?php echo $row['diagnosis_two']?>">
										</div>
										<div class="form-group">
											<label>Pre-Op MGT Summary</label>
											<textarea type="text" class="form-control" placeholder="" name="pre-op" value=""><?php echo $row['pre_op_mgt_summary']?></textarea>
										</div>
										<div class="form-group">
											<label>Surgery Performed</label>
											<input type="text" class="form-control" placeholder="" name="surgeryperformed" value="<?php echo $row['surgery_performed']?>"/>
										</div>
										<div class="form-group">
											<label>Date of Surgery</label>
											<input type="date" class="form-control" placeholder="" name="dateofsurgery" value="<?php echo $row['date_of_surgery']?>">
										</div>
										<div class="form-group">
											<label>Reason for delay. If any, WHO 3 delay framework</label>
											<textarea type="text" class="form-control" placeholder="" name=" reasonfordelay" value=""><?php echo $row['reason_for_delay']?> </textarea>
										</div>
										<div class="form-group">
											<label>Intra Operative Findings</label>
												<textarea type="text" class="form-control" placeholder="" name="intraop" value="<?php echo $row['intra-op']?>"> <?php echo $row['intra_op']?> </textarea>
										</div>
										<div class="form-group">
											<label>Post Op Summary 1</label>
												<textarea type="text" class="form-control" placeholder="" name="postopsummary1" value=""> <?php echo $row['post_op_summary1']?> </textarea>
										</div>
										<div class="form-group">
											<label>Post Op Summary 2</label>
												<textarea type="text" class="form-control" placeholder="" name="postopsummary2" value="<?php echo $row['post_op_summary2']?>"> <?php echo $row['post_op_summary2']?> </textarea>
										</div>
										<div class="form-group">
											<label>Post Op Summary 3</label>
												<textarea type="text" class="form-control" placeholder="" name="postopsummary3" value="<?php echo $row['post_op_summary3']?>"> <?php echo $row['post_op_summary3']?> </textarea>
										</div>
										<div class="form-group">
											<label>Complication</label>
												<textarea type="text" class="form-control" placeholder="" name="complication" value="<?php echo $row['complication']?>"> <?php echo $row['complication']?> </textarea>
										</div>
										<div class="form-group">
											<label>Outcomes</label>
												<textarea type="text" class="form-control" placeholder="" name="outcomes" value="<?php echo $row['outcomes']?>"> <?php echo $row['outcomes']?> </textarea>
										</div>
										<div class="form-group">
											<label>Date of Discharge</label>
											<input type="date" class="form-control" name="dateofdischarge" value="<?php echo $row['date_of_discharge']?>"/>
										</div>
										<div class="form-group">
											<label>Surgeon/Assistant</label>
											<input type="text" class="form-control" name="surgeon" value="<?php echo $row['surgeon']?>"/>
										</div>
										<div class="form-group">
											<label>Date of Surgery 2</label>
											<input type="date" class="form-control" name="dateofsurgery2" value="<?php echo $row['date_of_surgery2']?>"/>
										</div>
										<div class="form-group">
											<label>Date of Discharge 2</label>
											<input type="date" class="form-control" name="dateofdischarge2" value="<?php echo $row['date_of_discharge2']?>"/>
										</div>
										<div class="form-group">
											<label>Length of Hospital Stay</label>
											<input type="text" class="form-control"  name="lengthhospitalstay" value="<?php echo $row['length_hospital_stay']?>"/>
										</div>
										<div class="form-group">
											<label>Cost of Surgery</label>
											<input type="text" class="form-control"  name="costofsurgery" value="<?php echo $row['cost_of_surgery']?>">
										</div>
										<div class="form-group">
											<label>Total Cost of Care (NGN)</label>
											<input type="text" class="form-control" name="totalcostofcare" value="<?php echo $row['total_cost_of_care']?>">
										</div>
										<div class="form-group">
											<label>Education</label>
											<input type="text" class="form-control" placeholder="" name="education" value="<?php echo $row['education']?>">
										</div>
										<div class="form-group">
											<label>Father's Occupation</label>
											<input type="text" class="form-control" placeholder="" name="fathermonoccup" value="<?php echo $row['father_occupation']?>">
										</div>
										<div class="form-group">
											<label>Mother's Occupation</label>
											<input type="text" class="form-control" placeholder="" name="mothermonoccup" value="<?php echo $row['mother_occupation']?>">
										</div>
										<div class="form-group">
											<label>Father's Monthly Income (NGN)</label>
											<input type="number" class="form-control" name="fathermonthlyincome" value="<?php echo $row['father_monthly_income']?>">
										</div>
										<div class="form-group">
											<label>Mother's Monthly Income (NGN)</label>
											<input type="number" class="form-control" placeholder="" name="mothermonthlyincome" value="<?php echo $row['mother_monthly_income']?>">
										</div>
										<div class="form-group">
											<label>Monthly Household Expenditure on Subsistence needs</label>
											<input type="text" class="form-control" placeholder="" name="monthlyexpenditure" value="<?php echo $row['monthly_expenditure']?>">
										</div>
										<div class="form-group">
											<label>Monthly Income Left After Subsistence Needs Met</label>
											<input type="number" class="form-control" name="monthlyincomeleft" value="<?php echo $row['monthly_income_left']?>">
										</div>
										<div class="form-group">
											<label>Source of fund for Current Health Expenditure </label>
											<input type="textarea" class="form-control" name="sourceoffund" value="<?php echo $row['source_current_health_expenditure']?>">
										</div>
										<div class="form-group">
											<label>File Input</label>
											<input class="form-control" type="file" name="file">
										</div>
										<div class="text-center">
											<button type="submit" class="btn btn-primary" name="update_elective">Update</button>
										</div>										
									</form>
								</div>
							</div>
						</div>
					</div>


						<?php


							}

						}

						if (isset($_POST['update_elective'])) {

								$datepre_var = mysqli_real_escape_string($db, $_POST['datepre']);
								$firstname_var = mysqli_real_escape_string($db, $_POST['firstname']);
								$lastname_var = mysqli_real_escape_string($db, $_POST['lastname']);
								$hospitalnumber_var = mysqli_real_escape_string($db, $_POST['hospitalnumber']);
								$age_var = mysqli_real_escape_string($db, $_POST['age']);
								$gender_var = mysqli_real_escape_string($db, $_POST['gender']); 
								$hpc_var = mysqli_real_escape_string($db, $_POST['hpc']);
								$phy_var = mysqli_real_escape_string($db, $_POST['phy_exam']);
								$inv_var = mysqli_real_escape_string($db, $_POST['inv']);
								$diagnosis_var = mysqli_real_escape_string($db, $_POST['diagnosis']);
								$diagnosis_two_var = mysqli_real_escape_string($db, $_POST['diagnosis_two']);
								$preop_var = mysqli_real_escape_string($db, $_POST['pre-op']);
								$surgeryperformed_var = mysqli_real_escape_string($db, $_POST['surgeryperformed']);
								$dateofsurgery_var = mysqli_real_escape_string($db, $_POST['dateofsurgery']);
								$reasonfordelay_var = mysqli_real_escape_string($db, $_POST['reasonfordelay']);
								$intraop_var = mysqli_real_escape_string($db, $_POST['intraop']);
								$postopsummary1_var = mysqli_real_escape_string($db, $_POST['postopsummary1']);
								$postopsummary2_var = mysqli_real_escape_string($db, $_POST['postopsummary2']);
								$postopsummary3_var = mysqli_real_escape_string($db, $_POST['postopsummary3']);
								$complication_var = mysqli_real_escape_string($db, $_POST['complication']);
								$outcomes_var = mysqli_real_escape_string($db, $_POST['outcomes']);
								$dateofdischarge_var = mysqli_real_escape_string($db, $_POST['dateofdischarge']);
								$surgeon_var = mysqli_real_escape_string($db, $_POST['surgeon']);
								$dateofsurgery2_var = mysqli_real_escape_string($db, $_POST['dateofsurgery2']);
								$dateofdischarge2_var = mysqli_real_escape_string($db, $_POST['dateofdischarge2']);
								$lengthHospitalstay_var = mysqli_real_escape_string($db, $_POST['lengthhospitalstay']);
								$costofsurgery_var = mysqli_real_escape_string($db, $_POST['costofsurgery']);
								$totalcostofcare_var = mysqli_real_escape_string($db, $_POST['totalcostofcare']);
								$education_var = mysqli_real_escape_string($db, $_POST['education']);
								$fatheroccupation_var = mysqli_real_escape_string($db, $_POST['fathermonoccup']);
								$motheroccupation_var = mysqli_real_escape_string($db, $_POST['mothermonoccup']);
								$fathermonthlyincome_var = mysqli_real_escape_string($db, $_POST['fathermonthlyincome']);
								$mothermonthlyincome_var = mysqli_real_escape_string($db, $_POST['mothermonthlyincome']);
								$monthlyexpenditure_var = mysqli_real_escape_string($db, $_POST['monthlyexpenditure']);
								$monthlyincomeleft_var = mysqli_real_escape_string($db, $_POST['monthlyincomeleft']);
								$sourcecurrenthealthexpenditure_var = mysqli_real_escape_string($db, $_POST['sourceoffund']);

							$query2 = "UPDATE elective_surgery_records_tb SET  date_of_presentation = '$datepre_var', firstname = '$firstname_var' , lastname = '$lastname_var', hosp_number = '$hospitalnumber_var', age = '$age_var' , gender = '$gender_var', hpc = '$hpc_var', phy_exam = '$phy_var', inv = '$inv_var', diagnosis ='$diagnosis_var', diagnosis_two =  '$diagnosis_two_var' , pre_op_mgt_summary = 'preop_var', surgery_performed = '$surgeryperformed_var', date_of_surgery = '$dateofsurgery2_var', reason_for_delay = '$reasonfordelay_var',  intra_op = '$intraop_var', post_op_summary1 = '$postopsummary1_var', post_op_summary2 = '$postopsummary2_var', post_op_summary3 = '$postopsummary3_var', complication = '$complication_var', outcomes = '$outcomes_var', date_of_discharge = '$dateofdischarge_var', surgeon = '$surgeon_var', date_of_surgery2 = '$dateofsurgery2_var', date_of_discharge2 = '$dateofdischarge2_var', length_hospital_stay = '$lengthHospitalstay_var', cost_of_surgery = '$costofsurgery_var', total_cost_of_care = '$totalcostofcare_var', education = '$education_var', father_occupation = '$fatheroccupation_var', mother_occupation = '$motheroccupation_var', father_monthly_income = '$fathermonthlyincome_var' , mother_monthly_income = '$mothermonthlyincome_var', monthly_expenditure= '$monthlyexpenditure_var' , monthly_income_left = '$monthlyincomeleft_var', 	source_current_health_expenditure = '$sourcecurrenthealthexpenditure_var' WHERE hosp_number = '$hospitalnumber_var' " ;
								
								$query_run2 =mysqli_query($db, $query2);

							if($query_run2) {
								echo '<script type="text/javascript"> alert("Elective Record Updated")</script>';
							}else
								{
									echo '<script type="text/javascript"> alert("Elective Record Not Updated")</script>';
								}

						}	
							



						?>
					
					
				
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
</html>