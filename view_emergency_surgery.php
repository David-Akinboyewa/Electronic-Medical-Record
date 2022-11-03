<?php include("server.php"); 

		$hospitalnumber_var = $_GET['hosp_number'];
		$query = ("SELECT * FROM   emergency_surgery_records_tb WHERE hosp_number = $hospitalnumber_var" ) or die("could not search");
		$result = mysqli_query($db, $query);
		$queryResult = mysqli_num_rows($result);
		while($row = mysqli_fetch_assoc($result)){
			$datepre_var = $row['date_of_presentation'];
			$firstname_var = $row['firstname'];
			$lastname_var = $row['lastname'];
			$hospitalnumber_var = $row['hosp_number'];
			$age_var = $row['age'];
			$gender_var =$row['gender'];
			$pc_var = $row['pc'];
			$hx_var =$row['hx']; 
			$hpc_var = $row['hpc'];
			$phy_var = $row['phy'];
			$available_var =$row['available_ix'];
			$diagnosis_var = $row['diagnosis'];
			$diagnosis_two_var = $row['diagnosis_two'];
			$requested_ix_var = $row['requested_ix'];
			$plan_var = $row['plan'];
			$er_care_summary_var = $row['er_care_summary'];
			$surgery_performed_var = $row['surgery_performed'];
			$intraop_var = $row['intraop'];
			$date_surgery_var =$row['date_surgery'];
			$time_of_surgery_var =$row['time_of_surgery'];
			$reason_for_delay_var = $row['reason_for_delay'];
			$admissionsummary_1_var = $row['admission_summary_1'];
			$admissionsummary_2_var = $row['admission_summary_2'];
			$admissionsummary_3_var = $row['admission_summary_3'];
			$complication_var = $row['complications'];
			$outcomes_var = $row['outcome'];
			$dateofdischarge_var = $row['date_of_discharge'];
			$length_hospital_stay_var =$row['length_hospital_stay'];
			$surgeon_var =$row['surgeon'];
			$dateofsurgery2_var = $row['date_of_surgery'];
			$totalcostofcare_var = $row['total_cost_of_care'];
			$costofsurgery_var = $row['cost_of_surgery'];
			$education_var = $row['education'];
			$fathermonthlyoccupation_var =$row['fatheroccup'];
			$mothermonthlyoccupation_var = $row['motheroccup'];
			$fathermonthlyincome_var = $row['father_monthly_income'];
			$mothermonthlyincome_var = $row['mother_monthly_income'];
			$monthlyexpenditure_var = $row['monthly_household_expenditure'];
			$monthlyincomeleft_var = $row['monthly_income_left'];
			$sourcecurrenthealthexpenditure_var = $row['source_of_fund'];	


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
        <title>emergency surgery</title>
		
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
								<h3 class="page-title">Emergency Surgery Record</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Emergency Surgery Record</li><li class="breadcrumb-item active">Individual Record</li><li class="breadcrumb-item active"><a href="Patient-records.php"  style="color:red;">Back</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title mb-0">Patient details</h4>
								</div>
								<div class="card-body">
									<form action="emergency_surgery.php" method="post">
										<div class="form-group">
											<label>(1.) Date of 1st Presentation : </label>&nbsp;&nbsp; <?php echo $datepre_var; ?>
										</div>
										<div class="form-group">
											<label>(2) First Name : </label>&nbsp;&nbsp; <?php echo $firstname_var; ?>
										</div>
										<div class="form-group">
											<label>(3.) Last Name : </label>&nbsp;&nbsp; <?php echo $lastname_var; ?>
										</div>
										<div class="form-group">
											<label>((4.) Hospital Number : </label>&nbsp;&nbsp;<?php echo $hospitalnumber_var; ?>
										</div>
										<div class="form-group">
											<label>(5.) Age :  </label> &nbsp;&nbsp; <?php echo $age_var;?>
										</div>
										
										<div class="form-group">
											<label>(6.) Gender : </label>&nbsp;&nbsp;<?php echo $gender_var; ?>					
										</div>
										<div class="form-group">
											<label>(7.) PC : </label>&nbsp;&nbsp;<?php echo $pc_var; ?>
										</div>
										<div class="form-group">
											<label>(8.) HX Summary : </label> &nbsp;&nbsp;<?php echo $hx_var ; ?>
										</div>
										<div class="form-group">
											<label>(.9) PHY.Exam : </label>&nbsp;&nbsp;<?php echo $phy_var; ?>
										</div>
										<div class="form-group">
											<label>(10.) Available IX : </label>&nbsp;&nbsp;<?php echo $available_var; ?>
										</div>
										<div class="form-group">
											<label>(11.) Diagnosis : </label>&nbsp;&nbsp;<?php echo $diagnosis_var; ?>										
										</div>
										<div class="form-group">
											<label>(12.) Diagnosis (others) : </label>&nbsp;&nbsp;<?php echo $diagnosis_two_var; ?>
										</div>
										<div class="form-group">
											<label>(13.) Requested IX : </label>&nbsp;&nbsp;<?php echo $requested_ix_var; ?>
										</div>
										<div class="form-group">
											<label>(14.) Plan : </label>&nbsp;&nbsp;<?php echo $plan_var; ?>
										</div>
										<div class="form-group">
											<label>(15.) ER care Summary : </label>&nbsp;&nbsp;<?php echo $er_care_summary_var; ?>
										</div>
										<div class="form-group">
											<label>(16.) Surgery Performed : </label>&nbsp;&nbsp; <?php echo $surgery_performed_var; ?>
										</div>
										<div class="form-group">
											<label>(17.) IntraOperative Finindings : </label>&nbsp;&nbsp;<?php echo $intraop_var; ?>
										</div>										
										<div class="form-group">
											<label>(18.) Date of Surgery : </label>&nbsp;&nbsp;<?php echo $date_surgery_var ; ?>
										</div>
										<div class="form-group">
											<label>(19.)Time of Surgery : </label>&nbsp;&nbsp;<?php echo $time_of_surgery_var; ?>
										</div>
										<div class="form-group">
											<label>(20.) Reason for delay.If any. WHO 3 delay framework</label>&nbsp;&nbsp;<?php echo $reason_for_delay_var; ?>
										</div>
										<div class="form-group">
											<label>(21.) Admission Summary 1 : </label>&nbsp;&nbsp;<?php echo $admissionsummary_1_var; ?>
										</div>
										<div class="form-group">
											<label>(22.) Admission Summary 2 : </label>&nbsp;&nbsp;<?php echo $admissionsummary_2_var ; ?>
										</div>
										<div class="form-group">
											<label>(23.) Admisson Summary 3 : </label>&nbsp;&nbsp;<?php echo $admissionsummary_3_var ; ?>
										</div>
										<div class="form-group">
											<label>(24.) Complications : </label>&nbsp;&nbsp;<?php echo $complication_var; ?>
										</div>
										<div class="form-group">
											<label>(25.) Outcomes : </label>&nbsp;&nbsp;<?php echo $outcomes_var ; ?>
										</div>
										<div class="form-group">
											<label>(26.) Date of Discharge : </label>&nbsp;&nbsp;<?php echo $dateofdischarge_var; ?>
										</div>
										<div class="form-group">
											<label>(27.) Length of Hospital Stay : </label>&nbsp;&nbsp;<?php echo $length_hospital_stay_var; ?>
										</div>
										<div class="form-group">
											<label>(28.) Surgeon/Assistant : </label>&nbsp;&nbsp;<?php echo $surgeon_var; ?>
										</div>
										<div class="form-group">
											<label>(29.) Date of Surgery : </label>&nbsp;&nbsp;<?php echo $dateofdischarge_var; ?>
										</div>
										<div class="form-group">
											<label>(30.) Total Cost of Care : (NGN)</label>&nbsp;&nbsp;<?php echo $totalcostofcare_var; ?>
										</div>
										<div class="form-group">
											<label>(31.) Cost of Surgery : </label>&nbsp;&nbsp;<?php echo $costofsurgery_var; ?>
										</div>
										<div class="form-group">
											<label>(32.) Level of Education</label>&nbsp;&nbsp;<?php echo $education_var;?>									
										</div>
										<div class="form-group">
											<label>(33.) Father's Occupation : </label>&nbsp;&nbsp;<?php echo $fathermonthlyoccupation_var; ?>
										</div>
										<div class="form-group">
											<label>(34.) Mother's Occupation : </label> &nbsp;&nbsp;<?php echo $mothermonthlyoccupation_var; ?>
										</div>
										<div class="form-group">
											<label>(35.) Father's Monthly Income (NGN) : </label>&nbsp;&nbsp;<?php echo $fathermonthlyincome_var; ?>
										</div>
										<div class="form-group">
											<label>(36.) Mother's Monthly Income (NGN) : </label>&nbsp;&nbsp;<?php echo $mothermonthlyincome_var; ?>
										</div>
										<div class="form-group">
											<label>(37.) Monthly Household Expenditure on Subsistence needs : </label>&nbsp;&nbsp;<?php echo $monthlyexpenditure_var; ?>
										</div>
										<div class="form-group">
											<label>(38.) Monthly Income Left After Subsistence Needs Met : </label>&nbsp;&nbsp;<?php echo $monthlyincomeleft_var; ?>
										</div>
										<div class="form-group">
											<label>(39.) Source of fund for Current Health Expenditure : </label>&nbsp;&nbsp;<?php echo $sourcecurrenthealthexpenditure_var; ?>
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
</html>