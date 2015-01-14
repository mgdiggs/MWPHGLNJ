<?php
session_start();

// Define MySQL Settings
include "../db_con.php";

//Update Masonic Body Officers

$name = $_POST['name'];
$affiliation = $_POST['affiliation'];
$message = $_POST['message'];
$date = $_POST['date'];
$format_date = date("Y-m-d",strtotime($date));
$current_date = date("Y-m-d", time()); // get current date

if ( $name <>'' && $message<>'' && $date<>''){

$query ="insert into sickndistressed values ('','$name','$affiliation','$message','$current_date','$format_date')";

mysql_query($query);

echo "<h2 style='text-align:center; color:#00F'>Insert Complete!</h2>"; 
}
else{
echo "<h2 style='text-align:center; color:#00F'>Please complete all fields</h2>"; 
}

?>
