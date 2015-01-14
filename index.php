<?php
session_start();

//connect to DB
include 'db_con.php';
include 'functions.php';

function ServiceYears(){
return date('Y')-1848;
}
?>

<!DOCTYPE html>

<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
<meta name="google-site-verification" content="kGygzQcses3ls-qgAWhQ3c_NVpD7-JKjCA-cWHpsLCQ" />
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>The Most Worshipful Prince Hall Grand Lodge of New Jersey</title>

  
  <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/fc-webicons.css">
  

  <script src="js/vendor/custom.modernizr.js"></script>

<script>
function RedirectToLocation(){
 window.location.href='http://www.mwphglnj.org/admin.php';
}
 </script>
</head>
<body>

<?php 
require ('menu.php');
?>
<!-- Main Grid Section -->
 <div class="row" style="padding-top:10px;">


<?php

if (isset($_SESSION["VistedWithinhr"])){
//If the user has visited the site within the last half hour then the alert message will not display again.
}
else{

	$results2 = mysql_query("select * from announcements where display_until >= CURRENT_TIMESTAMP and alert='Y'");
	 while($num2 = mysql_fetch_array($results2)){
		echo "<div data-alert class='alert-box' style='z-index:3; margin-bottom:-50px;'>";
		echo "<p style='margin-right:10px; margin-left:10px; font-weight:bold;'>".$num2['title']."<br>".nl2br($num2['content']).
		"</p><a href='#' class='close'>&times;</a></div>";
		 }
	 $_SESSION["VistedWithinhr"]='1';
}

		  //If admin has visited the site within the last half hour then the alert message will not display again.
		  if($_SESSION['access_level']=='admin' && empty($_SESSION['AdminVistedWithinhr'])){
		  echo "<div data-alert class='alert-box' style='z-index:3; margin-bottom:-50px;'>";
		  echo $_SESSION['message']."<p style='margin-right:10px; margin-left:10px; font-weight:bold;'>You now have access to the &#8220;Members Only Files&#8221; item on the menu bar above. 
	<p style='margin-right:10px; margin-left:10px; font-weight:bold;'>To access the admin site <button onclick='RedirectToLocation();'>Click Here</button></p><p style='margin-right:10px; margin-left:10px; font-weight:bold;'>Please make sure to log out when you are complete.</p><a href='#' class='close'>&times;</a></div>";
		  $_SESSION['AdminVistedWithinhr'] = '1';
		  }// end if for access_level
?>

<div class="large-12 columns" style="text-align:center; padding-bottom:20px;">

<!-- show the image below only for mid to large resolutions -->
<div class="hide-for-small">
<img src="/images/grand.png"></div>
</div>

<!-- show the image below only for small resolutions -->
<div class="show-for-small">
<p style="text-align:center"><img src="/images/grand_small.png"></p></div>
</div>

</div>

<!-- Start Announcement Section -->
<div class="row">
<div class="large-4 columns">
<div class="panel">
<h4>Announcements</h4>

<?php
	//displays announcements stored on the DB  
	$results1 = mysql_query("Select *, DATE_FORMAT(date_submitted,'%m/%d/%Y') AS date from announcements where showonhome='Y' and display_until >= CURRENT_TIMESTAMP order by display_until limit 4");
	
	$results10 = mysql_query("Select *, DATE_FORMAT(date_submitted,'%m/%d/%Y') AS date from announcements where showonhome='Y' and display_until >= CURRENT_TIMESTAMP order by display_until");
	
	 $announce_count = mysql_num_rows($results1);
	 $full_announce_count = mysql_num_rows($results10);
	 while($num1 = mysql_fetch_array($results1)){
	 $url = $num1['url'];
	 
	 if(countWords($num1['content']) > 30 && $num1['url_type']=='A'){
	 $content = "<p>".truncateWords($num1['content'],30)."<a href='annoucements.php?mod=".$num1['id']."'>Read More</a></p>";
	 }
	 else if(countWords($num1['content']) > 30 && $num1['url_type']=='L'){
	 $content = "<p>".truncateWords($num1['content'],30)."<a href='annoucements.php?mod=".$num1['id']."'>Read More</a></p>";
	 }else{
	 $content = "<p>".$num1['content']."</p>";	 
	 } 
		echo "<hr style='border:1px solid'><div>";
		
		
		if ($num1['url']==' ' || $num1['url']==''){
			echo "<h5>".$num1['title']."</h5>";
			echo "<div style='min-height:190px; overflow:visible;'>".$content."</div>";
			}
		else{
			  $results = mysql_query("Select count(id) as clicks from link_tracker where href = '$url'");
			  while($num = mysql_fetch_array($results)){
			  $counter = $num['clicks'];
			  }
				if($num1['url_type']=='A' && $num1['url']=='documents/'){  
				echo "<h5>".$num1['title']."</h5>";
				echo "<div style='overflow:visible;'>".$content."</div>";
				}
				if($num1['url_type']=='A' && $num1['url']<>'documents/'){  
				echo "<h5>".$num1['title']." <span style='font-size:11px; color:#0066FF;'>(".$counter.")</span></h5>";
				echo "<div style='overflow:visible;'>".$content." <a href='jump.php?href=".$num1['url']."'>View Attachment</a></div>";
				}
				if($num1['url_type']=='L'){  
				echo "<h5>".$num1['title']." <span style='font-size:11px; color:#0066FF;'>(".$counter.")</span></h5>";
				echo "<div style='overflow:visible;'>".$content." <a href='jump.php?href=".$num1['url']."'>or Visit Link</a></div>";
				}
			}
		echo" <br><small style='float:right; margin-top:5px;'><i>Posted on ".$num1['date']."</i></small></div>";
		  }
		  
	if($full_announce_count>4){
	echo"<p style='text-align:center; margin-top:50px;'><a href='annoucements.php?mod=all'>See All Annoucements</a></p>";	
	}
