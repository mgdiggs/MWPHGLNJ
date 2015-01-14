<style>
.panel h4,.panel h3, .panel h3, .panel b{color:#b6985b;}
</style>
<div class="row"> 

<div class="large-7 columns">
<div class="panel">
<h3>Knights of the York Cross of Honor (K.Y.C.H.)<br>
Daniel W. Frazier Priory #5 - State of New Jersey</h3>
</div>
<div class="panel">
<h4>Membership</h4>
<p><img src="/images/kych.gif" align="left" style="margin:10px;">Requirements for membership are that each proposed candidate for membership must have presided over a Lodge as a Master, over a Chapter as High Priest, over a Council as Thrice Illustrious Master and over a Commandery as Commander.</p>

<p>Knights of the York Cross of Honor is a Honor Group of York Rite Masons who are dedicated to serving the Masonic Fraternity as a Labor of Love.</p>

<p>No individual should aspire to membership in KYCH, when he has done the required work, and done it well, he will be invited to membership. Those who labor will be rewarded by being invited.</p>

<p>After a Mason has fulfilled the requirements of membership, his name may be proposed for membership by a member of the KYCH. The prospect must receive a unanimous vote by secret ballot.</p>

<p>The jewel of the Order is a gold crown with the emblem of each York Rite body hung on a blue, red, purple and white breaded cordon. The colors represent the four York Rite bodies. When a member Knight has been elected to preside over one of the four Grand Bodies, he is invested with the rank of Grand Cross and is awarded a Quadrant to apply to his jewel.</p>

There is generally only one Priory per state and Daniel W. Frazier #5, represents the KYCH Priory in New Jersey.</p>
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