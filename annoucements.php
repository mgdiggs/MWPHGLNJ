<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>The Most Worshipful Prince Hall Grand Lodge of New Jersey - Announcements</title>

  
  <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/fc-webicons.css">
  

  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>
<?php 
require ('menu.php');

//connect to DB
include 'db_con.php';

switch ($_GET['mod']){
case "all":
        $a_nbr = "(All)";
        break;
}
?>
 
<!-- Main Grid Section -->
 <div class="row" style="padding-top:10px;">
<p align="center"><img src="images/other_page_header.png">
<h2 style="color:#FFF; margin-top:-25%; margin-left:10%">Annoucements <?=$a_nbr;?></h2>
</p>
</div>

 
<div class="row" style="padding-top:10%;"> 
 
<div class="large-12 columns">
<div class="panel" align="left">
<?php
$mod = $_GET['mod'];

if($mod == 'all'){
//display all current and future announcements from db
$results1 = mysql_query("Select *, DATE_FORMAT(date_submitted,'%m/%d/%Y') AS date from announcements where display_until >= CURRENT_TIMESTAMP order by display_until");
}else{
//display all current and future announcements from db
$results1 = mysql_query("Select *, DATE_FORMAT(date_submitted,'%m/%d/%Y') AS date from announcements where id='$mod'");
}
	 
	 $color='1';
	 
	 while($num1 = mysql_fetch_array($results1)){
	 
	 if($color=='1'){
	 echo "<div style='background-color:#DDEEFF; margin-bottom:15px;'>
			   <div id='anounce_text'><h4>".$num1['title']."</h4>".nl2br($num1['content'])."</div>
			   <div style='padding:15px; float:left; width:70%;'><i>Posted on: ".$num1['date']."</i></div>
			   <div style='padding:15px; text-align:right;'>";
			if($num1['url']<>''){
              if($num1['url_type']=='A'){
				echo"<a href='".$num1['url']."'>View attachment</a>";
              }
              else if($num1['url_type']=='L'){
                echo"<a href='".$num1['url']."'>Visit Link</a>"; 
              }
			}else{//display nothing in this div
			      };   
	 echo "</div><div style='clear:both;'></div>
	      </div>";
	$color='2';
	}else{
		 echo "<div style='background-color:#CFDCE7; margin-bottom:15px;'>
			   <div id='anounce_text'><h4>".$num1['title']."</h4>".nl2br($num1['content'])."</div>
			   <div style='padding:15px; float:left; width:70%;'><i>Posted on: ".$num1['date']."</i></div>
			   <div style='padding:15px; text-align:right;'>";
			if($num1['url']<>''){
              if($num1['url_type']=='A'){
				echo"<a href='".$num1['url']."'>View attachment</a>";
              }
              else if($num1['url_type']=='L'){
                echo"<a href='".$num1['url']."'>Visit Link</a>"; 
              }
			}else{//display nothing in this div
			      }   
	 echo "</div><div style='clear:both;'></div>
	      </div>";
	$color='1';
	}//close else 
	
	if(mysql_num_rows($results1)==1){
	echo "<center><br><a href='annoucements.php?mod=all'>See More Annoucements</a></b></center>";
	} 
	 
	 }//close while
	 
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