?>
</div>

<?
function showExplore(){
echo"
<div class='panel'>
<h4>Explore</h4>
<style>
.old_side_menu{ list-style-type: none; background-color:#FFFFFF;}
.large-8 h4,.large-4 h4 {color:#000064;}
</style>
<ul class='old_side_menu'>
  <li><a href='membership.php'><img src='/images/icon_join.jpg' width='35' height='35' />Become a Member</a></li>
    <li><a href='mobile_app.php'><img src='/images/mobile.png' width='35' height='35' />Mobile App</span></a></li>
  <li><a href='grandmaster.php?mod=itinerary'><img src='/images/icon_calendar.jpg' width='35' height='35' />Itinerary</a></li>
  <!-- <li><a href='##'><img src='/images/Icon_Cruise.jpg' width='35' height='35' />2014 Cruise</a></li>	-->	
  <li><a href='raffle.php'><img src='/images/icon_raffle.jpg' width='35' height='35' />Grand Lodge Raffle</a></li>
  <li><a href='photos.php&album=1962'><img src='/images/icon_photos.jpg' width='35' height='35' />Photo Gallery</a></li>
  <li><a href='links.php'><img src='/images/icon_links.jpg' width='35' height='35' />Links</a></li>
</ul>
</div>";
}

  if ($announce_count<3)
  {
   echo showExplore();
  }
?>
</div>

<div class="large-8 columns">
<div class="panel" align="center">

<div class="slideshow-wrapper">
	<div class="preloader"></div>
<ul id="featured1" data-orbit>
<li class='active'><img src="/images/gm_slide.png"></li>
<li><img src="/images/slide1.png"></li>
<?php
// upcoming event images
	$results9 = mysql_query("select url, ss_image from announcements where display_until >= CURRENT_TIMESTAMP and ss_image<>''");
	 while($num9 = mysql_fetch_array($results9)){
		echo "<li><a href='".$num9['url']."'><img src='images/".$num9['ss_image']."'></a></li>";
		 }
?>
<li><img src="/images/slide12.png"></li>
<li><img src="/images/slide4.png"></li>
<li><a href='grandmaster.php?mod=calendar'><img src="/images/calendar_ad.jpg"></a></li>
<li><img src="/images/golden_rule_GL_slideshow.jpg"></li>
<li><img src="/images/slide5.png"></li>
<li><img src="/images/slide6.png"></li>
<li><img src="/images/gm_slide.png"></li>
<li><img src="/images/slide7.png"></li>
<li><img src="/images/slide8.png"></li>
<li><img src="/images/slide9.png"></li>
<li><img src="/images/slide10.png"></li>
<li><img src="/images/slide11.png"></li>
<li><img src="/images/slide3.png"></li>
<li><img src="/images/slide13.png"></li>
<li><img src="/images/slide14.png"></li>
</ul>
		</div>

</div>

<div class="panel">
<h4>Welcome to website for the Most Worshipful Prince Hall Grand Lodge, State of New Jersey</h4>


<h5>Fraternal Greetings!</h5>

<p>The MWPHGL of New Jersey is a proud member of the Prince Hall Conference of Grand Masters and enjoys fraternal fellowship with the 48 Member Grand Lodges dispersed through the United States, Ontario, Canada, Bahamas, Caribbean, and Liberia, Africa.</p>

<p>The MWPHGL of NJ was Organized in 1848<br>
<?=ServiceYears();?> Years of "Wisdom and Instruction"</p>

<p>Our Grand East is located at<br>
188-190 Irvine Turner Boulevard<br>
Newark, New Jersey 07018<br>
Building Manager's office 973-824-9227<br>
<!--Grand Master's Office 609-432-1156-->
</p>

<p>Please explore our Website where you will find a brief history of the origin of Prince Hall Freemasonry of New Jersey, as well as other pertinent information about our Grand Lodge and it's officers.</p>

<p align="center">Motto<br>
“We are our Brother’s Keeper”</p>

<p align="center">Scripture<br>
Matthew 25:40
“And the King will answer and say to them, 
Assuredly, I say to you, 
inasmuch as you did it to one of the least of these My brethren, 
you did it to Me.”</p>

<p>
Fraternally,<br>
MW Ricardo McNeil<br>
Grand Master</p>
</div>

<?php
	$results2 = mysql_query("Select *, DATE_FORMAT(date_submitted,'%m/%d/%Y') AS date from sickndistressed where display_until >= CURRENT_TIMESTAMP");
	 if(mysql_num_rows($results2)> 0 ){
	echo "</div><div class='large-8 columns'><div class='panel' style='min-height:325px;'>
	<h4>Sick & Distressed</h4>";

	//displays sick& distressed stored on the DB  
	$results3 = mysql_query("Select *, DATE_FORMAT(date_submitted,'%m/%d/%Y') AS date from sickndistressed where display_until >= CURRENT_TIMESTAMP order by display_until");
	 while($num3 = mysql_fetch_array($results3)){
		echo "<hr style='border:1px solid'><div>";
		echo nl2br($num3['content']);
		echo"<br><small style='float:right; margin-top:5px;'><i>Posted on ".$num3['date']."</i></small></div>";
		  }
echo "</div>";
} else{//do not display this section
}		  
?>
</div><!-- End large-8 columns-->
</div><!--End row-->

  
<div class="row">
<div class="large-4 columns">
<div class="panel">
<p>
<a href="membership.php"><img src="/images/be_member.png"></a><br>
Ask and it will be given to you; seek and you will find; 
knock and the door will be opened to you. <a href="membership.php">Read More..</a>
<p style="text-align:center; margin-top:-20px; margin-bottom:-10px;"><a href="membership.php#Locator">Lodge Locator</a></p>
</p>
<img src="images/2B1ask1.jpg">
</div>
</div>
<div class="large-4 columns">
<div class="panel">
<p>
<a href="cruise.php"><img src="/events/cruise/cruise_small.png"></a><br><br>
The Prince Hall Family of New Jersey invites you to join us for a fun filled,
exciting, relaxing, and adventurous cruise. <b>March 9, 2015 - March 18, 2015</b>
<a href="cruise.php">Click here for more info.</a></p>
</div>
</div>
<div class="large-4 columns">
<div class="panel">
<p>
<a href="phfamily.php"><img src="/images/phfam.png"></a><br><br>
Prince Hall Family Relief Fund was established to assist victims that 
suffered catastrophes from hurricanes, floods, and fires that accrued to 
them as well as their family members. <a href="phfamily.php">Read More..</a></p>
</div>
</div>

</div><!-- End row -->

<div class="row">
<div class="large-4 columns">
  <?
  if ($announce_count>3)
  {
   echo showExplore();
  }
  ?>
<div class="panel">
<p>
<a href="pillar.php"><img src="/images/the_pillar.png"></a><br><br>
The Pillar is a periodic newsletter highlighting member and lodges of the MW Prince Hall Grand lodge of NJ.
<a href="pillar.php"> Click her to read the lastest articles.</a></p>
</div>

<div class="panel">
<p>
<a href="raffle.php"><img src="/images/raffle.png"></a><br><br>
Wouldn't you love to own a brand new C250 Mercedes-Benz or 5 day Caribbean Vacation? 
If so get your 2013 Annual Grand Lodge Charity Raffles before it's too late.<a href="raffle.php">Click here for more info.</a></p>
</div>

<div class="panel">
<p style="text-align:center">
<a href=""><img src="/images/members-only.png" width="70%"></a><br>

<!--Start Member Login Widget-->
<div id="member_form">

<?php

if(isset($_SESSION['logout_ind'])){
	echo $_SESSION['message'];
	
	if(isset($_COOKIE['MMAccessPHA'])){
	echo "Access Member Files - Authorized<br><br>";
	}
?>
    
  <form name="member_form" method="post" action="bin/process_e.php">
    <button id="logout_btn" name="logout_btn" class="button"> Logout</button>
  </form>
  <?
}else{
	echo $_SESSION['message'];
?>
  <form name="member_form" method="post" action="bin/process_e.php">
    <input type="text" name="username" id="username" placeholder="Username"  class="text-input" />
    <input type="password" name="password" id="password" placeholder="Password" class="text-input" />
    <input type="hidden" name="submit" value="1">
    <button id="submit_btn" class="button" >Login</button>
  </form>
<?	
}
?>
</div>
<!--End Member Login Widget -->

</p>
</div>
</div>

<div class="large-8 columns">
<div class="panel">
<h4 style="margin-bottom:-1px;">Grand Master Visitations</h4>
<small>Display's the Grand Master's Events for the next 4 months</small>
<hr style='border:1px solid'>
<?php  
##include 'direct_request.php';
include 'calendar_events.php';
?>
<p align='right'><a href='grandmaster.php?mod=itinerary'>(+) Click here to see his full itinerary</a></p>
</div>

</div>
</div>

</div><!-- End row -->

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