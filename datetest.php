<?php include('server.php');

  $date_query = "SELECT curent_date,appdate FROM appointment_tb";
  $date_query_run = mysqli_query($db, $date_query);
  $row2 = mysqli_fetch_array($date_query_run);
  echo $row2['curent_date' - 'appdate' ];
?>