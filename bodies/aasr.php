<style>
.panel h4,.panel h3, .panel h3, .panel b{color:#ACA435;}
</style>
<div class="row"> 

<div class="large-7 columns">
<div class="panel">
<h3>New Jersey Council of Deliberation</h3>
<h4>Orient of New Jersey <br>
Ancient &amp; Accepted Scottish Rite of Freemasonry</h4>
</div>
<div class="panel">

<p align="center" style="padding-bottom:200px;"><img src="/images/33upaasr.jpg" style="margin:10px;"></p>



</div>
<div class="panel">
<h4 align="right">Date to Remember</h4>

<p><b>Annual Session of the New Jersey Council of Deliberation</b><br>
November 15th - 17th 2013<br>
04:00 PM EST<br>
at the Crowne Plaza - 2349 West Marlton Pike Cherry Hill,NJ 08002</p>



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

<div class="large-5 columns">
<div class="panel">
<p>
<h4 align="right">Subordinate Consistories</h4>
<div class="section-container accordion" data-section="accordion">
  <section>
    <p class="title" data-section-title><a>DeHugo Consistory No. 2</a></p>
    <div class="content" data-section-content>
    <p><b>DeHugo Consistory No. 2</b><br />
    Meets 1st Friday<br />
    Oriental Masonic Temple<br />
    1473 South Eighth Street<br />
    Camden, NJ 08104</p>
    </div>
  </section>
  
  <section>
    <p class="title" data-section-title><a>Douglas Consistory No. 10</a></p>
    <div class="content" data-section-content>
    <p><b>Douglas Consistory No. 10</b><br />
    Meets 4th Thursday<br />
    Stone Square Masonic Temple<br />
    722 St. Mary's Avenue<br />
    Plainfield, NJ 07060</p>
    </div>
  </section>  

  <section>
    <p class="title" data-section-title><a>Mt. Calvary Consistory No. 22</a></p>
    <div class="content" data-section-content>
    <p><b>Mt. Calvary Consistory No. 22</b><br />
    Meets 4th Thursday<br />
    Prince Hall Masonic Temple<br />
    323 North New York Avenue<br />
    Atlantic City, NJ 08401</p>
    </div>
  </section>  

  <section>
    <p class="title" data-section-title><a>Sardonias Consistory No. 41</a></p>
    <div class="content" data-section-content>
    <p><b>Sardonias Consistory No. 41</b><br />
    Meets 2nd Thursday<br />
    MWPHGL - Grand East<br />
    188-190 Irvine Turner Blvd.<br />
    Newark, NJ 07108</p>
    </div>
  </section> 
  
  <section>
    <p class="title" data-section-title><a>Ophir Consistory No. 48</a></p>
    <div class="content" data-section-content>
    <p><b>Ophir Consistory No. 48</b><br />
    Meets 1st Friday<br />
    King David Masonic Temple<br />
    81 Bellevue Avenue<br />
    Trenton, NJ 08618</p>
    </div>
  </section>
  
  <section>
    <p class="title" data-section-title><a>Samuel W. Gordon Consistory No. 50</a></p>
    <div class="content" data-section-content>
    <p><b>Samuel W. Gordon Consistory No. 50</b><br />
    Meets 2nd Wednesday<br />
    Mt. Pisgah Masonic Temple<br />
    930 Cookman Avenue<br />
    Asbury Park, NJ 07712</p>
    </div>
  </section>

</div>
</p>
</div>
</div>


</div><!-- end row -->