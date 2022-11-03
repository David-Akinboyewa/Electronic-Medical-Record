<?php include('server.php')// get Users


$sql = "SELECT * FROM  clinical_records_tb ORDER BY firstname ASC ";
	$result = mysqli_query($db, $sql);
if (!$result = mysqli_query($db, $sql)) {
    exit(mysqli_error($db));
}

$users = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
}

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Users.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('date_of_presentation', 'firstname', 'lastname', 'hosp_number', 'age', 'gender', 'pc', 'hpc', 'phy_exam' , 'inv', 'diagnosis', 'diagnosis_two', 'pre_op_mgt_summary', 'surgery_performed', 'date_of_surgery', 'reason_for_delay', 'intra_op', 'post_op_summary1', 'post_op_summary2','post_op_summary3', 'complication', 'outcomes' , 'date_of_discharge', 'surgeon' , 'date_of_surgery2', 'date_of_discharge2', 'length_hospital_stay', 'cost_of_surgery' , 'total_cost_of_care' , 'education', 'father_occupation', 'mother_occupation', 'father_monthly_income', 'mother_monthly_income', 'monthly_expenditure', 'monthly_income_left', 'source_current_health_expenditure' ));

if (count($users) > 0) {
    foreach ($users as $row) {
        fputcsv($output, $row);
    }
}




// get Users
$query = "SELECT staffno, fullname FROM memberz WHERE dele = 0 ORDER BY staffno ASC";
if (!$result = mysqli_query($conn, $query)) {
    exit(mysqli_error($con));
}

$users = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
}

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Users.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('Identity_number', 'Full_name', 'Amount_saved'));

if (count($users) > 0) {
    foreach ($users as $row) {
        fputcsv($output, $row);
    }
}

?>
