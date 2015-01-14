<?php
session_start();

// Define MySQL Settings
include "../db_con.php";

//Update Masonic Body Officers

$id = $_POST['d'];
$val=0;

foreach($id as $field=>$val) {
$val++;
$query ="update announcements set display_until='1999-01-01' where id='".$val['value']."'";
mysql_query($query);
$display .= $val['value'].',';
}

echo "<h2 style='text-align:center; color:#00F'>Item #".$display."  has been removed</h2><br><br>"; 
?>
