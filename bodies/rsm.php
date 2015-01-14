<style>
.panel h4,.panel h3, .panel h3, .panel b{color:#7D179F;}
</style>
<div class="row"> 

<div class="large-7 columns">
<div class="panel">
<h3>Arthur L. Taylor Grand Council<br>
Royal and Select Masters (PHA)</h3>
</div>
<div class="panel">
<h4>Grand Council History</h4>
<p><img src="images/rsm.jpg" align="left" style="margin:10px;">On May 17, 1964, the late David F. L. Jones was involved in setting up a U. D. Council called Adoniram. This Council was set up in Newark, New Jersey. It became known as Adoniram Council #4. There was also a failed attempt to establish a council in Asbury Park, New Jersey.</p>

<p>The Most Worshipful Arthur Crawford, Past Grand Master, was responsible for the Royal and Select Masters to be established in New Jersey. The New Jersey Grand Council is a "child" of the New York Grand Council. Alton J. Bennett, Past Thrice Illustrious Grand Master and Grand Historian of the New York Council and Arthur L. Taylor, Past Thrice Ill. Grand Master of New York (1986) played a major role in setting up a Grand Council in New Jersey.</p>

<span style="color: #7D179F;"><strong>Melchizedek "Just", King of Salem "Peace"</strong></span>
<span style="color: #7D179F;"><strong>brought forth bread and wine, and he was</strong></span>
<span style="color: #7D179F;"><strong>the priest of the Most High God, and he blessed</strong></span>
<span style="color: #7D179F;"><strong>him, and said, blessed be Abram of the Most</strong></span>
<span style="color: #7D179F;"><strong>High God, possessor of heaven and earth, And</strong></span>
<span style="color: #7D179F;"><strong>blessed be the Most High God which hath</strong></span>
<span style="color: #7D179F;"><strong>delivered thine enemy into thy hand. And he gives</strong></span>
<span style="color: #7D179F;"><strong>tithes of all. (Gen. 14, 18-20).</strong></span><br /><br />

<p>It was also established that every Fifth Saturday would be a Grand Cabinet Meeting.
This momentous beginning set the stage for a series of dedicated and talented companions to lead the Order:<br />

<strong>Arthur L. Taylor</strong></br>
<strong>James Fouse</strong></br>
<strong>Cliffon Logan</strong></br>
<strong>Leonard Long</strong></br>
<strong>Jasper Lofton</strong></br>
<strong>John Taliaferro</strong></br>
<strong>Harrison Adams</strong></br>
<strong>Chester A. Cherry</strong></br>
<strong>William R. Copeland</strong></br>
<strong>Gene Ruff</strong></br>
<strong>Lemuel Dunnigan, Jr.</strong></br>

<p>These leaders continued the tradition of scholarship in freemasonry. The initiate on entering this Order is motivated to continue learning long after he earns his degrees.<br />
<blockquote>Fraternally submitted,<br />
Dr. James Clark, Historian</blockquote></p>
</div>

<div class="panel">
<h4>Past Grands</h4>
<table align="center" style="border-radius: 15px;">
<tr>
<td style="text-align: center;"><h4>Years Served</h4></td><td style="text-align: center;"><h4>Name</span></h4></td>
</tr><tr>
<td> 1988-1990</td><td> Arthur L. Taylor (2)</td>
</tr><tr>
<td> 1990-1992</td><td> James Fouse (3)</td>
</tr><tr>
<td> 1992-1994</td><td> Clifton W. Logan (1)</td>
</tr><tr>
<td> 1994-1996</td><td> Leonard Long, Sr. (2)</td>
</tr><tr>
<td>1996-1998</td><td> Jasper Lofton, Sr. (2)</td>
</tr><tr>
<td> 1998-2000</td><td> John R. Taliaferro (4)</td>
</tr><tr>
<td> 2000-2001</td><td> Harrison Adams (1)</td>
</tr><tr>
<td> 2001-2003</td><td> Chester A. Cherry (5)</td>
</tr><tr>
<td> 2003-2005</td><td> William R. Copeland (5)</td>
</tr><tr>
<td> 2005-2007</td><td> Gene Ruff (3)</td>
</tr><tr>
<td> 2007-2009</td><td> Lemuel Dunnigan, Jr. (1)</td>
</tr><tr>
<td> 2009-2010</td><td> Leonard Long, Sr. (2)</td>
</tr><tr>
<td> 2010-2012</td><td> Lucien Lindo</td>
</tr>
</table>
</div>
</div>

<div class="large-5 columns">
<div class="panel">

<?php
echo "<p style='text-align:center'>";
include ('db_con.php');
$opt = $_GET['id'];
$get_officers1 = mysql_query("SELECT A.image, A.name as name, A.title as title, A.masonic_body, B.update_access_code 
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

<div class="panel">
<h4 align="right">Subordinate Councils</h4>
<div class="section-container accordion" data-section="accordion">
  <section>
    <p class="title" data-section-title><a>Haggai Council No. 1</a></p>
    <div class="content" data-section-content>
    <p><b>Haggai Council No. 1</b><br />
    Meets 4th Saturday<br />
    Integrity Masonic Temple<br />
    224 M.L.K. Way<br />
    Paterson, NJ 07501</p>
    </div>
  </section>
  
  <section>
    <p class="title" data-section-title><a>Joshua Council No. 2</a></p>
    <div class="content" data-section-content>
    <p><b>Joshua Council No. 2</b><br />
    Meets 3rd Wednesday<br />
    Hiram Masonic Temple<br />
    143 Warwick Road<br />
    Lawnside, NJ 08045</p>
    </div>
  </section>
    
  <section>
    <p class="title" data-section-title><a>Zerubabbel Council No. 3</a></p>
    <div class="content" data-section-content>
    <p><b>Zerubabbel Council No. 3</b><br />
    Meets 2nd Friday<br />
    Woodlin Masonic Temple<br />
    19 Park Avenue<br />
    Bordentown, NJ 08505</p>
    </div>
  </section>  

  <section>
    <p class="title" data-section-title><a>Joppa Council No. 4</a></p>
    <div class="content" data-section-content>
    <p><b>Joppa Council No. 4</b><br />
    Meets 2nd Thursday<br />
    Stone Square Masonic Temple<br />
    722 St. Mary's Avenue<br />
    Plainfield, NJ 07060</p>
    </div>
  </section>
    
  <section>
    <p class="title" data-section-title><a>King Solomon Council No. 5</a></p>
    <div class="content" data-section-content>
    <p><b>King Solomon Council No. 5</b><br />
    Meets 4th Wednesday<br />
    Hiram Abiff Masonic Temple<br />
    6829 Washington Ave<br />
    Pleasantville, NJ 08232</p>
    </div>
  </section>
    
  <section>
    <p class="title" data-section-title><a>Malachi Council No. 6</a></p>
    <div class="content" data-section-content>
    <p><b>Malachi Council No. 6</b><br />
    Meets 2nd Tuesday<br />
    Celestial Masonic Temple<br />
    141 W. Bergen St.<br />
    Red Bank, NJ 07701</p>
    </div>
  </section>
  
</div>

</div>
</div>

<div class="large-5 columns">
<div class="panel">
<h4 align="right">Date to Remember</h4>

<p><b>Arthur L. Taylor GCR&SM Luncheon</b><br />
Saturday March 29th 2014 - 12PM - 4PM EST<br>
Foster Military Lodge <br>
Charleston Road <br>
Willingboro, NJ 08046</p>

</div>
</div>

</div><!-- end row -->