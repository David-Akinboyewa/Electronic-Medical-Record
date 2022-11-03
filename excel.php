<?php include('server.php'); ?>




<?php 

$output_clinical = '';

/*
if (isset($_POST['export_clinical'])) 
{
	$sql = "SELECT * FROM  clinical_records_tb ORDER BY firstname ASC ";
	$result = mysqli_query($db, $sql);
	if (mysqli_num_rows($result) > 0) 
	{
		$output_clinical .='
			<table class="table" bordered="1">
			<tr>
				<th>Date of Presentation</th>
				<th>Hospital Number</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Address</th>
				<th>Phone Number</th>
				<th>Age</th>
				<th>Gender</th>
				<th>Source of Referral</th>
				<th>Presenting Compliant</th>
				<th>HPC</th>
				<th>Examination</th>
				<th>Diagnosis</th>
				<th>Diagnosis-Two</th>
				<th>Available Investigation</th>
				<th>Requested</th>
				<th>Plan</th>
				<th>Second Visit</th>
				<th>Third Visit</th>
			</tr>
		';
		WHILE($row=mysqli_fetch_array($result))
		{
			$output_clinical .='
			<tr>
				<td>'.$row["date_of_presentation"].'</td>
				<td>'.$row["hosp_number"].'</td> 
				<td>'.$row["firstname"].'</td>
				<td>'.$row["lastname"].'</td>
				<td>'.$row["address"].'</td> 
				<td>'.$row["phonenumber"].'</td>
				<td>'.$row["age"].'</td>
				<td>'.$row["gender"].'</td>
				<td>'.$row["source_of_referral"].'</td>
				<td>'.$row["presenting_compliant"].'</td> 
				<td>'.$row["hpc"].'</td>
				<td>'.$row["examination"].'</td>
				<td>'.$row["diagnosis"].'</td>
				<td>'.$row["diagnosis_two"].'</td>
				<td>'.$row["available_investigations"].'</td>
				<td>'.$row["requested"].'</td>
				<td>'.$row["plan"].'</td>
				<td>'.$row["secondvisit"].'</td>
				<td>'.$row["thirdvisit"].'</td>
			</tr>
			';
		}
		$output_clinical .='</table';

		header("Content-Type: application/octet-stream");
		//header("Content-Type: text/csv; charset=utf-8");
		header("Content-Disposition:attachment; filename=download.xls");
		//header("Content-Disposition:attachment; filename=download.csv");
		header("Pragma: no-cache");
		header("Expires: 0");
		echo $output_clinical;
	}
	
}



//ELECTIVE EXPORTING

	$output_elective = '';

if (isset($_POST['export_elective'])) 
{
	$sql = "SELECT * FROM  elective_surgery_records_tb ORDER BY firstname ASC ";
	$result = mysqli_query($db, $sql);
	if (mysqli_num_rows($result) > 0) 
	{
		$output_elective .='
			<table class="table" bordered="1">
			<tr>
				<th>Date of Presentation</th>
				<th>Hospital Number</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Age</th>
				<th>Gender</th>
				<th>Presenting Compliant</th>
				<th>HPC</th>
				<th>Physical Examination</th>
				<th>INV</th>
				<th>Diagnosis</th>
				<th>Diagnosis-Two</th>
				<th>Pre-Op MGT Summary</th>
				<th>Surgery Performed</th>
				<th>Date of Surgery</th>
				<th>Reason for delay.If any. WHO 3 Framework</th>
				<th>IntraOperative Findings</th>
				<th>Post Op summary 1</th>
				<th>Post Op summary 2</th>
				<th>Post Op summary 3/th>
				<th>Complication</th>
				<th>Outcomes</th>
				<th>Date of discharge</th>
				<th>Surgeon Assistant</th>
				<th>Date of Surgery</th>
				<th>Date of discharge< 2/th>
				<th>Lenght of Hospital Stay</th>
				<th>Cost of Surgery</th>
				<th>Total Cost of Care(NGN)</th>
				<th>Level of Education</th>
				<th>Father Occupation</th>
				<th>Mother Occupation</th>
				<th>Father Monthly income</th>
				<th>Mother Monthly incomeo</th>
				<th>Monthyl Household Expenditure on Subsistence Needs</th>
				<th>Monthly Income Left After Subsistence Needs Met</th>
				<th>Source of Fund for Current Health Expenditure</th>
			</tr>
		';
		WHILE($row=mysqli_fetch_array($result))
		{
			$output_elective .='
			<tr>
				<td>'.$row["date_of_presentation"].'</td>
				<td>'.$row["hosp_number"].'</td> 
				<td>'.$row["firstname"].'</td>
				<td>'.$row["lastname"].'</td>
				<td>'.$row["age"].'</td>
				<td>'.$row["gender"].'</td>
				<td>'.$row["pc"].'</td> 
				<td>'.$row["hpc"].'</td>
				<td>'.$row["phy_exam"].'</td>
				<td>'.$row["inv"].'</td>
				<td>'.$row["diagnosis"].'</td>
				<td>'.$row["diagnosis_two"].'</td>
				<td>'.$row["pre_op_mgt_summary"].'</td>
				<td>'.$row["surgery_performed"].'</td>
				<td>'.$row["date_of_surgery"].'</td>
				<td>'.$row["reason_for_delay"].'</td>
				<td>'.$row["intra-op"].'</td>
				<td>'.$row["post_op_summary1"].'</td>
				<td>'.$row["post_op_summary2"].'</td>
				<td>'.$row["post_op_summary3"].'</td>
				<td>'.$row["complication"].'</td>
				<td>'.$row["outcomes"].'</td>
				<td>'.$row["date_of_discharge"].'</td>
				<td>'.$row["surgeon"].'</td>
				<td>'.$row["date_of_surgery2"].'</td>
				<td>'.$row["date_of_discharge2"].'</td>
				<td>'.$row["lenght_hospital_stay"].'</td>
				<td>'.$row["cost_of_surgery"].'</td>
				<td>'.$row["total_cost_of_care"].'</td>
				<td>'.$row["education"].'</td>
				<td>'.$row["father_occupation"].'</td>
				<td>'.$row["mother_occupation"].'</td>
				<td>'.$row["father_monthly_income"].'</td>
				<td>'.$row["mother_monthly_income"].'</td>
				<td>'.$row["monthly_expenditure"].'</td>
				<td>'.$row["monthly_income_left"].'</td>
				<td>'.$row["source_current_health_expenditure"].'</td>
			</tr>
			';
		}
		$output_elective .='</table';

		header("Content-Type: application/octet-stream");
		//header("Content-Type: text/csv; charset=utf-8");
		header("Content-Disposition:attachment; filename=download.xls");
		//header("Content-Disposition:attachment; filename=download.csv");
		header("Pragma: no-cache");
		header("Expires: 0");
		echo $output_elective;
	}
	
}*/


