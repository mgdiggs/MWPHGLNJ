<?php
session_start();

// Define MySQL Settings
include "../db_con.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$submit = $_POST['submit'];

if(($username=='' || $password=='d41d8cd98f00b204e9800998ecf8427e') && $submit=='1'){
	$message = "<p style='color:#F00;'>Please enter a valid username and password</p>";
	unset($submit);
	header("Location: http://www.mwphglnj.org");
	}
	
if(($username<>'' || $password<>'d41d8cd98f00b204e9800998ecf8427e') && $submit=='1'){
		  $result_count = mysql_query("SELECT * FROM users WHERE username='$username' and password='$password'");
		  
		  $num_rows = mysql_num_rows($result_count);
		  
		  if($num_rows == '1'){
				   while($num1 = mysql_fetch_array($result_count)){
					  //set session variable and allow user to log in.
					  $message = "<p style='color:#00F'>Welcome ".$num1['first_name']."</p>";
					  $_SESSION['username'] = $num1['username']; 
					  $_SESSION['access_level'] = $num1['access_level'];
					  $_SESSION['access2bodies'] = $num1['access2bodies'];
					  $_SESSION['access2district'] = $num1['access2district'];					  
					  $_SESSION['logout_ind'] = 1;
					  unset($submit);
					  setcookie("MMAccessPHA", 1, time()+1800, "/");  /* expire in 1 hour */
					  header("Location: http://www.mwphglnj.org");
					  }
			 mysql_close();  
			  }
			  else{
				  $message = "<p style='color:#F00;'>The credentials you supplied were incorrect. Please try again.</p>";
				  unset($submit);
				  header("Location: http://www.mwphglnj.org");
				  }
				  
	}
	$_SESSION['message'] = $message;
if(($username=='' || $password=='d41d8cd98f00b204e9800998ecf8427e') && isset($_POST['logout_btn'])){
	//unset session variables
	unset($_SESSION['logout_ind']);
	unset($_SESSION['username']);
	unset($_SESSION['access_level']);
	unset($_SESSION['access2bodies']);
	unset($_SESSION['access2district']);
	unset($submit);
	
	setcookie("MMAccessPHA", 1, time()-1800, "/");
	header("Location: http://www.mwphglnj.org");
	}

?>