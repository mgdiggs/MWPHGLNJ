<style>
.panel h4,.panel h3, .panel h3, .panel b{color:#090;}
</style>
<div class="row"> 

<div class="large-7 columns">
<div class="panel">
<h3>A.E.A.O.N.M.S - Desert of New Jersey</h3>
</div>
<div class="panel">

<p align="center">Desert of New Jersey<br>
Ancient Egyptian Arabic Order Nobles
of the Mystic Shrine of
North &amp; South America and its Jurisdictions, Inc. (PHA)</p>
<p align="center"><img src="/images/shrine.png" style="margin:10px;"></p>

<h2>Who We Are</h2>
<p>PRINCE HALL SHRINEDOM embraces all of the basic fundamental concepts of the Masonic Order, but is more colorful, with a broader spectrum of visibility by the manner in which it dispenses charity in the community, and the care for its own.</p> 

<p>John George Jones, the founder, is said to have been introduced to the ritualistic mysteries of the Order by one Ali Rofelt Pasha, Deputy and representative from the Grand Council of Arabia, during the World's Colombian Exposition in Chicago in 1893.</p> 

<p>Shrinedom, because of its pageantry, has on occasions been referred to as the "Display" House in Masonry, causing men to sometimes join the prerequisite Houses solely with the intent on becoming a Shriner.</p> 

<p>There are 224 Constituent Temples throughout the Imperial Domain (the World), with a membership of over 25,000 - and growing.</p> 

<p>Shrinedom is thought of as a Fraternal, Social, and Charitable Organization: FRATERNAL in the sense of using passwords and symbols to remind the members to ever strive for inner self-improvement; SOCIAL from the standpoint of the enjoyment of good times within its own ranks; and CHARITABLE for its unselfish giving of goods and services on both the local and national level.</p> 

<p>Heading the list of recipients is the NAACP, the Legal Defense Fund, the Urban League, and United Negro College Fund, along with Annual Grants to several institutions of higher learning and hospitals throughout the land, for medical and other research projects.</p>

<p>Substantial grants are awarded to colleges annually to supplement the education of economically deprived youth, along with a program of financial aid to fight drugs, crime and delinquency. There is also a national scholarship grant program for young ladies between the ages of 17 and 24 to attend colleges and universities of their choice. They also strongly endorse the Assault on Illiteracy (AOIP), amid an engagement in development programs with Third World Countries.</p>

<p>The Shrine Organization is 108 years old and takes great pride in its Auxiliary, which is composed of wives, sisters, mothers and daughters of the membership - officially styled, the Imperial Court Daughters of Isis.</p> 

<p>They are 90 years old and mirror, in some respect, the activities of the parent body. Both share offices in the organization's Headquarters Building located in Memphis, Tennessee.</p> 

<p>The Shrine is headed by the Imperial Potentate, and the Daughters by the Imperial Commandress. The red Fez is worn by the men and the white Fez by the women, both of whom are community oriented - and definitely on the move!</p>

</div>
<div class="panel">
<h4 align="right">Date to Remember</h4>

<p><b>Desert Conference</b><br>
Feb 7th & 8th, 2014<br>
Hanover Marriott<br>
Whippany, NJ</p>

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
	echo "<img src='".$getresults1['image']."' width='159'>
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

</div>
</div>

<div class="large-5 columns">
<div class="panel">
<h4 align="right">Temples</h4>
<div class="section-container accordion" data-section="accordion">
  <section>
    <p class="title" data-section-title><a>Oasis of Camden</a></p>
    <div class="content" data-section-content>
    <p><b>Zamora Temple No. 73</b><br />
    Meets 3rd Thursday<br />
    Oriental Masonic Temple<br />
    1473 South 8th Street<br />
    Camden, NJ 08104</p>
  </div>
  </section>
  
  <section>
    <p class="title" data-section-title><a>Oasis of Trenton</a></p>
    <div class="content" data-section-content>
    <p><b>Khufu Temple No. 120</b><br />
    Meets 4th Tuesday<br />
    King David Temple<br />
    Meets 2nd Thursday<br />
    81 Bellevue Avenue<br />
    Trenton, NJ 08618</p>
    </div>
  </section>  

  <section>
    <p class="title" data-section-title><a>Oasis of Atlantic City</a></p>
    <div class="content" data-section-content>
    <p><b>Azure Temple No. 38</b><br />
    Meets 3rd Sunday<br />
    Prince Hall Masonic Temple<br />
    323 North New York Avenue<br />
    Atlantic City, NJ 08401</p>
    </div>
  </section>  

  <section>
    <p class="title" data-section-title><a>Oasis of Asbury Park</a></p>
    <div class="content" data-section-content>
    <p><b>Mahja Temple No. 47</b><br />
    Meets 4th Wednesday<br />
    Mt. Pisgah Masonic Temple<br />
    930 Cookman Avenue<br />
    Asbury Park, NJ 07712</p>
    </div>
  </section> 
  
  <section>
    <p class="title" data-section-title><a>Oasis of Newark</a></p>
    <div class="content" data-section-content>
    <p><b>Golconda Temple No. 24</b><br />
    Meets 3rd Tuesday<br />
    JFK Community Center<br />
 	796 East Hazelwood Ave<br />
	Rahway, NJ 07056</p>
    </div>
  </section>
</div>

</div>
</div>

</div><!-- end row -->