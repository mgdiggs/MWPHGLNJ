<style>
.panel h4,.panel h3, .panel h3, .panel b{color:#ACA435;}
</style>
<div class="row"> 
<div class="large-7 columns">
<div class="panel">
<h3>New Jersey State Grand Assembly<br />
Order of the Golden Circle</h3>
<b>Orient of New Jersey (auxiliary to the Ancient &amp; Accepted Scottish Rite of
Freemasonry (PHA) Northern Jurisdiction, USA, Inc.)</b>
</div>
<div class="panel">

<p align="center" style="padding-bottom:200px;"><img src="images/goldencircle.png" style="margin:10px;"></p>



</div>

<div class="panel">
<h4 align="left">Dates to Remember</h4>

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

</div>
</div>

<div class="large-5 columns">
<div class="panel">
<p>
<h4 align="right">Subordinate Assemblies</h4>
<div class="section-container accordion" data-section="accordion">
 
  <section>
    <p class="title" data-section-title><a>Primrose Assembly No. 9</a></p>
    <div class="content" data-section-content>
    <p><b>Primrose Assembly No. 9</b><br />
    Meets 4th Wednesday<br />
    Oriental Masonic Temple<br />
    1473 South Eighth Street<br />
    Camden, NJ 08104</p>
    </p>
    
    <p>Loyal Lady Jeanne Holmes, LLR<br />
    615 Hemmings Ways<br />
    Lawnside, NJ 08045<br />
    856.546.2676</p>
    
    <p>Loyal Lady Francine Lumpkin, LL Sec.<br />
    40 Woodmill Drive<br />
    Clementon, New Jersey 08021<br />
    856.374.7221</p>
    </div>
  </section>
  
  <section>
    <p class="title" data-section-title><a>Arbor Vitae Assembly No. 16</a></p>
    <div class="content" data-section-content>
    <p><b>Arbor Vitae Assembly No. 16</b><br />
    Meets 4th Thursday<br />
    Prince Hall Masonic Temple<br />
    323 North New York Avenue<br />
    Atlantic City, NJ 08401</p>
    
    <p>Loyal Lady Emma Sheridan, LLR<br />
    805 Cedar Lane<br />
    PLeasantville, NJ 08232<br />
    609-645-9485</p>
    
    <p>Loyal Lady Carolyn Earley, LL Sec.<br />
    3 Oyster Bay Road, Apt. D<br />
    Absecon, New Jersey 08021<br />
    609.677.8608</p>
    </div>
  </section>

  <section>
    <p class="title" data-section-title><a>Olive Branch Assembly No. 27</a></p>
    <div class="content" data-section-content>
    <p><b>Olive Branch Assembly No. 27</b><br />
    Meets 2nd Thursday<br />
    MWPHGL - Grand East<br />
    188-190 Irvine Turner Blvd.<br />
    Newark, NJ 07108</p>
    
    <p>Loyal Lady Barbara V. Lee, LLR<br />
    56 Stockman Place<br />
    Irvington, NJ 07111<br />
    973-374-8448</span></p>
    
    <p>Loyal Lady Patricia Bell, LL Sec.<br />
    87 Grumman Street<br />
    Newark, New Jersey 07112<br />
    973.923.3453</p>
    </div>
  </section>
  
  <section>
    <p class="title" data-section-title><a>Gethsemane Assembly No. 33</a></p>
    <div class="content" data-section-content>
    <p><b>Gethsemane Assembly No. 33</b><br />
    Meets 2nd Wednesday<br />
    Mt. Pisgah Masonic Temple<br />
    930 Cookman Avenue<br />
    Asbury Park, NJ 07712</p>
    
    <p>Loyal Lady Rachel E. Lewis, LLR<br />
    813 Stamford Ave.<br />
    Neptune, New Jersey 07753<br />
    732-322-1227</p>
        
    <p>Loyal Lady Patricia Lyons, LL Sec.<br />
    206 Hollywood Avenue<br />
    Neptune, New Jersey 07753</p>
    </div>
  </section>

  <section>
    <p class="title" data-section-title><a>Lady Orchid Assembly No. 44</a></p>
    <div class="content" data-section-content>
    <p><b>Lady Orchid Assembly No. 44</b><br />
    Meets 1st Friday<br />
    King David Masonic Temple<br />
    81 Bellevue Avenue<br />
    Trenton, NJ 08618</p>
    
    <p>Loyal Lady Brenda L. FitzGerald, LLR<br />
    16 Edge Lane<br />
    Willingboro, NJ 08046<br />
    609-871-8671</p>
    
    <p>Loyal Lady Paulette McGee Jones, LL Sec.<br />
    29 Manchester Way<br />
    Burlington, New Jersey 08016<br />
	609-387-5242</p>
    </div>
  </section>

  <section>
    <p class="title" data-section-title><a>Rose of Sharon Assembly No. 83</a></p>
    <div class="content" data-section-content>
    <p><b>Rose of Sharon Assembly No. 83</b><br />
    Meets 2nd Tuesday<br />
    Stone Square Masonic Temple<br />
    722 St. Mary's Avenue<br />
    Plainfield, NJ 07060</p>
    
    <p>Loyal Lady Deidra L. Peterson, LLR<br />
    806 Carnegie Ave.<br />
    Linden, NJ 07036<br />
    908.494.4455</p>
    
    <p>Loyal Lady Florence Sylvester, LL Sec.<br />
    1201 Thornton Avenue<br />
    Plainfield, New Jersey 07060<br />
    908.756.9408</p>
    </div>
  </section> 

</div>
</p>
</div>
</div>


</div><!-- end row -->