<style>
.panel h4,.panel h3, .panel h3, .panel b{color:#000;}
</style>
<div class="row"> 

<div class="large-7 columns">
<div class="panel">
<h3>Mount Calvary Grand Commandery
Knights Templar (PHA)</h3>
</div>
<div class="panel">
<h4>History</h4>

<p style="text-align:center">
<b>Mount Calvary Grand Commandery<br>
Knights Templar<br>
State of New Jersey<br>
Organized March 19, 1884</b></p>

<p><img src="/images/knight.jpg" align="left" style="margin:10px;">Tradition we are told is the accumulated and inherited wisdom of those who have gone before. Masonic tradition states that in 1818 the Grand Master of England, the Duke of Sussex, deputized a West Indian Negro, Passey Benjamine, to establish Commanderies of Knights Templar in the West Indies and the United States. Passey Benjamine came to the United States and made a member of the First African Lodge of Pennsylvania at Philadelphia. In 1820 he found Knights Templar residing there, having been created Knights abroad, and he organized St. George Commandery. In 1844, the First African Grand Encampment was organized.</p>

<p>The Prince Hall Masons organized Mt. Calvary Grand Commandery of Knights Templar at Plainfield, New Jersey on March 19, 1884.</p>

<p>When we escort the Grand master of Prince Hall Masons, in full regalia as Guard of Honor, at such public appearances that he may request, the world at large may visually know that the Masonic religious concept is truly all inclusive.</p>

<p>The Knights Templar Rite consists of three degrees: Order of the Red Cross, Knights Templar, Knights of Malta. These are also called the Chivalric Degrees.</p>

<p>In the States of Massachusetts, New York, New Jersey, Pennsylvania, Delaware, Maryland, Ohio, and Washington, DC, we jointly have a Pilgrimage Association to assist in promoting programs of mutual interest and support each other to enhance our public image. We are greatly assisted in our endeavors by Celestial </p>Grand Court, Order of Cyrenes of the Adopted Rites.

<p>Our full dress regalia was approved and adopted by the Grand Encampment of the U.S.A. in 1862. It does not resemble in a general character, the uniform of Ancient Knights. It was created for the American Rite and expresses, all inclusively, Christian Knighthood. It is worn only in America, and differs in other countries.</p>

<p>The United States Flag is part of Templar masonry. We have vowed to be loyal to the American Flag and true to the government it represents.</p>

</p>
</div>

<div class="panel">
<h4 align="right">Pictures</h4>
<img src="images/IMG_0155.JPG" alt="" width="522" height="395" />
<small>S.K . Benjamin G. Billups, Jr KYCH (10), Most Eminent Grand Commander</small><br><br>

<img src="images/MEGC_of-NJ_2014.jpg" alt="" width="522" height="395" />
<small>S.K . Benjamin G. Billups, Jr KYCH (10), Most Eminent Grand Commander at the 2013 Grand Session</small><br><br>

<img src="images/IMG_20081231_235718.jpg" alt="" width="522" height="395" />
<small>Left to Right:  SK Seymour C. Hundly PMEGC, SK Robert "Cozy " Marritts, horse "Show Down" SK Benjamin G. Billups Jr. MEGC, Anthony Pollett PMEGC Mt. Calvary's 2nd Division Calvary</small><br><br>

<img src="images/grandcom11-12.jpg" alt="" width="522" height="395" />
<small>Seated (Front Row): SK Benjamin G. Billups (REGCG),  (VEDGC), M.E. Alexander C. Dowd (Grand Commander), SK Cecil Allen (REGG), M.E. Gene Ruff (GRec), M.E. Seymour Hundley (Deputy to the Grand Encampment)Standing (L to R): SK William R. Copeland, SK George O. Johnson, Sr. (Deputy for the South), SK Howard White, SK Kevin D. Thomas, (EC #3), SK Edward Harris (EC #10), RE Vernon C. Robinson (Lecturer for the South), SK Jeffrey C. Spann (EC #13), SK Casey M. Walker, SK Gregory Waller (HPMEGC).</small><br><br>

<img src="images/mcgcofficers0709.jpg" alt="" width="544" height="356" />
<small>Mt. Calvary Grand Commandery Officers 2007-2009
Left to Right: SK Gregory Waller, SK Richard Allston (REGR), SK Gene Ruff (MEGC), SK N. Christopher Payne (PMEGC), ME Otis Appling (PMEGC),  (VEDGC),
SK Solomon C. Jones (REG Prior), SK Ralph Hogan (REGT), SK George Johnson</small><br><br>

<img src="images/mtcalvary.jpg" alt="" width="520" height="395" />
<small>Mt. Calvary Grand Commandery Officers 2009-2011
Seated (L-R): SK Cecil Allen (REG),  (VEDGC), SK Gene Ruff (MEGC), SK Alexander Dowd (RECG),
Standing (L-R): SK George Johnson (EC #10), SK Vernon Robinson (EC #12), SK Jeffery Spann (EC #13)</small><br><br>

<img src="images/2011-13.jpg" alt="" width="552" height="402" />
<small>Mt. Calvary Grand Commandery Officers 2011-2013
Front Row (L-R): SK Alexander Dowd (VEDGC), PMWGM Thomas R. Hughes, Sr. (PMEGC), ME Alexander C. Dowd (Grand Commander), ME Seymour Hundley (Deputy to the Grand Encampment), ME Gene Ruff (GR)
Back Row (L-R): SK Gregory Waller (PMEGC), SK B.J. Fleming (PMEGC), SK Richard Allston (PMEGC), SK N. Christopher Payne (PMEGC)</small><br><br>
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
<h4 align="right">Subordinate Commanderies</h4>
<div class="section-container accordion" data-section="accordion">
  <section>
    <p class="title" data-section-title><a>Ocean Spray Commandery No. 3</a></p>
    <div class="content" data-section-content>
    <p><b>Ocean Spray Commandery No. 3</b><br />
    Meets 3rd Friday<br />
    Prince Hall Masonic Temple<br />
    323 North New York Avenue<br />
    Atlantic City, NJ 08401</p>
    </div>
  </section>
  
  <section>
    <p class="title" data-section-title><a>St. Paul Commandery No. 7</a></p>
    <div class="content" data-section-content>
    <p><b>St. Paul Commandery No. 7</b><br />
    Meets 2nd Saturday<br />
    Stone Square Masonic Temple<br />
    722 St. Mary's Avenue<br />
    Plainfield, NJ 07062</p>
    </div>
  </section>
    
  <section>
    <p class="title" data-section-title><a>Douglas Commandery No. 10</a></p>
    <div class="content" data-section-content>
    <p><b>Douglas Commandery No. 10</b><br />
    Meets 1st Tuesday<br />
    King David Masonic Temple<br />
    81 Bellevue Avenue<br />
    Trenton, NJ 08618</p>
    </div>
  </section>  

  <section>
    <p class="title" data-section-title><a>Mt. Ararat Commandery No. 12</a></p>
    <div class="content" data-section-content>
    <p><b>Mt. Ararat Commandery No. 12</b><br />
    Meets the 4th Friday<br />
    Hiram Masonic Temple<br />
    143 Warwick Road<br />
    Lawnside, NJ 08045</p>
    </div>
  </section> 
  
   <section>
    <p class="title" data-section-title><a>Palestine Commandery No. 13</a></p>
    <div class="content" data-section-content>
    <p><b>Palestine Commandery No. 13</b><br />
    Meets 1st Saturday<br />
    Shiloh Masonic Temple<br />
    37 Bennett Road<br />
    Englewood, NJ 07631</p>
    </div>
  </section> 
  
</div>
</div>

<div class="panel">
<h4>Celebrating the last 48 years of Past Grand Commanders:</h4>
1963-1964   RE Arthur Douglas<br />
1964-1966   RE William Neblett<br />
1966-1968   RE Clarence Johnson<br />
1968-1969   RE Ulysses D. Keener, Sr.<br />
1969-1970   RE Walter Johns<br />
1970-1972   RE Thomas Mayo<br />
1972-1974   RE Roosevelt Gaines<br />
1974-1976   RE Charles Wood<br />
1976-1978   RE James Jones<br />
1978-1980   RE Bernal V. Ford<br />
1978-1980   RE Loren R. Purnell<br />
1980-1981   RE Phillips Johnson<br />
1982-1984   RE John C. Harley<br />
1984-1986   RE James W. Allen, Sr.<br />
1986-1988   RE Isaac Murphy<br />
1988-1990   RE William R. Revels<br />
1990-1992   RE Seymour C. Hundley<br />
1992-1994   RE Harvey Welch<br />
1994-1995   RE Willie J. Steward<br />
1995-1997   RE Arthur L. Taylor<br />
1997-1999   ME Joseph Jones, Sr.<br />
1999-2000   ME Harry McDowell<br />
2000-2002   ME Edward L. Lambert<br />
2002-2004   ME Harrison Adams<br />
2004-2005   ME Thomas R. Hughes, Sr.<br />
2005-2007   ME Dr. James L. Jenkins<br />
2007-2009   ME Otis Appling<br />
2009-2011   ME Gene Ruff<br />
2011-2013   ME Alexander Dowd<br />

</div>
</div>

</div><!-- end row -->