<?php
session_start();

//connect to DB
include 'db_con.php';
include 'functions.php';
?>

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
  <style>
  	h3, h4 {text-align:center;}
  </style>

</head>
<body>
<?php 
require ('menu.php');

switch($_GET['mod']) { 

case 'ddgm':
$title  = 'District Deputy Grand Masters & District Grand Lecturer';
break;
 
case 'glo': 
$title  = 'Grand Lodge Officers';
break;
} 
?>
 
<!-- Main Grid Section -->
 
<div class="row" style="padding-top:10px;">
<p align="center"><img src="images/other_page_header.png">
<h2 style="color:#FFF; margin-top:-25%; margin-left:10%"><?=$title?></h2>
</p>
</div>

 
<div class="row" style="padding-top:10%;"> 
 
<div class="large-12 columns">
<div class="panel">

<!-- Start Content from old site-->
<?php
   function PrintSuffix($str){
	  if ($str==1){
	  $suffix='st';
	  }
	  else if ($str==2){
	  $suffix='nd';
	  }
	  else if ($str==3){
	  $suffix='rd';
	  }
	  else {
	  $suffix='th';}
	  
	  return $suffix;
	  }
	  
	  function FindDistrict($district_nbr){
		  
		$results1 = mysql_query("SELECT *
								 FROM gl_officers
								 WHERE DISTRICT = '$district_nbr'");
								 
  		while($num1 = mysql_fetch_array($results1)){
			
		  if($num1['title']=='District Deputy Grand Master'){
			
			echo "<h5>".$num1['district'].PrintSuffix($num1['district'])." Masonic District</h5>";  
			echo"<table style='width: 100%;' border='1' cellspacing='0' cellpadding='0'>
				<tbody>
				<tr>
				<td>
				<h5>Name</h5>
				</td>
				<td>
				<h5>Title</h5>
				</td>
				</tr>";
			echo "<tr><td><a href='mailto:".$num1['email']."'>".$num1['name']."</a></td><td>".$num1['title']."</td></tr>";
		  }
		  if($num1['title']=='Asst. District Deputy Grand Master'){
			echo "<tr><td><a href='mailto:".$num1['email']."'>".$num1['name']."</a></td><td>".$num1['title']."</td></tr>";	
		  }	  
		  if($num1['title']=='District Grand Lecturer'){
			echo "<tr><td><a href='mailto:".$num1['email']."'>".$num1['name']."</a></td><td>".$num1['title']."</td></tr></tbody></table>";	
		  }
		}
	  }
	  	  
ob_start();
		$results2 = mysql_query("SELECT *
								 FROM gl_officers
								 WHERE masonic_body='GL' and (title like '%Grand Lecturer%' or title like '%District Deputy Grand%')");						 
		
		while($num2 = mysql_fetch_array($results2)){
			if($num2['title']=='District Deputy Grand Master at Large'){
				$ddgm1 = '<h3>'.$num2['name'].' - '.$num2['title'].'</h3>';
			}
			if($num2['title']=='Grand Lecturer'){
				$ddgm1.= '<h3>'.$num2['name'].' - '.$num2['title'].'</h3><hr>';
			}
			if($num2['title']=='Asst. District Deputy Grand Master at Large - North'){
				$dnorth = '<h4>'.$num2['name'].' - '.$num2['title'].'</h4>';
			}
			if($num2['title']=='Deputy Grand Lecturer - North'){
				$dnorth = '<h4>'.$num2['name'].' - '.$num2['title'].'</h4>';
			}
			if($num2['title']=='Asst. District Deputy Grand Master at Large - South'){
				$dsouth = '<h4>'.$num2['name'].' - '.$num2['title'].'</h4>';
			}
			if($num2['title']=='Deputy Grand Lecturer - South'){
				$dsouth.= '<h4>'.$num2['name'].' - '.$num2['title'].'</h4>';
			}
			
		}
		echo $ddgm1;
		echo $dnorth;
		  FindDistrict(1);
		  FindDistrict(2);
		  FindDistrict(3);
		  FindDistrict(4);
		  FindDistrict(5);
		echo $dsouth;  
		  FindDistrict(6);
		  FindDistrict(7);
		  FindDistrict(8);

$ddgm = ob_get_contents();
ob_end_clean();

$glo = '<div style="text-align:center">
<h3>2013 – 2015</h3>

<DIV><IMG alt="" src="../images/MW_McNeil_150.jpg" border="1"><BR>
  <STRONG>M.W. Ricardo McNeil</STRONG><BR>
  <EM>Grand Master</EM><BR>
  email: rimcn@aol.com<BR><BR>
  </DIV>
  
<DIV><IMG width="150" height="150" alt="" src="../images/RW_Prescott150.jpg" border="1"><BR>
  <STRONG>R.W. Shelton J. Prescott</STRONG><BR>
  <EM>Deputy Grand Master</EM><BR>
  email: preswidowson51@hotmail.com<BR><BR>

  </DIV>
  
<DIV><IMG width="150" height="150" title="RW_Tisan150" alt="" src="../images/RW_Tisan150.jpg" border="1"><BR>
  <STRONG><a href="#" class="link" data-reveal-id="myModal">R.W. Tisan Rasool Dawud</a></STRONG><BR>
  <EM>Senior Grand Warden</EM><BR>
  email: tisanDawud@aol.com<BR><BR>
  
  
  <div id="myModal" class="reveal-modal [large]">
<p class=MsoNormal align=center style="margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal"><span style="font-size:12.0pt">Tisan Rasool
Dawud<o:p></o:p></span></p>

<p class=MsoNormal align=center style="margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal"><span style="font-size:12.0pt">289
Edwards Road<o:p></o:p></span></p>

<p class=MsoNormal align=center style="margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal"><span style="font-size:12.0pt">Parsippany,
NJ 07054<o:p></o:p></span></p>

<p class=MsoNormal align=center style="margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal"><span style="font-size:12.0pt">(908)966-1088<o:p></o:p></span></p>

<p class=MsoNormal align=center style="margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal"><span style="font-size:12.0pt">TisanDawud@aol.com<o:p></o:p></span></p>

<p class=MsoNormal style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:12.0pt"><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style="line-height:normal"><span style="font-size:12.0pt">Name:<span
style="mso-tab-count:3">                         </span>Tisan Rasool Dawud<o:p></o:p></span></p>

<p class=MsoNormal style="line-height:normal"><span style="font-size:12.0pt">Born:<span
style="mso-tab-count:3">                           </span>February 21, 1969<o:p></o:p></span></p>

<p class=MsoNormal style="line-height:normal"><span style="font-size:12.0pt">Where:<span
style="mso-tab-count:2">                        </span>Newark, New Jersey<o:p></o:p></span></p>

<p class=MsoNormal style="line-height:normal"><span style="font-size:12.0pt">Employment:<span
style="mso-tab-count:2">               </span>Alpine Mortgage Company<o:p></o:p></span></p>

<p class=MsoNormal style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:12.0pt">College:<span style="mso-tab-count:2">                       </span>NJIT/Thomas
Edison State College<o:p></o:p></span></p>

<p class=MsoNormal style="margin-top:0in;margin-right:0in;margin-bottom:0in;
margin-left:1.0in;margin-bottom:.0001pt;text-indent:.5in;line-height:normal"><span
style="font-size:12.0pt">Bachelors in Mathematics and Science<o:p></o:p></span></p>

<p class=MsoNormal style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:12.0pt"><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style="line-height:normal"><span style="font-size:12.0pt">Marital
Status:<span style="mso-tab-count:2">                        </span>Married to Sis
Rosita M. Dawud<o:p></o:p></span></p>

<p class=MsoNormal style="margin-left:1.5in;text-indent:-1.5in;line-height:
normal"><span style="font-size:12.0pt">Children:<span style="mso-tab-count:
1">                     </span>Bro Amir Dawud, Omari Dawud (Grand Master
Councilor of the Order of Pythagorans), Sabreen Dawud<o:p></o:p></span></p>

<p class=MsoNormal style="text-align:justify;line-height:normal"><span
style="font-size:12.0pt">Place of Worship:<span style="mso-tab-count:1">        </span>Masjid
Al-Haqq, Newark, NJ<o:p></o:p></span></p>

<p class=MsoNormal style="text-align:justify;line-height:normal"><span
style="font-size:12.0pt">Hobbies:<span style="mso-tab-count:2">                      </span>Fishing,
target practice, reading, and watching sports.<o:p></o:p></span></p>

<p class=MsoNormal style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:12.0pt;mso-fareast-font-family:"Times New Roman";
color:black">Fraternal affiliations: <span style="mso-tab-count:1"> </span>Tyre
Lodge #29<o:p></o:p></span></p>

<p class=MsoNormal style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:12.0pt;mso-fareast-font-family:"Times New Roman";
color:black"><span style="mso-tab-count:2">                        </span><span
style="mso-tab-count:1">            </span>Worshipful Master of Tyre Lodge #29
(Served 2006-2007)<o:p></o:p></span></p>

<p class=MsoNormal style="margin-top:0in;margin-right:0in;margin-bottom:0in;
margin-left:1.0in;margin-bottom:.0001pt;text-indent:.5in;line-height:normal"><span
style="font-size:12.0pt;mso-fareast-font-family:"Times New Roman";color:black">Senior
Grand Warden of the MWPHGLNJ (elected in June, 2013)<o:p></o:p></span></p>

<p class=MsoNormal style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:12.0pt;mso-fareast-font-family:"Times New Roman";
color:black"><span style="mso-tab-count:3">                                    </span>Past
Potentate of Golconda Temple #24 AEAONMS (served 2012)<span style="mso-tab-count:
1">   </span><span style="mso-tab-count:3">                                    </span><span
style="mso-tab-count:1">            </span>Past Deputy of the North of the
Grand Council Order of Pythagorans</span><span style="font-size:12.0pt;
font-family:"Times New Roman","serif";mso-fareast-font-family:"Times New Roman";
color:black"><o:p></o:p></span></p>

<p class=MsoNormal style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:12.0pt;mso-fareast-font-family:"Times New Roman";
color:black"><span style="mso-tab-count:3">                                    </span>Worthy
Patron, Princess Tyre Chap #52, Order of Eastern Star (2008/09)<o:p></o:p></span></p>

<p class=MsoNormal style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:12.0pt;mso-fareast-font-family:"Times New Roman";
color:black"><span style="mso-tab-count:3">                                    </span>Rising
Sun #7, HRAM, Newark NJ</span><span style="font-size:12.0pt;font-family:"Times New Roman","serif";
mso-fareast-font-family:"Times New Roman";color:black"><o:p></o:p></span></p>

<p class=MsoNormal style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:12.0pt;mso-fareast-font-family:"Times New Roman";
color:black"><span style="mso-tab-count:3">                                    </span>Haggai
Council #1, R&amp;SM, Paterson NJ</span><span style="font-size:12.0pt;
font-family:"Times New Roman","serif";mso-fareast-font-family:"Times New Roman";
color:black"><o:p></o:p></span></p>

<p class=MsoNormal style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:12.0pt;mso-fareast-font-family:"Times New Roman";
color:black"><span style="mso-tab-count:3">                                    </span>St.
Paul Commandery #7, Knights Templar, Plainfield NJ</span><span
style="font-size:12.0pt;font-family:"Times New Roman","serif";mso-fareast-font-family:
"Times New Roman";color:black"><o:p></o:p></span></p>

<p class=MsoNormal style="margin-top:0in;margin-right:0in;margin-bottom:0in;
margin-left:1.5in;margin-bottom:.0001pt;line-height:normal"><span
style="font-size:12.0pt;mso-fareast-font-family:"Times New Roman";color:black">The
United Supreme Council AASR, Grand Inspector General of the 33 Degree<o:p></o:p></span></p>

<p class=MsoNormal style="margin-top:0in;margin-right:0in;margin-bottom:0in;
margin-left:1.5in;margin-bottom:.0001pt;line-height:normal"><span
style="font-size:12.0pt;mso-fareast-font-family:"Times New Roman";color:black">Sardonias
Consistory #41 AASR PHA, Newark, NJ, 2<sup>nd</sup> Lieutenant Commander.<o:p></o:p></span></p>

<p class=MsoNormal style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:12.0pt;mso-fareast-font-family:"Times New Roman";
color:black"><span style="mso-tab-count:3">                                    </span>Phi
Beta Sigma Fraternity, Inc. Life Member, Past Chapter President<o:p></o:p></span></p>

<p class=MsoNormal style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:12.0pt;mso-fareast-font-family:"Times New Roman";
color:black"><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style="margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal"><span style="font-size:12.0pt;mso-fareast-font-family:"Times New Roman";
color:black">Honors:<span style="mso-tab-count:2">                        </span>Awarded
</span><span style="font-size:12.0pt">Master Mason of the Year by Tyre Lodge
#29, 2002<span style="mso-tab-count:1">         </span><o:p></o:p></span></p>

<p class=MsoNormal style="margin-top:0in;margin-right:0in;margin-bottom:0in;
margin-left:1.0in;margin-bottom:.0001pt;text-indent:.5in;line-height:normal"><span
style="font-size:12.0pt">Awarded the MWPHGLNJ’s “Mover and Shaker Award” in
2007<o:p></o:p></span></p>

<p class=MsoNormal style="margin-top:0in;margin-right:0in;margin-bottom:0in;
margin-left:1.0in;margin-bottom:.0001pt;text-indent:.5in;line-height:normal"><span
style="font-size:12.0pt">Awarded the Drum Major for Justice Award by Jephthah
Lodge #56 2010<o:p></o:p></span></p>

<p class=MsoNormal style="margin-top:0in;margin-right:0in;margin-bottom:0in;
margin-left:1.0in;margin-bottom:.0001pt;text-indent:.5in;line-height:normal"><span
style="font-size:12.0pt">Awarded the Golconda Noble of the Year by the Shriners
in 2010<o:p></o:p></span></p>

<p class=MsoNormal style="margin-top:0in;margin-right:0in;margin-bottom:0in;
margin-left:1.5in;margin-bottom:.0001pt;line-height:normal"><span
style="font-size:12.0pt">Awarded “Teacher of the Year” by Zeta Phi Beta
Sorority (2012)</span><span style="font-size:12.0pt;font-family:"Times New Roman","serif";
mso-fareast-font-family:"Times New Roman";color:black"><o:p></o:p></span></p>
  <a class="close-reveal-modal">&#215;</a>
</div>



  </DIV>

<DIV><IMG width="150" height="150" title="RW_Span150" alt="" src="../images/RW_Span150.jpg" border="1"><BR>
  <STRONG>R.W. Jeffrey C. Spann</STRONG><BR>
  <EM>Junior Grand Warden</EM><BR>
  email: jeffreycspann@gmail.com<BR><BR>

  </DIV>
  
<DIV><IMG width="150" height="150" title="RW_Nelson150" alt="" src="../images/RW_Nelson150.jpg" border="1"><BR>
  <STRONG>M.W. Ramon E. Nelson</STRONG><BR>
  email: RA_nelson42@yahoo.com<BR>
  <EM>Grand Treasurer</EM><BR><BR>
  </DIV>
  
<DIV><IMG width="150" height="150" title="RW_Allen150" alt="" src="../images/RW_Allen150.jpg" border="1"><BR>
  <STRONG>R.W. James G. Allen</STRONG><BR>
  email: blessed88@aol.com<BR>
  <EM>Grand Secretary</EM><BR><BR>
  </DIV>
  
<DIV><IMG alt="" src="../images/officerPlaceholderPic.jpg" border="1"><BR>
  <STRONG>R.W. Obreen N. Harris</STRONG><BR>
  <EM>Grand Treasurer Emeritus</EM><BR><BR>
  </DIV>
  
<DIV><IMG alt="" src="../images/RW_revels2.jpg" border="1"><BR>
  <STRONG>R.W. William R. Revels</STRONG><BR>
  email: wrrevels@verizon.net<BR>
  <EM>Grand Treasurer Emeritus</EM><BR><BR>
  </DIV>
  
<DIV><IMG alt="" src="../images/officerPlaceholderPic.jpg" border="1"><BR>
  <STRONG>R.W. Clifford J. Simpson</STRONG><BR>
  email: simpnjon@comcast.net<BR>
  <EM>Grand Secretary Emeritus</EM><BR><BR>
  </DIV>
    </DIV>';
	
switch($_GET['mod']) { 

case 'ddgm':
$content = $ddgm;
break;
 
case 'glo': 
$content = $glo; 
break;
} 
echo $content;
?>

<!-- End content from old site-->

</div>
<ul class="breadcrumbs">
<li><a href="officers.php?mod=glo" class="">Grand Lodge Officers</a></li>
<li><a href="officers.php?mod=ddgm" class="">DDGM’s and GDL’s</a></li>
</ul>
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