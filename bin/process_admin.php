<?php
session_start();

// Define MySQL Settings
include "../db_con.php";

//Update Masonic Body Officers

$arr = $_POST['bookArray'];

$val=0;

foreach($arr as $field=>$val) {
$val++;
$query ="UPDATE gl_officers SET name='".$val['value']."' where id='".$val['name']."';";

mysql_query($query);
}
echo "<h2 style='text-align:center; color:#00F'>Update Complete!</h2>"; 


?>
