<style>
.panel h4,.panel h3, .panel h3, .panel b{color:#7D179F;}
</style>
<div class="row">
<div class="large-7 columns">
<div class="panel">
<h3>Bernal V. Ford Grand Court - Ladies of the Circle of Perfection (PHA)</h3>
<b>State of New Jersey</b>
</div>
<div class="panel">
<h4>History of Bernal V. Ford Grand Court</h4>
<p><img src="images/locop.png" align="left" style="margin:10px;">On April 15, 1989 in the City of Lawnside, New Jersey, Prince Hall Grand Council of Royal and Select Masters did receive a Resolution from the said Courts of the Ladies of the Circle of Perfection namely, JOSHUA COURT NO: 1, ZERUBBABEL COURT NO: 2 and HAGGAI COURT NO: 3, petitioning that a Grand Court of the Ladies of the Circle of Perfection be inaugurated, auxiliary to the Grand Council of the Royal and Select Masters, State of New Jersey and Jurisdictions.</p>

<p>Under the leadership of Most Worshipful Arthur R. Crawford, Grand Master, and Most Illustrious Arthur L. Taylor, Grand Thrice Illustrious Master, this Resolution was adopted and the name of Bernal V. Ford Grand Court was established in and for the State of New Jersey, investing this Grand Court with all the Power, Dignities and Honor due a body according to the Ancient Land Marks and otherwise, so long as this Grand Court and its Subordinate Courts of the order will obey and keep the Laws, Rules, Order and Regulations of the Prince Hall Grand Council of Royal and Select Masters.</p>

<p>On the fifteenth day of April, 1989 a "Charter of Warrant and Constitution" was given to Bernal V. Ford Grand Court by the Prince Hall Grand Council of Royal and Select Masters and the "Charter" was presented with the current Grand Council Officers' signatures, Most Illustrious Arthur L. Taylor, Grand Thrice Illustrious Master, Right Illustrious James Fouse, Jr., Grand Deputy Thrice Illustrious Master, and Right Illustrious Earnest Pittman, Grand Principal Conductor of the Works.</p>

<p>The Prince Hall Grand Council of Royal and Select Masters, State of New Jersey and Jurisdictions do Authorize and Empower our trusted and well beloved elected and appointed Grand Court Officers and members.</p>

<p>Names of those who signed the "CHARTER":<br>
R.M. Florence R. Thomas<br>
Comp. William Hill<br>
R.M. Zelma Alphin<br>
Comp. William A. Greene<br>
R.M. Dorothy LaGarde<br>
Comp. William R. Revels<br>
R.M. Pauline Pittman<br>
R.M. Ruth Roane<br>
R.M. Edith Mozee<br>
R.M. Frances Brown<br>
R.M. Frances C. Robinson<br>
R.M. Beebe Wilson<br>
R.M. Alverta Smith<br>
R.M. Mildred Steele<br>
R.M. Florence Callaway<br>
R.M. Lucy M. Jones<br>
R.M. Dorothy B. Gilbert<br>
R.M. Julia Brooks<br>
R.M. Mary E. Ruff<br>
R.M. Lovie Smith<br>
R.M. Eleanor Jackson<br>
R.M. Bernice E. Crawford<br>
R.M. Pearnal Simons<br>
R.M. Thelma Givens<br>
R.M. Patricia P. Poulson<br>
R.M. Marie J. Jackson<br>
R.M. Dorothy Winslow<br>
R.M. Hilda Copeland<br>
R.M. Eloise Burch<br>
R.M. Gloria Y. Richardson<br>
R.M. Juanita Pitts<br>
R.M. Flora Williams<br>
R.M. Gertrude Bradley<br>
Most Ill. Albert Bennett (Thrice Ill Grand Master, NY)</p>

<p>Fraternally Submitted,<br>
Comp. William R. Copeland<br>
Royal Grand Chief Advisor<br>
Bernal V. Ford Grand Court<br>
Ladies of the Circle of Perfection</p>
</p>
</div>

<div class="panel">
<h4 align="left">Past Grands</h4>

<table border="0" style="border-radius: 15px;">
<tr>
<td><b>PRG Perfect Matron</b></td><td><b>Date</b></td><td><b>PRG Chief Advisor</b></td>
</tr><tr>
<td>Florence R. Thomas</td><td> 1988-1990</td><td> William H. Hill*</td>
</tr><tr>
<td> Zelma Alphin</td><td> 1990-1992</td><td> William Green</td>
</tr><tr>
<td> Pauline Pittman</td><td> 1992-1994</td><td> William R. Revels</td>
</tr><tr>
<td> Ruth Roane*</td><td> 1994-1996</td><td> William Hollis</td>
</tr><tr>
<td> Alverta Smith</td><td> 1996-1998</td><td> Lionel Lewis</td>
</tr><tr>
<td>Carolyn Pugh*</td><td> 1998-2000</td><td> Arthur L. Taylor*</td>
</tr><tr>
<td> Mary E. Ruff</td><td> 2000-2002</td><td> Leonard Long, Sr.</td>
</tr><tr>
<td> Virginia Appling</td><td> 2002-2004</td><td> Jasper Lofton, Sr.</td>
</tr><tr>
<td>Gertrude Bradley</td><td> 2004-2006</td><td> Casey Walker</td>
</tr><tr>
<td> Barb An Reed Sanders</td><td> 2006-2008</td><td> William Copeland</td>
</tr><tr>
<td> Alfreda Payne</td><td> 2008-2010</td><td> John R. Taliaferro, Jr.</td>
</tr><tr>
<td></td><td></td><td style="text-align: right;"><i>* denotes deceased</i></td>
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
<p style="text-align:center">
<b>Scripture</b><br>
And we know that all things work together for good to them that love God, to them who are called according to His purpose. (Romans 8:28)<br>

<b>Songs</b><br>
"My Soul is Anchored in the Lord"<br>
"Lord you've been good to me"<br>

<b>Motto</b><br>
Encourage the fainthearted, help the needy, be patient with everyone.<br>

<b>Theme</b><br>
Striving to create growth and change in the the face of challenge<br>

<b>Flower</b><br>
Purple Orchid<br>

<b>Colors</b><br>
Purple and Gold
</p>
</div>
</div>

<div class="large-5 columns">
<div class="panel">
<p>
<h4 align="right">Subordinate Courts</h4>
<div class="section-container accordion" data-section="accordion">
 
  <section>
    <p class="title" data-section-title><a>Joshua Court No. 1</a></p>
    <div class="content" data-section-content>
    <p><b>Joshua Court No. 1</b><br />
    Meets 2nd Friday<br />
    Hiram Masonic Temple<br />
    143 Warwick Road<br />
    Lawnside, NJ 08045</p>
</div>
  </section>
  
  <section>
    <p class="title" data-section-title><a>Zerubabbel Court No. 2</a></p>
    <div class="content" data-section-content>
    <p><b>Zerubabbel Court No. 2</b><br />
    Meets 1st Monday<br />
    Woodlin Masonic Temple<br />
    19 Park Avenue<br />
    Bordentown, NJ 08505</p>
    </div>
  </section>
  
  <section>
    <p class="title" data-section-title><a>Haggai Court No. 3</a></p>
    <div class="content" data-section-content>
    <p><b>Haggai Court No. 3</b><br />
    Meets 2nd Wednesday<br />
    Grand East<br />
    188-190 Irvine Turner Blvd<br />
    Newark, NJ 07108</p>
    </div>
  </section>
  
  <section>
    <p class="title" data-section-title><a>Joppa Court No. 4</a></p>
    <div class="content" data-section-content>
    <p><b>Joppa Court No. 4</b><br />
    Meets 2nd Sunday<br />
    Douglass Hall Masonic Temple<br />
    722 St. Mary's Avenue<br />
    Plainfield, NJ 07060</p>
    </div>
  </section>
  
  <section>
    <p class="title" data-section-title><a>Eureka Court No. 5</a></p>
    <div class="content" data-section-content>
    <p><b>Eureka Court No. 5</b><br />
    Meets 4th Monday<br />
    Prince Hall Masonic Temple<br />
    323 North New York Avenue<br />
    Atlantic City, NJ  08401</p>
    </div>
  </section>

</div>
</p>
</div>

<div class="panel">
<h4>Pictures</h4>
<img src="images/pastgr1.jpg"><br>
<small>Front Row (left to right): PRGPM Virginia Appling, PRGPM Mary Ruff,
PRGPM Gertrude Bradley, PRGPM Florence Rose Thomas
Back Row (left to right): PRGPM Pauline Pittman, PRGPM Barb An Reed Sanders,
PRGPM Zelma Nix</small>
</div>

</div>


</div><!-- end row -->