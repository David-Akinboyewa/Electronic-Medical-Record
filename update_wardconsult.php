<?php include("server.php"); ?>


<!DOCTYPE html>
<html lang="en">
    

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="eHEALTH-PSU">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="eHEALTH-PSU">
        <meta name="robots" content="noindex, nofollow">
        <title>Update Ward Consult</title>
		
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
							<span class="user-img"><img src="assets/img/profiles/atar-21.jpg" alt="">
							<span class="status online"></span></span>
							<span>Settings</span>
						</a>
						<div class="dropdown-menu">
						
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
								<a href="dashboard.php"><i class="la la-dashboard"></i> <span> Dashboard</span>
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
								<h3 class="page-title">Update Ward Consult</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Update Ward Consult</li><li class="breadcrumb-item active"><a href="ward_consult.php"  style="color:red;">Back</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<!-- Search Filter -->
					<form action="update_wardconsult.php" method="post">
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
								$query = "SELECT * FROM ward_consult_records_tb WHERE hosp_number = '$hospitalnumber_var' ";
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
									<form action="update_wardconsult.php" method="post">
										<div class="form-group">
											<label>Hospital Number</label>
											<input type="number" class="form-control" placeholder="" name="hosp_number" value="<?php echo $row['hosp_number'] ?>"/>
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
											<label>Address</label>
											<textarea type="text" class="form-control" placeholder="" name="address" value="<?php echo $row['address'] ?>"><?php echo $row['address'] ?> </textarea>
										</div>
										<div class="form-group">
											<label>Phone Number</label>
											<input type="number" class="form-control" placeholder="" name="phonenumber" value="<?php echo $row['phonenumber']?>"/>
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
											<label>Source of Referral </label>
											<input type="text" class="form-control" placeholder="" name="sourceofreferral" value="<?php echo $row['source_of_referral']?>"/>
										</div>
										<div class="form-group">
											<label>Presenting Compliant</label>
											<textarea type="text" class="form-control" placeholder="" name="presentingcompliant" value="<?php echo $row['presenting_compliant'] ?>"><?php echo $row['presenting_compliant'] ?> </textarea>
										</div>
										<div class="form-group">
											<label>HPC Summary</label>
											<input type="text" class="form-control" placeholder="" name="hpc" value="<?php echo $row['hpc']?>">
										</div>
										<div class="form-group">
											<label>Examination</label>
											<input type="text" class="form-control" placeholder="" name="examination" value="<?php echo $row['examination']?>">
										</div>
										<div class="form-group">
											<label>Diagnosis</label>
											<input type="text" class="form-control" placeholder="" name="diagnosis" value="<?php echo $row['diagnosis']?>">
										</div>
										<div class="form-group">
											<label>Diagnosis (Others)</label>
											<input type="text" class="form-control" placeholder="" name="diagnosis_two" value="<?php echo $row['diagnosis_two']?>">
										</div>
										<div class="form-group">
											<label>Available Investigations</label>
											<textarea type="text" class="form-control" placeholder="" name="availableinvestigations" value="<?php echo $row['available_investigations'] ?>"><?php echo $row['available_investigations'] ?> </textarea>
										</div>
										<div class="form-group">
											<label>Requested </label>
											<input type="text" class="form-control" placeholder="" name="requested" value="<?php echo $row['requested']?>">
										</div>
										<div class="form-group">
											<label>Paln</label>
											<input type="text" class="form-control" placeholder="" name="plan" value="<?php echo $row['plan']?>"/>
										</div>
										<div class="form-group">
											<label>2<sup>nd</sup> Review</label>
												<textarea type="text" class="form-control" placeholder="" name="secondreview" value="<?php echo $row['second_review']?>"> <?php echo $row['second_review']?> </textarea>
										</div>
										<div class="form-group">
											<label>3<sup>rd</sup> Review</label>
												<textarea type="text" class="form-control" placeholder="" name="thirdreview" value="<?php echo $row['third_review']?>"> <?php echo $row['third_review']?> </textarea>
										</div>
										<div class="form-group">
											<label>File Input</label>
											<input class="form-control" type="file" name="file">
										</div>
										<div class="text-center">
											<button type="submit" class="btn btn-primary" name="update_wardconsult">Update</button>
										</div>										
									</form>
								</div>
							</div>
						</div>
					</div>

						<?php


							}

						}

						if (isset($_POST['update_wardconsult'])) {
								$datepre_var = mysqli_real_escape_string($db, $_POST['datepre']);
								$firstname_var = mysqli_real_escape_string($db, $_POST['firstname']);
								$lastname_var = mysqli_real_escape_string($db, $_POST['lastname']);
								$hospitalnumber_var = mysqli_real_escape_string($db, $_POST['hospitalnumber']); 
								$address_var = mysqli_real_escape_string($db, $_POST['address']);
								$phonenumber_var = mysqli_real_escape_string($db, $_POST['phonenumber']);
								$age_var = mysqli_real_escape_string($db, $_POST['age']);
								$gender_var = mysqli_real_escape_string($db, $_POST['gender']);
								$sourceofreferral_var = mysqli_real_escape_string($db, $_POST['sourceofreferral']);
								$presentingcompliant_var = mysqli_real_escape_string($db, $_POST['presentingcompliant']);
								$hpc_var = mysqli_real_escape_string($db, $_POST['hpc']);
								$examination_var = mysqli_real_escape_string($db, $_POST['examination']);
								$diagnosis_var = mysqli_real_escape_string($db, $_POST['diagnosis']);
								$diagnosis_two_var = mysqli_real_escape_string($db, $_POST['diagnosis_two']);
								$availableinvestigations_var = mysqli_real_escape_string($db, $_POST['availableinvestigations']);
								$requested_var = mysqli_real_escape_string($db, $_POST['requested']);
								$plan_var = mysqli_real_escape_string($db, $_POST['plan']);
								$secondreview_var = mysqli_real_escape_string($db, $_POST['secondreview']);
								$thirdreview_var = mysqli_real_escape_string($db, $_POST['thirdreview']);
								

							$query2 = "UPDATE ward_consult_records_tb SET  date_of_presentation = '$datepre_var', firstname = '$firstname_var' , lastname = '$lastname_var', hosp_number = '$hospitalnumber_var', address = '$address_var', phonenumber = '$phonenumber_var', age = '$age_var' , gender = '$gender_var', source_of_referral = '$sourceofreferral_var', presenting_compliant ='$presentingcompliant_var' , hpc ='$hpc_var' , examination = '$examination_var', diagnosis ='$diagnosis_var', diagnosis_two =  '$diagnosis_two_var' , available_investigations = '$availableinvestigations_var', requested = '$requested_var', plan = '$plan_var', second_review = '$secondreview_var', third_review = '$thirdreview_var' WHERE hosp_number = '$hospitalnumber_var' " ;
							$query_run2 =mysqli_query($db, $query2);



							if($query_run2) {
								echo '<script type="text/javascript"> alert("Ward Consult Updated")</script>';
							}else
								{
									echo '<script type="text/javascript"> alert("Ward Consult Not Updated")</script>';
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