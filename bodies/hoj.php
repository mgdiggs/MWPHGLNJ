<style>
.panel h4,.panel h3, .panel h3, .panel b{color:#F00;}
</style>
<div class="row"> 
<div class="large-7 columns">
<div class="panel">
<h3>Bethlehem Grand Court<br>
Heroines of Jericho (PHA)</h3>
<h4>State of New Jersey<br>
Instituted July 9, 1921</h4>
</div>
<div class="panel">

<p align="center" style="padding-bottom:200px;"><img src="images/hoj.png" style="margin:10px;"></p>



</div>
<div class="panel">
<h4 align="left">Past Most Ancient Grand Matrons/Past Most Worthy Grand Joshuas</h4>
<table border="0" align="center" style="border-radius: 15px;">
<tr>
<td><b>Past Most Ancient Grand Matrons</b></td><td><b>Past Most Worthy Grand Joshuas</b></td>
</tr><tr>
<td align="center"><img src="images/sm_magmcrown2.jpg"></td><td align="center"><img src="images/sm_mwgjcrown2.jpg"></td>
</tr><tr>
<td> HELEN M. JONES</td>
<td></td>
</tr><tr>
<td>ERNESTINE W. THOMAS</td><td>NATHAN W. JONES</td>
</tr>
<tr>
<td>DOROTHY M. THOMASON</td><td></td>
</tr>
<tr>
<td>GERTRUDE BRADLEY</td><td>LORENZO NIX</td>
</tr>
<tr>
<td>MARGARET J. LEWIS</td><td>JESSE PULLEM</td>
</tr>
<tr>
<td>DOROTHY B. GILBERT</td><td>JAMES E. LOCKLEY</td>
</tr>
<tr>
<td>CHARLOTTE BRADLEY</td><td>WILLIAM R. REVELS</td>
</tr>
<tr>
<td>JOYCE A. GRACE-BROWN</td>
<td></td>
</tr><tr>
<td>ERNESTINE H. BUCK</td><td>GENE RUFF</td>
</tr><tr>
<td>GLORIA G. ELLZY</td><td>EMMETT R. KING</td>
</tr><tr>
<td>CARLOTTA M. CASEY</td><td>VERNELL ELLZY</td>
</tr><tr>
<td>DARLENE I. PAGE</td><td>JOHN GRINNAGE</td>
</tr>
</table>

</div>

<div class="panel">
<h4 align="left">Dates to Remember</h4>

<p><b>Placeholderr #1</b><br>
Date<br>
Time<br>
Location</p>
</div>

</div>

<div class="large-5 columns">
<div class="panel">

<?php
echo "<p style='text-align:center'>";
include ('db_con.php');
$opt = $_GET['id'];
$get_officers0 = mysql_query("SELECT A.url as image, A.name as name, A.title as title, A.masonic_body, B.update_access_code 
							  FROM gl_officers A, masonic_bodies B
							  WHERE B.update_access_code = A.masonic_body and B.id='$opt' LIMIT 0,2");
	while($getresults0 = mysql_fetch_array($get_officers0))
 	{
	echo "<img src='".$getresults0['image']."'>&nbsp";
	}
$get_officers1 = mysql_query("SELECT A.url as image, A.name as name, A.title as title, A.masonic_body, B.update_access_code 
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
    <p class="title" data-section-title><a>First HOJ District (North)</a></p>
    <div class="content" data-section-content>

    <p><b>Amorite Court No. 4</b><br />
    Meets 4th Tuesday<br />
    Friendship Masonic Temple<br />
    78 Summit Avenue<br />
    Jersey City, NJ 07304</p>

    <p><b>Ruth Court No. 5</b><br />
    Meets 3rd Monday<br />
    MWPHGL-Grand East<br />
    188-190 Irvine Turner Blvd.<br />
    Newark, NJ 07108</p>
    
    <p><b>Deborah Court No. 9</b><br />
    Meets 1st Friday<br />
    Eureka Masonic Temple<br />
    173 Glen Ridge Avenue<br />
    Montclair, NJ 07042</p>

    <p><b>Miriam Court No. 14</b><br />
    Meets 3rd Thursday<br />
    Integrity Masonic Temple<br />
    224 Broadway<br />
    Paterson, NJ 07501</p>

    <p><b>Orpah Court No. 17</b><br />
    Meets 1st Sunday<br />
    Stone Square Masonic Temple<br />
    722 St. Mary's Avenue<br />
    Plainfield, NJ 07061</p>
    
    <p>Heroine Pearl Moore (17)<br>
	Grand District Deputy No. 1</p>
    
    <p>Heroine Nadyne Johnson-Pryor (9)<br>
    Grand District Lecturer No. 1</p>
    </p>
    </div>
  </section>
  
  <section>
    <p class="title" data-section-title><a>Second HOJ District (South)</a></p>
    <div class="content" data-section-content>
    
    <p><b>Bathsheba Court No. 10</b><br />
    Meets 4th Friday<br />
    Mt. Pisgah Masonic Temple<br />
    930 Cookman Avenue<br />
    Asbury Park, NJ 07712</p>

    <p><b>Naomi Court No. 11</b><br />
    Meets 2nd Thursday<br />
    Hiram Masonic Temple<br />
    143 Warwick Road<br />
    Lawnside, NJ 08045</p>

    <p><b> Fiha Court No. 13</b><br />
    Meets 1st Thursday<br />
    Shekinah Masonic Temple<br />
    208 Progress Street<br />
    Riverside, NJ 08057</p>

    <p><b>Rahab Court No. 15</b><br />
    Meets 2nd Wednesday<br />
    Hiram Abiff Masonic Temple<br />
    6829 Washington Ave<br />
    Pleasantville, NJ 08232</p>

    <p><b>Alpha Court No. 16</b><br />
    Meets 2nd Monday<br />
    King David Masonic Temple<br />
    81 Bellevue Avenue<br />
    Trenton, NJ 08618</p>
    
    <p>Heroine Edna Iverson (13)<br />
    Grand District Deputy No. 2</p>

    <p>Heroine Mary E. Ruff (16)<br />
    Grand District Lecturer No. 2</p>
    </p>
    </div>
  </section>  

</div>
</p>
</div>
</div>


</div><!-- end row -->