<div class="row"> 

<div class="large-7 columns">
<div class="panel">
<h3>State Board of Youth Felicitares<br>
State of New Jersey</h3>
</div>
<div class="panel">
<h4 style="color:#999;">Overview of Membership</h4>

<p><img src="images/logo_youth.gif" align="left" style="margin:10px;"> Membership is not limited to the daughters or relatives of Eastern Stars or Masons, but is open to any girl who ranges from 7 to 18 years of age, regardless of race, creed, color or national origin.</p>

<p>A Youth Felicitare is not a junior Eastern Star. However, upon reaching the age of 18, a Youth Felicitare is eligible for membershipin the Eastern Star.</p>

<p>Requirements for Membership in the Eastern Star:
<ul style="margin-left:20px;">
<li>Must be a member in good standing with her local Unit.</li>
<li>Must be recommended by an Eastern Star who is a member of Oziel Grand Chapter, Order of the Eastern Star or a Master Mason who is a member of the Most Worshipful Prince Hall Grand Lodge of NJ.</li>
<li>Must meet all other requirements for membership consistent with the Constitution and By-laws of Oziel Grand Chapter.</li>
</ul>
</p>

<p>More information:<a href="http://www.ozielgrandchapternj.org/youth.asp"> http://www.ozielgrandchapternj.org/youth.asp</a></p>
</div>
</div>

<div class="large-5 columns">
<div class="panel">

<?php
echo "<p style='text-align:center'>";
include ('db_con.php');
$opt = $_GET['id'];
$get_officers1 = mysql_query("SELECT A.url as image, A.name as name, A.title as title, A.masonic_body, B.update_access_code 
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
	echo "<tr><td width='60%'>".$getresults2['name']."</td><td>".$getresults2['title']."</td></tr>";
	}
  mysql_close();
  echo "</table>";
?>

</div>
</div>

</div><!-- end row -->