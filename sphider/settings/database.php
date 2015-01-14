<?php
	$database="phgladmin0";
	$mysql_user = "phgladmin";
	$mysql_password = "Brothers357"; 
	$mysql_host = "mysql.webhero.com";
	$mysql_table_prefix = "";

	$success = mysql_connect ($mysql_host, $mysql_user, $mysql_password);
	if (!$success){
		print "<b>Cannot connect to database, check if username, password and host are correct.</b>";
		die();
	}
    $success = mysql_select_db ($database);
	if (!$success) {
		print "<b>Cannot choose database, check if database name is correct.";
		die();
	}
?>