//isset($_POST['export_clinical']
// get Users

if (isset($_POST['export_clinical'])) {
	
$query = "SELECT * FROM  clinical_records_tb ORDER BY firstname ASC ";
if (!$result = mysqli_query($db, $query)) {
    exit(mysqli_error($db));
}

$users = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
}

//header('Content-Type: text/csv; charset=utf-8');
header("Content-Type: application/octet-stream");
header('Content-Disposition: attachment; filename=clinical.xls');
$output = fopen('php://output', 'w');
fputcsv($output, array('date_of_presentation', 'firstname', 'lastname', 'hosp_number', 'address', 'phonenumber', 'age', 'gender', 'source_of_referral', 'presenting_compliant', 'hpc' , 'examination', 'diagnosis', 'diagnosis_two', 'available_investigations', 'requested', 'plan', 'secondvisit', 'thirdvisit'));

if (count($users) > 0) {
    foreach ($users as $row) {
        fputcsv($output, $row);
    		}
		}

	}
	/////ELECTIVE

elseif (isset($_POST['export_elective'])) {
	$query =  "SELECT * FROM  elective_surgery_records_tb ORDER BY firstname ASC";
if (!$result = mysqli_query($db, $query)) {
    exit(mysqli_error($db));
}

$users = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
}

header("Content-Type: application/octet-stream");
header('Content-Disposition: attachment; filename=elective.xls');
//header('Content-Type: text/csv; charset=utf-8');
//header('Content-Disposition: attachment; filename=users.xls');
$output = fopen('php://output', 'w');
fputcsv($output, array('date_of_presentation', 'firstname', 'lastname', 'hosp_number', 'age', 'gender', 'pc', 'hpc', 'phy_exam' , 'inv', 'diagnosis', 'diagnosis_two', 'pre_op_mgt_summary', 'surgery_performed', 'date_of_surgery', 'reason_for_delay', 'intra_op', 'post_op_summary1', 'post_op_summary2','post_op_summary3', 'complication', 'outcomes' , 'date_of_discharge', 'surgeon' , 'date_of_surgery2', 'date_of_discharge2', 'length_hospital_stay', 'cost_of_surgery' , 'total_cost_of_care' , 'education', 'father_occupation', 'mother_occupation', 'father_monthly_income', 'mother_monthly_income', 'monthly_expenditure', 'monthly_income_left', 'source_current_health_expenditure'));

