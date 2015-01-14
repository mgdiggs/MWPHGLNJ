<?php
  //connect to DB
  include ('db_con.php');
  
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
		  
		$district = $district_nbr; 
		  
		$results1 = mysql_query("SELECT *
								 FROM gl_officers
								 WHERE DISTRICT = $district");
				
        $results2 = mysql_query("SELECT *								
								 FROM lodges
								 WHERE DISTRICT = $district order by lodge_nbr");
		
  		while($num1 = mysql_fetch_array($results1)){
			
		  if($num1['title']=='District Deputy Grand Master'){
			echo "<h2>Lodges of the ".$num1['district'].PrintSuffix($num1['district'])." Masonic District</h2>";
				if($num1['email']==''){
					echo "<p>".$num1['name']." - ".$num1['title']."<br>";
				}else{
					echo "<p><a href='mailto:".$num1['email']."'>".$num1['name']."</a> - ".$num1['title']."<br>";
				}  
		  }
		  if($num1['title']=='Asst. District Deputy Grand Master' || $num1['title']=='District Deputy Grand Master at Large'){
				if($num1['email']==''){
					echo $num1['name']." - ".$num1['title']."<br>";
				}else {
					echo "<a href='mailto:".$num1['email']."'>".$num1['name']."</a> - ".$num1['title']."<br>";
				}	
		  }	  
		  if($num1['title']=='District Grand Lecturer'){
		  	if($num1['email']==''){
			echo $num1['name']." - ".$num1['title']."</p>";
		}else{
			echo "<a href='mailto:".$num1['email']."'>".$num1['name']."</a> - ".$num1['title']."</p>";
		}	
		  }
		}
		
		while($num2 = mysql_fetch_array($results2)){
		echo"<div id='lodges'>";
		
		 if($num2['url']==' ' || $num2['url']==''){
			echo "<p>".$num2['lodge_name']." Lodge No. ".$num2['lodge_nbr']."<br>";
		 }
		 else{
			echo "<p><a href='".$num2['url']."' title='Click to view Lodge website'>".$num2['lodge_name']." Lodge No. ".$num2['lodge_nbr']."</a><br>";
		 }
		 if ($num2['wm'] == ' ' || $num2['wm'] == ''){
			}
		 else{
			 	 if($num2['wm_email']==' ' || $num2['wm_email']==''){
				echo "WM ".$num2['wm']."<br>";
				 }
				 else{
				echo "<a href='mailto:".$num2['wm_email']."'>WM ".$num2['wm']."</a><br>"; 
			 	}
			 }
		echo $num2['meeting_info']."<br>";
		echo $num2['street']."<br>";
		 if ($num2['street2'] == ' ' || $num2['street2'] == ''){
		    }
		 else{echo $num2['street2']."<br>";}
		echo $num2['city'].", ".$num2['state']." ".$num2['zip']."<br>";
		echo $num2['phone']."<br> </p>";
		echo "</div>";
		}
	  }
	  
 function GetActive($district){
 $district_url = $_GET['mod'];
	 if ($district_url == $district){
		 echo"<section class='active'>";
		}else{
			echo"<section>";
			 }
  }	 //close function
  
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

</head>
<body>

<?php 
require ('menu.php');
?>  
<!-- Main Grid Section -->

<div class="row" style="padding-top:10px;">
<p align="center"><img src="images/other_page_header.png">
<h2 style="color:#FFF; margin-top:-25%; margin-left:10%">Subordinate Lodges</h2>
</p>
</div>

 
<div class="row" style="padding-top:10%;">
 
<div class="large-18 columns" style="border-top:solid #010068;  background-color:#FFFFFF; border-radius:10px;">

<section class="section-container auto" data-section>
  <? GetActive(1)?>
    <p class="title" data-section-title-resized><a href="#panel1">1st District</a></p>
    <div class="content" data-section-content>

        <?php
		 FindDistrict(1)
		?>        

    </div>
  </section>
  
  <? GetActive(2)?>
    <p class="title" data-section-title><a href="#panel2">2nd District</a></p>
    <div class="content" data-slug="panel2" data-section-content>

        <?php
		 FindDistrict(2)
		?>        

    </div>
  </section>
 
  <? GetActive(3)?>
    <p class="title" data-section-title><a href="#panel3">3rd District</a></p>
    <div class="content" data-slug="panel3" data-section-content>

        <?php
		 FindDistrict(3)
		?>        

    </div>
  </section>

  <? GetActive(4)?>
    <p class="title" data-section-title><a href="#panel4">4th District</a></p>
    <div class="content" data-section-content>

        <?php
		 FindDistrict(4)
		?>        

    </div>
  </section>

  <? GetActive(5)?>
    <p class="title" data-section-title><a href="#panel5">5th District</a></p>
    <div class="content" data-section-content>

        <?php
		 FindDistrict(5)
		?>        

    </div>
  </section>

  <? GetActive(6)?>
    <p class="title" data-section-title><a href="#panel6">6th District</a></p>
    <div class="content" data-section-content>

        <?php
		 FindDistrict(6)
		?>        

    </div>
  </section>

  <? GetActive(7)?>
    <p class="title" data-section-title><a href="#panel7">7th District</a></p>
    <div class="content" data-section-content>

        <?php
		 FindDistrict(7)
		?>        

    </div>
  </section>
 
  <? GetActive(8)?>
    <p class="title" data-section-title><a href="#panel8">8th District</a></p>
    <div class="content" data-section-content>

        <?php
		 FindDistrict(8)
		?>        

    </div>
  </section>

<!-- <section>
    <p class="title" data-section-title><a href="#bottom">LORE No. 2006</a></p>
  </section>-->  
    
</section> <!-- End selection -->
</div>
</div> <!-- End row -->
  
<div class="row" style="margin-top:20px;">
<span id="bottom"></span> 
<div class="large-8 columns" style="margin-bottom:20px;">
<div class="panel">
<h3>LORE 2006</h3>
<h5>New Jersey (PHA) Masonic Lodge of Research and Education 2006</h5>
<p><h4>Mission Statement</h4>
<i>The Purpose of the Lodge of Research and Education No. 2006 shall be to seek knowledge into the History of Freemasonary and to assist all of the Craft in a better understanding of this Progressive Science.</i></p>

<h5>Elected & Appointed Officers 2013-2014</h5>
<p>Worshipful Master - Marc A. Jones, Sr (1)</br>
Secretary - Ricardo C. Goldstein</p>

<p><b><a href='documents/REVISED_LORE_NO._2006_Letterhead_2012-13.pdf'>Click here</a></b> to read the message from WB Jones & view upcoming meeting dates/time</p>

<p>**Any Prince Hall Master Mason or those recognized by the MWPHGL, F&AM, State of New Jersey may attend.** For more information about the LORE No. 2006 please call:<br>
Worshipful Marc A. Jones, Sr<br>
856-357-4568</p>
</div>
</div>
<div class="large-4 columns">
<div class="panel">
<h5>LORE Archives/Papers</h5>
<table border="0">
  <tbody>
    <tr>
      <td><h5>Title</h5></td>
      <td><h5>Notes</h5></td>
    </tr>
    <tr>
      <td> <a href="http://www.mwphglnj.org/documents/Lore%20Archives/Related%20Papers/Richard%20Allen-Mother%20Bethel%20History.doc">Richard Allen-Mother Bethel History.rtf</a></td>
      <td></td>
    </tr>
    <tr>
      <td> <a href="http://www.mwphglnj.org/documents/Lore%20Archives/Related%20Papers/Prince%20Hall%20Recognition.rtf">Prince Hall Recognition.rtf</a></td>
      <td></td>
    </tr>
    <tr>
      <td> <a href="http://www.mwphglnj.org/documents/Lore%20Archives/Related%20Papers/Good%20Character.rtf">Good Character.doc</a></td>
      <td></td>
    </tr>
    <tr>
      <td> <a href="http://www.mwphglnj.org/documents/Lore%20Archives/Related%20Papers/BisselOkay.jpg">Bissel Okay.jpg</a></td>
      <td></td>
    </tr>
  </tbody>
</table>
<h5> Related Articles</h5> 
<table border="0">
  <tbody>
    <tr>
      <td><h5>Title</h5></td>
    </tr>
    <tr>
      <td> <a href="http://www.mwphglnj.org/documents/Lore%20Archives/Lore%20Papers/Attach%232A.jpg">Attach#2A.jpg</a></td>
    </tr>
    <tr>
      <td><a href="http://www.mwphglnj.org/documents/Lore%20Archives/Lore%20Papers/Attach%232.jpg">Attach#2.jpg</a></td>
    </tr>
    <tr>
      <td><a href="http://www.mwphglnj.org/documents/Lore%20Archives/Lore%20Papers/Attach%231.jpg">Attach#1.jpg</a></td>
    </tr>
    <tr>
      <td><a href="http://www.mwphglnj.org/documents/Lore%20Archives/Lore%20Papers/Attach%233A-1.rtf">Attach3A-1.rtf</a></td>
    </tr>
    <tr>
      <td><a href="http://www.mwphglnj.org/documents/Lore%20Archives/Lore%20Papers/Attach%233.rtf">Attach#3.rtf</a></td>
    </tr>
    <tr>
      <td><a href="http://www.mwphglnj.org/documents/Lore%20Archives/Lore%20Papers/ABSALOM%20JONES-eg.doc">ABSALOM JONES-eg.doc</a></td>
    </tr>
    <tr>
      <td><a href="http://www.mwphglnj.org/documents/Lore%20Archives/Requirements.rtf">Requirements.rtf</a></td>
    </tr>
  </tbody>
</table>
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