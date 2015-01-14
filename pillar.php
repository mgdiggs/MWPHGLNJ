<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>The Most Worshipful Prince Hall Grand Lodge of New Jersey - The Pillar Online</title>

  
  <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/fc-webicons.css">
  

  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>
<?php 
require ('menu.php');

//connect to DB
include 'db_con.php';
?> 
<!-- Main Grid Section -->
 <div class="row" style="padding-top:10px;">
<p align="center"><img src="images/other_page_header.png">
<h2 style="color:#FFF; margin-top:-25%; margin-left:10%">The Pillar Online</h2>
</p>
</div>

 
<div class="row" style="padding-top:10%;"> 
 
<div class="large-12 columns">
<div class="panel" align="left">
<?php 
//get current fiscal year
//

$results1 = mysql_query("Select *, DATE_FORMAT(pubDate,'%m/%d/%Y') AS date from pillar");
	 
	 $color='1';
	 
	 while($num1 = mysql_fetch_array($results1)){
	 
	 if($color=='1'){
		 echo "<div style='background-color:#CFDCE7; margin-bottom:15px;'>
			   <div style='padding:15px; float:left; width:20%;'><b>".$num1['date']."</b></div>
			   <div style='padding:15px; float:left; width:50%;'>".nl2br($num1['descr'])."</div>
			   <div style='padding:15px; float:left; width:30%;'><a href='".$num1['fileUrl']."' target='_blank'>View</a></div>
			   <div style='clear:both;'></div>
		  </div>";
	$color='2';
	}else{
		 echo "<div style='background-color:#CFDCE7; margin-bottom:15px;'>
			   <div id='anounce_text'><h4>".$num1['date']."</h4>".nl2br($num1['descr'])."</div>
			   <div style='padding:15px; float:left; width:70%;'><a href='".$num1['fileUrl']."'>View</a></div>
			   <div style='clear:both;'></div>
          </div>";
	$color='1';
	}//close else 
 }//close while
?>
           <p>Greetings Prince Hall Family,<br>
		Is your Lodge, chapter or organization making good strives in charity, community outreach or other benevolent activities? 
        Do you have light that has touched you that you can share? What are some of your favorite quotes, or poems? We are asking 
        to send anything of interest, and good taste to the pillar.</p>
        Email RW William Patterson, III at <a mailto='MWPHGLNJ@AOL.COM'>MWPHGLNJ@AOL.COM</a>
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