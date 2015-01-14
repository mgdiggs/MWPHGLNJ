<style>
.panel h4,.panel h3, .panel h3, .panel b{color:#000;}
</style>
<div class="row">
<div class="large-7 columns">
<div class="panel">
<h3>Celestial Grand Court - Order of Cyrene (PHA)</h3>
<b>State of New Jersey</b>
</div>
<div class="panel">
<p style="margin-bottom:200px; text-align:center;"><img src="images/Cyrene.png" style="margin:10px;">
</p>
</div>

<div class="panel">
<h4 align="right">Date to Remember</h4>

<p><b>Place holder #1</b><br>
Date<br>
Time<br>
Info</p>
</div>

</div>

<div class="large-5 columns">
<div class="panel">

<?php
echo "<p style='text-align:center'>";
include ('db_con.php');
$opt = $_GET['id'];
$get_officers0 = mysql_query("SELECT A.image, A.name, A.title, A.masonic_body, B.update_access_code 
							  FROM gl_officers A, masonic_bodies B
							  WHERE B.update_access_code = A.masonic_body and B.id='$opt' LIMIT 0,2");
	while($getresults0 = mysql_fetch_array($get_officers0))
 	{
	echo "<img src='".$getresults0['image']."'>&nbsp";
	}
$get_officers1 = mysql_query("SELECT A.image, A.name, A.title, A.masonic_body, B.update_access_code 
							  FROM gl_officers A, masonic_bodies B
							  WHERE B.update_access_code = A.masonic_body and B.id='$opt' LIMIT 0,2");	
	while($getresults1 = mysql_fetch_array($get_officers1))
 	{
	echo "<h5 align='center'>".$getresults1['name']."<br>".$getresults1['title']."</h5>";
	}	

  echo "</p>
  <table style='border-radius: 15px;'>";

$get_officers2 = mysql_query("SELECT A.name as name, A.title as title, A.masonic_body, B.update_access_code 
							  FROM gl_officers A, masonic_bodies B
							  WHERE B.update_access_code = A.masonic_body and B.id='$opt' LIMIT 2,99");
	while($getresults2 = mysql_fetch_array($get_officers2))
 	{
	echo "<tr><td width='60%'>".$getresults2['name']."</td><td>".$getresults2['title']."</td></tr>";
	}
  mysql_close();
  echo "</table>";
?>

</div>
</div>

<div class="large-5 columns">
<div class="panel">
<p>
<h4 align="right">Subordinate Courts</h4>
<div class="section-container accordion" data-section="accordion">
  
  <section>
    <p class="title" data-section-title><a>Mary Magdalene Royal Court No. 1</a></p>
    <div class="content" data-section-content>
    <p><b>Mary Magdalene Royal Court No. 1</b><br />
    Meets 3rd Monday<br />
    King David Masonic Lodge<br />
    81 Bellevue Avenue<br />
    Trenton, NJ 08618</p>
</div>
  </section>
  
  <section>
    <p class="title" data-section-title><a>Rose of Sharon Royal Court No. 4</a></p>
    <div class="content" data-section-content>
    <p><b>Rose of Sharon Royal Court No. 4</b><br />
    Meets 1st Wednesday<br />
    MWPHGL Grand East<br />
    190 Irvine Turner Blvd.<br />
    Newark, NJ 07108</p>
</div>
  </section>
  
  <section>
    <p class="title" data-section-title><a>Salome Royal Court No. 7</a></p>
    <div class="content" data-section-content>
    <p><b>Salome Royal Court No. 7</b><br />
    Meets 1st Thursday<br />
    Progressive Masonic Temple<br />
    186 Hale Street<br />
    New Brunswick, NJ 08901</p>
</div>
  </section>
  
  <section>
    <p class="title" data-section-title><a>Mt. Olive Royal Court No. 10</a></p>
    <div class="content" data-section-content>
    <p><b>Mt. Olive Royal Court No. 10</b><br />
    Meets 2nd Sunday<br />
    Prince Hall Masonic Temple<br />
    323 North New York Avenue<br />
    Atlantic City, NJ 08401</p>
</div>
  </section>
  
  <section>
    <p class="title" data-section-title><a>Cyrenaica Royal Court No. 11</a></p>
    <div class="content" data-section-content>
    <p><b>Cyrenaica Royal Court No. 11</b><br />
    Meets the 4th Monday<br />
    Hiram Temple<br />
    143 Warwick Road<br />
    Lawnside, NJ 08045</p>
</div>
  </section>
  
  <section>
    <p class="title" data-section-title><a>Orion Royal Court No. 12</a></p>
    <div class="content" data-section-content>
    <p><b>Orion Royal Court No. 12</b><br />
    Meets the 4th Wednesday<br />
    Shiloh Masonic Temple<br />
    37 Bennett Road<br />
    Englewood, NJ 07631</p>
</div>
  </section>
  
</div>
</p>
</div>

</div>


</div><!-- end row -->