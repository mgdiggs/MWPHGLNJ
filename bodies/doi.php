<style>
.panel h4,.panel h3, .panel h3, .panel b{color:#090;}
</style>
<div class="row"> 

<div class="large-7 columns">
<div class="panel">
<h3>Daughters of Isis - Desert of New Jersey</h3>
</div>
<div class="panel">

<p align="center">Daughters of Isis
Imperial Court Organized August 24, 1910
auxiliary of the Ancient Egyptian Arabic Order Nobles
of the Mystic Shrine of
North &amp; South America and its Jurisdictions, Inc. (PHA)</p>
<p align="center"><img src="images/doipha.png" style="margin:10px;"></p>
</div>

<div class="panel">
<h4>History of the Imperial Court, Daughters of Isis</h4>
<p><img src="images/doifez.png" align="left" style="margin:10px;">The Imperial Court, Daughters of Isis, is an auxiliary of female family members of Prince Hall Shriners, and was formally organized at the annual session of the Ancient Egyptian Arabic Order Nobles of the Mystic Shrine, held in Detroit, Michigan, on August 24, 1910.</p>

<p>The establishment of the Imperial Court was a result of a meeting held in 1909, when women representing the Daughters of Isis from Maryland, Rhode Island and Washington, DC, met with a committee of Prince Hall Shriners and requested the formation and recognition of an organization for their women relatives.</p>

<p>The purpose of the Imperial Court, Daughters of Isis, is to unite the relatives of all members of the A.E.A.O.N.M.S. into one common bond of friendship, to practice charity and benevolence, and to inculcate honor and integrity as symbolized in the legend of the Egyptian queen, the goddess Isis.</p>

<p>The Imperial Court, Daughters of Isis, a charitable and benevolent organization, stresses the development of powerful leaders, encourages health awareness among youth and adults, provides services to help disabled and senior citizens, provides for effective networking among its members and other organizations, recognizes and celebrates the historic and current achievement of African American women, exerts positive influence and utilizes the tool of role modeling for youth, teenage mothers, high school and college students, and disseminates information for educational opportunities and career planning to youth and young adults.</p>

<p>Specific program thrusts include education and scholarship, health, mentoring our youth for tomorrow, book bags and school supplies for adopted schools, and the Isiserettes/Youth. In addition to volunteer activities, financial donations are made annually to College Fund/UNCF, scholarships, Health and Medical Research, American Cancer Society, Mental Retardation, NAACP, National Foundation (Birth Defects), HIV/AIDS Awareness and other civic and special interests.</p>

<p>This organization of 12 courts at its inception has grown to almost 200 courts located in the United States, Canada, the Bahamas, Germany, Italy, and Japan.</p>

<p>For more information, visit <a title="Imperial Court Daughters of Isis, PHA" href="http://www.doipha.org" target="_blank">http://www.doipha.org</a></p>
</div>
</div>

<div class="large-5 columns">
<div class="panel">

<?php
echo "<p style='text-align:center'>";
include ('db_con.php');
$opt = $_GET['id'];
$get_officers1 = mysql_query("SELECT A.image as image, A.name as name, A.title as title, A.masonic_body, B.update_access_code 
							  FROM gl_officers A, masonic_bodies B
							  WHERE B.update_access_code = A.masonic_body and B.id='$opt' LIMIT 0,1");
	while($getresults1 = mysql_fetch_array($get_officers1))
 	{
	echo "<img src='".$getresults1['image']."'>
	<h5 align='center'>".$getresults1['name']."<br>".$getresults1['title']."</h5>";
	}

  echo "</p>
  <table style='border-radius: 15px;'>";

$get_officers2 = mysql_query("SELECT A.name as name, A.title as title, A.masonic_body, B.update_access_code 
							  FROM gl_officers A, masonic_bodies B
							  WHERE B.update_access_code = A.masonic_body and B.id='$opt' LIMIT 1,99");
	while($getresults2 = mysql_fetch_array($get_officers2))
 	{
	echo "<tr><td width='50%'>".$getresults2['name']."</td><td>".$getresults2['title']."</td></tr>";
	}
  mysql_close();
  echo "</table>";
?>
<!--
<p style="text-align:center">
<img src='http://placehold.it/150x200'>
<h5 align="center">Dt. Florence Sylvester, PC 
<br>Imperial Deputy for the Desert of New Jersey</h5>
</p>
<table style="border-radius: 15px;">
<tr>
<td width="50%">Dt. Lisa L. Ragland (14)</td><td>Deputy of the Oasis - Atlantic City</td>
</tr><tr>
<td>Dt. Sylvia E. James, PC (16)</td><td>Deputy of the Oasis - Newark</td>
</tr><tr>
<td>Dt. Barbara Ann Sanders (118)</td><td>Deputy of the Oasis - Princeton</td>
</tr><tr>
<td>Dt. Dorothy W. Wyatt (135)</td><td>Deputy of the Oasis - Camden</td>
</tr><tr>
<td>Dt. Barbara LaMar (136)</td><td>Deputy of the Oasis - Asbury Park</td>
</tr>
</table>
-->
</div>
</div>

<div class="large-5 columns">

<div class="panel">
<h4 align="right">Date to Remember</h4>

<p><b>Desert Conference</b><br>
Feb 7th & 8th, 2014<br>
Hanover Marriott<br>
Whippany, NJ</p>

</div>

<div class="panel">
<p>
<h4 align="right">Courts</h4>
<div class="section-container accordion" data-section="accordion">
  <section>
    <p class="title" data-section-title><a>Oasis of Camden</a></p>
    <div class="content" data-section-content>
    <p><b>Zamora Court No. 135</b><br />
    Meets 2nd Tuesday<br />
    Oriental Masonic Temple<br />
    1473 South 8th Street<br />
    Camden, NJ 08104</p>
  </div>
  </section>
  
  <section>
    <p class="title" data-section-title><a>Oasis of Princeton</a></p>
    <div class="content" data-section-content>
    <p><b>Khufu Court No. 118</b><br />
    Meets 4th Tuesday<br />
    Aaron Masonic Temple<br />
    John &amp; McLean Street<br />
    Princeton, NJ 08540</p>
    </div>
  </section>  

  <section>
    <p class="title" data-section-title><a>Oasis of Atlantic City</a></p>
    <div class="content" data-section-content>
    <p><b>Azure Court No. 14</b><br />
    Meets 3rd Sunday<br />
    Prince Hall Masonic Temple<br />
    323 North New York Avenue<br />
    Atlantic City, NJ 08401</p>
    </div>
  </section>  

  <section>
    <p class="title" data-section-title><a>Oasis of Asbury Park</a></p>
    <div class="content" data-section-content>
    <p><b>Mahja Court No. 136</b><br />
    Meets 4th Wednesday<br />
    Mt. Pisgah Masonic Temple<br />
    930 Cookman Avenue<br />
    Asbury Park, NJ 07712</p>
    </div>
  </section> 
  
  <section>
    <p class="title" data-section-title><a>Oasis of Newark</a></p>
    <div class="content" data-section-content>
    <p><b>Golconda Court No. 16</b><br />
    Meets 3rd Tuesday<br />
    MWPHGL Grand East<br />
    190 Irvine Turner Blvd<br />
    Newark, NJ 0710</p>
    </div>
  </section>

</div>
</p>
</div>
</div>


</div><!-- end row -->