if (count($users) > 0) {
    foreach ($users as $row) {
        fputcsv($output, $row);
    }
}
}

////////////EMERGENCY
elseif (isset($_POST['export_emergency'])) {
	$query =  "SELECT * FROM  elective_surgery_records_tb ORDER BY firstname ASC";
if (!$result = mysqli_query($db, $query)) {
    exit(mysqli_error($db));
}

$users = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
}

header("Content-Type: application/octet-stream");
header('Content-Disposition: attachment; filename=emergency.xls');
//header('Content-Type: text/csv; charset=utf-8');
//header('Content-Disposition: attachment; filename=users.xls');
$output = fopen('php://output', 'w');
fputcsv($output, array('date_of_presentation', 'firstname' , 'lastname', 'hosp_number', 'age', 'gender', 'pc', 'hx', 'hpc', 'phy', 'available_ix', 'diagnosis', 'diagnosis_two' , 'requested_ix', 'plan', 'er_care_summary', 'surgery_performed', 'intraop', 'date_surgery', 'time_of_surgery', 'reason_for_delay', 'admission_summary_1', 'admission_summary_2', 'admission_summary_3', 'complications' , 'outcome' , 'date_of_discharge', 'length_hospital_stay', 'surgeon', 'date_of_surgery', 'total_cost_of_care' , 'cost_of_surgery', 'education', 'fatheroccup', 'motheroccup', 'father_monthly_income', 'mother_monthly_income', 'monthly_household_expenditure' , 'monthly_income_left', 'source_of_fund'));

if (count($users) > 0) {
    foreach ($users as $row) {
        fputcsv($output, $row);
    }
}
}
////////////////UNOPERATED
elseif (isset($_POST['export_unoperated'])) {
	$query =  "SELECT * FROM  elective_surgery_records_tb ORDER BY firstname ASC";
if (!$result = mysqli_query($db, $query)) {
    exit(mysqli_error($db));
}

$users = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
}

header("Content-Type: application/octet-stream");
header('Content-Disposition: attachment; filename=unoperated.xls');
//header('Content-Type: text/csv; charset=utf-8');
//header('Content-Disposition: attachment; filename=users.xls');
$output = fopen('php://output', 'w');
fputcsv($output, array('date_of_presentation', 'firstname', 'lastname', 'hosp_number', 'address', 'phonenumber', 'age', 'gender', 'source_of_referral', 'presenting_compliant', 'hpc' , 'examination', 'diagnosis', 'diagnosis_two', 'available_investigations', 'requested', 'plan', 'second_review', 'third_review'));

if (count($users) > 0) {
    foreach ($users as $row) {
        fputcsv($output, $row);
    }
}
}
////////////WARD CONSULT
elseif (isset($_POST['export_Wardconsult'])) {
	$query =  "SELECT * FROM  elective_surgery_records_tb ORDER BY firstname ASC";
if (!$result = mysqli_query($db, $query)) {
    exit(mysqli_error($db));
}

$users = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
}

header("Content-Type: application/octet-stream");
header('Content-Disposition: attachment; filename=wardconsult.xls');
//header('Content-Type: text/csv; charset=utf-8');
//header('Content-Disposition: attachment; filename=users.xls');
$output = fopen('php://output', 'w');
fputcsv($output, array('date_of_presentation', 'firstname', 'lastname', 'hosp_number', 'address', 'phonenumber', 'age', 'gender', 'source_of_referral', 'presenting_compliant', 'hpc' , 'examination', 'diagnosis', 'diagnosis_two', 'available_investigations', 'requested', 'plan', 'second_review', 'third_review'));

if (count($users) > 0) {
    foreach ($users as $row) {
        fputcsv($output, $row);
    }
}
}




?>