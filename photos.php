<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>The Most Worshipful Prince Hall Grand Lodge of New Jersey</title>

  
  <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/fc-webicons.css">
  

  <script src="js/vendor/custom.modernizr.js"></script>
 <script>
$(function() {
$( "#accordion" ).accordion();
});
</script>
</head>
<body>
<?php 
require ('menu.php');
include 'db_con.php';
?>

<!-- Main Grid Section -->
 
<div class="row" style="padding-top:30px;">
 
<div class="large-3 columns">
<div class="panel" align="center">
<img src="images/gl_logo3.png">
</div>
</div>
<div class="large-9 columns">

<div class="panel" align="center">
<img src="images/photo_album.png" width="637" height="298"></div>
</div>

 
</div>

<div class="row">
	<div class="large-12 columns">
<style>
.clearing-thumbs li{ margin:20px;}
.clearing-thumbs img{width:180px; height:120px; border:5px #FFF solid;}
</style>
	
<?php
	$album = $_GET["album"];
	
	if ($album=='1962'){
	$results = mysql_query("Select distinct album_id from photos order by date_uploaded desc limit 1");	
	}else{
	$results = mysql_query("Select distinct album_name from photos where album_id=$album  order by date_uploaded desc");	
	}
		while($output = mysql_fetch_array($results)){
			$album = $output['album_name'];
		echo "<div class='panel'>
		<h3>".$output['album_name']."</h3>
		<ul class='clearing-thumbs' data-clearing>";
		
			$results2 = mysql_query("Select * from photos where album_name='$album'");
			while($output2 = mysql_fetch_array($results2)){
			echo"<li><a href='".$output2['image']."'><img src='".$output2['thumbnail']."'></a></li>";
			}
		echo"</ul></div>";
		}
?>	
	</div> 
</div>   

<div class="row">                                         
	<div class="large-12 columns">
		<div class='panel'>		
<?php

	$results3 = mysql_query("Select distinct album_id, album_name from photos where album_name<>'$album' order by date_uploaded desc");	

		while($output3 = mysql_fetch_array($results3)){
			$album = $output3['album_name'];
		echo "<a href='photos.php?album=".$output3['album_id']."'>".$output3['album_name']."</a> &nbsp | &nbsp ";

		}
?>
		</div>
	</div>		
</div>  		
<!-- End Grid Section -->
 
 
 
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