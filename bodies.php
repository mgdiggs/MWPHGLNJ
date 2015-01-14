<?php
session_start();

//connect to DB
include ('db_con.php');

$id = $_GET['id'];
$mod = $_GET['mod'];

$results0 = mysql_query("SELECT update_access_code
						 FROM masonic_bodies
						 where id ='$id'");	

while($num0 = mysql_fetch_array($results0)){
$head_title = $num0['update_access_code'];
}
if($head_title==''){
$head_title = ucfirst($mod);
}
?>
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>The Most Worshipful Prince Hall Grand Lodge of New Jersey - <?=$head_title?></title>

  
  <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/fc-webicons.css">
  

  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>
<style>
.large-12 p{ text-align:justify;}
</style>
<?php 
require ('menu.php');

//Switch for Page Title
switch($_GET['mod']) { 

case 'adoptive':
$title = "Adoptive -";
$where = "WHERE type = 'adoptive'";
break;
 
case 'appendant': 
$title = "Appendant -";
$where = "WHERE type = 'appendant'";
break;

case 'affiliated':
$title = "Affiliated -";
$where = "WHERE type = 'affiliated'";
break;

case 'concordinant':
$title = "Concordinant -";
$where = "WHERE type = 'concordinant'";
break;

default: 
$title = "All - ";
$where = "WHERE 1 order by FIELD(type, 'adoptive','appendant', 'affiliated')";
break;
}
?>

<!-- Main Grid Section -->
<div class="row" style="padding-top:10px; padding-bottom:10%;">
<p align="center"><img src="images/other_page_header.png">
<h2 style="color:#FFF; margin-top:-25%; margin-left:10%"><?=$title?> Prince Hall Family </h2>
</p>
</div>
<?php
if (isset($id)){
$results1 = mysql_query("SELECT *
						 FROM masonic_bodies
						 $where and id='$id' limit 1");
}else{
$results1 = mysql_query("SELECT *
						 FROM masonic_bodies
						 $where");	
}

while($num1 = mysql_fetch_array($results1)){

	if($num1['page']==''){
	include 'bodies/commingsoon.php';
	}else{
	include $num1['page'];
	echo "<div class='row'><div class='large-12 columns' style='border-top:solid #FFF thin;'></div></div><br>";
	}
}
?>
<div class="row">
<ul class="breadcrumbs">
<li><a href="bodies.php?mod=adoptive">Adoptive</a></li>
<li><a href="bodies.php?mod=appendant">Appendant</a></li>
<li><a href="bodies.php?mod=concordinant">Concordinant</a></li>
<li><a href="bodies.php?mod=affiliated">Affiliated</a></li>
</ul>
</div> 
<!-- Start Footer -->
<?php 
require ('footer.php');
?>
<!-- End Footer -->

  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <!--<script src="js/foundation.min.js"></script>  -->
  
  <script src="js/foundation/foundation.js"></script>
  
  <script src="js/foundation/foundation.alerts.js"></script>
  
  <script src="js/foundation/foundation.clearing.js"></script>
  
  <script src="js/foundation/foundation.cookie.js"></script>
  
  <script src="js/foundation/foundation.dropdown.js"></script>
  
  <script src="js/foundation/foundation.forms.js"></script>
  
  <script src="js/foundation/foundation.joyride.js"></script>
  
  <script src="js/foundation/foundation.magellan.js"></script>
  
  <script src="js/foundation/foundation.orbit.js"></script>
  
  <script src="js/foundation/foundation.reveal.js"></script>
  
  <script src="js/foundation/foundation.section.js"></script>
  
  <script src="js/foundation/foundation.tooltips.js"></script>
  
  <script src="js/foundation/foundation.topbar.js"></script>
  
  <script src="js/foundation/foundation.interchange.js"></script>
  
  <script src="js/foundation/foundation.placeholder.js"></script>
  
  <script src="js/foundation/foundation.abide.js"></script>
  
  <script>
    $(document).foundation();
  </script>
</body>
</html>