<?php include('server.php');



//$records_var = mysqli_real_escape_string($db, $_['records']);
	/*if(isset($_GET['hosp_number'] ) ) {

	$query_clinical = ("SELECT * FROM  clinical_records_tb")  or die("could not search");
	$result_clinical = mysqli_query($db, $query_clinical);
	$queryResult = mysqli_num_rows($result_clinical);
	$row_clinical = mysqli_fetch_assoc($result_clinical);
	$hospitalnumber_var = $_GET['hosp_number'];
	$hospitalnumber_clinical_var = $row_clinical["hosp_number"];
	$checker_clinical_var = $row_clinical["checker"];
	if ($queryResult>0 && $hospitalnumber_var=$hospitalnumber_clinical_var && checker == $checker){	
	//$idrow_clinical_id = $row_clinical["id"];
	//$thirdvisit_var = mysqli_real_escape_string($db, $_GET['records']);
	$query_delete = ("DELETE FROM clinical_records_tb WHERE hosp_number = '$hospitalnumber_var' ")  or die("could not search");
	$result_delete = mysqli_query($db, $query_delete); 
								 
		}

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
        <title>Patient-records</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
		
		<!-- Datatable CSS -->
		<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/css/select2.min.css">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		
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
                    <a href="index.php" class="logo">
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
					<h3>e-Health-PSU-LUTH</h3>
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
							<form action="">
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
						</div>
					</li>-->
					<!-- /Message Notifications -->

					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img src="assets/img/profiles/vatar-21.jpg" alt="">
							<span class="status online"></span></span>
							<span>Settings</span>
						</a>
						<div class="dropdown-menu">
							<!--<a class="dropdown-item" href="#">My Profile</a>
							<a class="dropdown-item" href="#">Settings</a>-->
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
						<a class="dropdown-item" href="change-password.php" target="_blank">Change Password</a>
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
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Patient Records</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Search</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Search Filter -->
					<form action="patient-records.php" method="post">
						<div class="row filter-row">
							<div class="col-sm-6 col-md-3">  
								<div class="form-group form-focus">
									<input type="text" class="form-control floating" name="name">
									<label class="focus-label">First Name or Hospital Number</label>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">  
								<div class="form-group form-focus">
									<input type="text" class="form-control floating" name="diagnosis">
									<label class="focus-label">Diagnosis</label>
								</div>
							</div>
							<div class="col-sm-6 col-md-3"> 
								<div class="form-group form-focus select-focus">
									<select class="select floating" name="records" >
										<!--<option ></option>-->
										<option value="clinical_records_tb" >clinical_records_tb</option>
										<option value="elective_surgery_records_tb">elective_surgery_records_tb</option>
										<option value="emergency_surgery_records_tb">emergency_surgery_records_tb</option>
										<option value="unoperated_consult_records_tb">unoperated_consult_records_tb</option>
										<option value="ward_consult_records_tb">ward_consult_records_tb</option>
									</select>
									<label class="focus-label" >Select record</label>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<button class="btn btn-success btn-block" type="submit" name="search-button"> Search</button>  
								<!-- <a href="#" class="btn btn-success btn-block"> Search </a>  -->
							</div>     
	                    </div>
                </form>
					<!-- /Search Filter -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table datatable">
									<thead>
										<tr>
											<th>S/N</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Hospital Number</th>
											<th>Age</th>
											<th>Diagnosis</th>
											<th>Diagnosis(others)</th>
											<th>Gender</th>
											<th>View</th>
											<th>Edit</th>
											<th>Delete</th>
											<!--<th class="text-right">Action</th>-->
										</tr>
									</thead>
									<tbody>
										<!--<tr>
											<td>
												<h2 class="table-avatar">
													<a href="profile.html" class="avatar"><img src="assets/img/profiles/avatar-21.jpg" alt=""></a>
													<a href="profile.html">Daniel Porter <span>Admin</span></a>
												</h2>
											</td>
											<td>danielporter@example.com</td>
											<td>Dreamguy's Technologies</td>
											<td>1 Jan 2013</td>
											<td>
												<span class="badge bg-inverse-danger">Admin</span>
											</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_user"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_user"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td> firstname LIKE '%$name_var%' AND  diagnosis LIKE '%$diagnosis_var%' AND
										</tr>-->

											<?php
										
											$name_var = "";
											$diagnosis_var = "";
											$counter_var = 1;

											if(isset($_POST['search-button'])){

											$records_var = mysqli_real_escape_string($db, $_POST['records']);
											$name_var = mysqli_real_escape_string($db, $_POST['name']);
											$diagnosis_var = mysqli_real_escape_string($db, $_POST['diagnosis']);
											$query = ("SELECT * FROM  $records_var WHERE ( firstname = '$%name_var%') OR (hosp_number = '%$name_var%') OR (diagnosis_two LIKE '%$diagnosis_var%' OR diagnosis LIKE '%$diagnosis_var%')")  or die("could not search");
											$result = mysqli_query($db, $query);
											$queryResult = mysqli_num_rows($result);
											echo"<b style = 'color:red'; >" .$queryResult; echo"</b>"; echo" results found for"; echo" <b style = 'color:orange'; >" .$name_var; echo"</b>"; echo" or "; echo"<b style = 'color: orange';>" .$diagnosis_var; echo"</b>"; echo" from "; echo "<b style = 'color:orange';> " .$records_var; echo "</b>";

														
														$counter_var = 1;
														if ($queryResult > 0 ) {
														while($row = mysqli_fetch_assoc($result)){
															if ($records_var == "clinical_records_tb") {
															$idrow_clinical = $row["hosp_number"];
															$idrow_clinical_id = $row["id"];
															$rowlink_clinical = 'view_clinical_record.php?hosp_number='.$idrow_clinical;
															$rowlink_clinical_update = 'update_clinical.php?hosp_number='.$idrow_clinical;
															$rowlink_clinical_delete = 'delete_clinical_record.php?hosp_number='.$idrow_clinical;
															$rowlink_patient_clinical = 'patient-records.php?hosp_number='.$idrow_clinical;
															$rowlink_button = 'delete_clinical';
															echo "<tr>";
															echo "<td>"; echo $counter_var; echo"</td>";
															echo "<td>"; echo $row["firstname"]; echo"</td>";
															echo "<td>"; echo $row["lastname"]; echo"</td>";
															echo "<td>"; echo "<a href='' style='color:black' name ='hosp-number'>"; echo $row["hosp_number"]; echo"</a>"; echo"</td>";
															echo "<td>"; echo $row["age"]; echo"</td>";
															echo "<td>"; echo $row["diagnosis"]; echo"</td>";
															echo "<td>"; echo $row["diagnosis_two"]; echo"</td>";
															echo "<td>"; echo $row["gender"]; echo"</td>";
															echo "<td>"; echo "<a href='".$rowlink_clinical."'><input type='submit' name = 'view' value='View' style=' border-style:dashed; color:green; border-width:1px;'></a>"; echo"</td>";
															echo "<td>"; echo "<a href='".$rowlink_clinical_update."'><input type='submit' name = 'edit' value='Edit' style=' border-style:dashed; color:orange; border-width:1px;'></a>"; echo"</td>";
															echo "<td>"; echo "<a href='".$rowlink_clinical_delete."'><input type='submit' name = 'delete_clinical' value='Delete' style=' border-style:dashed; color:red; border-width:1px; :hover:{background:red};'></a>"; echo"</td>";
															echo "</tr>";														
							
														$counter_var++;
														}
														elseif ($records_var == "elective_surgery_records_tb") {
															$idrow_elective = $row["hosp_number"];
															$idrow_elective_id = $row["id"];
															$rowlink_elective = 'view_elective_surgery.php?hosp_number='.$idrow_elective;
															$rowlink_eletive_update = 'update_elective.php?hosp_number='.$idrow_elective;
															$rowlink_elective_delete = 'delete_elective_record.php?hosp_number='.$idrow_elective;
															$rowlink_patient_elective = 'patient-records.php?hosp_number='.$idrow_elective;
															echo "<tr>";
															echo "<td>"; echo $counter_var; echo"</td>";
															echo "<td>"; echo $row["firstname"]; echo"</td>";
															echo "<td>"; echo $row["lastname"]; echo"</td>";
															echo "<td>"; echo "<a href='' style='color:black' name ='hosp-number'>"; echo $row["hosp_number"]; echo"</a>"; echo"</td>";
															echo "<td>"; echo $row["age"]; echo"</td>";
															echo "<td>"; echo $row["diagnosis"]; echo"</td>";
															echo "<td>"; echo $row["diagnosis_two"]; echo"</td>";
															echo "<td>"; echo $row["gender"]; echo"</td>";
															echo "<td>"; echo "<a href='".$rowlink_elective."'><input type='submit' name = 'view' value='View' style=' border-style:dashed; color:green; border-width:1px;'></a>"; echo"</td>";
															echo "<td>"; echo "<a href='".$rowlink_eletive_update."'><input type='submit' name = 'edit' value='edit' style=' border-style:dashed; color:orange; border-width:1px;'></a>"; echo"</td>";
															echo "<td>"; echo "<a href='".$rowlink_elective_delete."'><input type='submit' name = '' value='Delete' style=' border-style:dashed; color:red; border-width:1px;'></a>"; echo"</td>";
															echo "</tr>";														
							
														$counter_var++;

													}
													elseif ($records_var == "emergency_surgery_records_tb") {
															$idrow_emergency= $row["hosp_number"];
															$rowlink_emergency = 'view_emergency_surgery.php?hosp_number='.$idrow_emergency;
															$rowlink_emergency_update = 'update_emergency.php?hosp_number='.$idrow_emergency;
															$rowlink_emergency_delete = 'delete_emergency_record.php?hosp_number='.$idrow_emergency;
															$rowlink_patient_emergency = 'patient-records.php?hosp_number='.$idrow_emergency;
															echo "<tr>";
															echo "<td>"; echo $counter_var; echo"</td>";
															echo "<td>"; echo $row["firstname"]; echo"</td>";
															echo "<td>"; echo $row["lastname"]; echo"</td>";
															echo "<td>"; echo "<a href='' style='color:black' name ='hosp-number'>"; echo $row["hosp_number"]; echo"</a>"; echo"</td>";
															echo "<td>"; echo $row["age"]; echo"</td>";
															echo "<td>"; echo $row["diagnosis"]; echo"</td>";
															echo "<td>"; echo $row["diagnosis_two"]; echo"</td>";
															echo "<td>"; echo $row["gender"]; echo"</td>";
															echo "<td>"; echo "<a href='".$rowlink_emergency."'><input type='submit' name = 'view' value='View' style=' border-style:dashed; color:green; border-width:1px;'></a>"; echo"</td>";
															echo "<td>"; echo "<a href='".$rowlink_emergency_update."'><input type='submit' name = 'edit_emergency' value='edit' style=' border-style:dashed; color:orange; border-width:1px;'></a>"; echo"</td>";
															echo "<td>"; echo "<a href='".$rowlink_emergency_delete."'><input type='submit' name = 'delete_emergency' value='Delete' style=' border-style:dashed; color:red; border-width:1px;'></a>"; echo"</td>";
															echo "</tr>";														
							
														$counter_var++;

													}
													elseif ($records_var == "unoperated_consult_records_tb") {
															$idrow_unoperated = $row["hosp_number"];
															$rowlink_unoperated = 'view_unoperated_consult.php?hosp_number='.$idrow_unoperated;
															$rowlink_unoperated_update = 'update_unoperated.php?hosp_number='.$idrow_unoperated;
															$rowlink_unoperated_delete = 'delete_unoperated.php?hosp_number='.$idrow_unoperated;
															echo "<tr>";
															echo "<td>"; echo $counter_var; echo"</td>";
															echo "<td>"; echo $row["firstname"]; echo"</td>";
															echo "<td>"; echo $row["lastname"]; echo"</td>";
															echo "<td>"; echo "<a href='' style='color:black' name ='hosp-number'>"; echo $row["hosp_number"]; echo"</a>"; echo"</td>";
															echo "<td>"; echo $row["age"]; echo"</td>";
															echo "<td>"; echo $row["diagnosis"]; echo"</td>";
															echo "<td>"; echo $row["diagnosis_two"]; echo"</td>";
															echo "<td>"; echo $row["gender"]; echo"</td>";
															echo "<td>"; echo "<a href='".$rowlink_unoperated."'><input type='submit' name = 'view' value='View' style=' border-style:dashed; color:green; border-width:1px;'></a>"; echo"</td>";
															echo "<td>"; echo "<a href='".$rowlink_unoperated_update."'><input type='submit' name = 'view' value='Edit' style=' border-style:dashed; color:orange; border-width:1px;'></a>"; echo"</td>";
															echo "<td>"; echo "<a href='".$rowlink_unoperated_delete."'><input type='submit' name = 'view' value='Delete' style=' border-style:dashed; color:red; border-width:1px;'></a>"; echo"</td>";
															echo "</tr>";														
														$counter_var++;

													}
													elseif ($records_var == "ward_consult_records_tb") {
															$idrow_Wardconsult = $row["hosp_number"];
															$rowlink_Wardconsult = 'view_ward_consult.php?hosp_number='.$idrow_Wardconsult;
															$rowlink_Wardconsult_update = 'update_wardconsult.php?hosp_number='.$idrow_Wardconsult;
															$rowlink_Wardconsult_delete = 'delete_wardconsult.php?hosp_number='.$idrow_Wardconsult;
															echo "<tr>";
															echo "<td>"; echo $counter_var; echo"</td>";
															echo "<td>"; echo $row["firstname"]; echo"</td>";
															echo "<td>"; echo $row["lastname"]; echo"</td>";
															echo "<td>"; echo "<a href='' style='color:black' name ='hosp-number'>"; echo $row["hosp_number"]; echo"</a>"; echo"</td>";
															echo "<td>"; echo $row["age"]; echo"</td>";
															echo "<td>"; echo $row["diagnosis"]; echo"</td>";
															echo "<td>"; echo $row["diagnosis_two"]; echo"</td>";
															echo "<td>"; echo $row["gender"]; echo"</td>";
															echo "<td>"; echo "<a href='".$rowlink_Wardconsult."'><input type='submit' name = 'view' value='View' style=' border-style:dashed; color:green; border-width:1px;'></a>"; echo"</td>";
															echo "<td>"; echo "<a href='".$rowlink_Wardconsult_update."'><input type='submit' name = 'view' value='Edit' style=' border-style:dashed; color:orange; border-width:1px;'></a>"; echo"</td>";
															echo "<td>"; echo "<a href='".$rowlink_Wardconsult_delete."'><input type='submit' name = 'view' value='Delete' style=' border-style:dashed; color:red; border-width:1px;'></a>"; echo"</td>";
															echo "</tr>";														
							
														$counter_var++;

													}
												}
											}



												

										}

											?>
										
												<!--echo "<td>"; echo $row["date_time_of_surgery"]; echo"</td>";-->
									</tbody>
								</table>

							</div>
						</div>
					</div>



									
                </div>
				<!-- /Page Content -->
				
				
				
				
				
			
				
            </div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Datatable JS -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/dataTables.bootstrap4.min.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>

</html>