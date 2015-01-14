<? session_start();
$_SESSION["calendar"] = 'ozieladmin@gmail.com';
?>
<div class="row">

<div class="large-7 columns">
<div class="panel">
<h3>Oziel Grand Chapter<br>
Order of Eastern Star (PHA)</h3>
<span style="color:#F00">Prince Hall Affiliation</span><br>
<span style="color:#090">for the Jurisdiction of New Jersey</span><br>
<span style="color:#00F">Instituted June 24, 1913</span><br>
<p style="text-align:right">Website: <a href='http://www.ozielgrandchapternj.org' style="text-decoration:none; color:#000000;">http://www.ozielgrandchapternj.org</a></p>
</div>
<div class="panel">
<h4 style="color:#999;">History of Oziel Grand Chapter, Order of Eastern Star</h4>
<p><img src="images/250_OzielLogo2011.jpg" align="left" style="margin:10px;">Being a Prince Hall Eastern Star just does not happen by chance. Membership follows a long and proud lineage and is offered only to ladies who are related to Prince Hall Master Masons by blood or marriage.<p>

<p>The patriarch of the organization, Prince Hall arrived in Boston from Barbados in March of 1765 at the age of 17. He immediately secured employment in his trade as a leather worker. On March 6, 1775, he and 14 other Free Black men became the first men of color initiated into Masonry in the United States by British Army Lodge No. 441.</p>

<p>African Lodge No. 1 was organized on March 17, 1776 when the British regiment left Boston. African Lodge No. 1 was left with a dispensation, which only allowed them, limited functioning power. Unable to exercise the full rights and privileges of a lodge, Prince Hall applied to the Grand Lodge of England for a charter on June 30, 1784, which was received on April 29, 1787. The name was changed to African Lodge No. 459.</p>

<p>On June 24, 1791, the first African Grand Lodge was organized in Boston. Grand Lodges were formed in like manner in other states. Prince Hall died December 4, 1807. His legacy still lives on.</p>

<p>Women in general have participated in groups and orders throughout the centuries. Masons, thus giving their wives and daughters an opportunity to share some of the same pleasures they enjoyed themselves embraced many types of “Associations” in several countries. The first reliably known “Lodge of Adoption” was established on Paris in 1760. Lodges of Adoption were named such because each was required to be under the guardianship or coverage of some regular Masonic Lodge.</p>

<p>Adoptive Masonry implies the system or organized grouping of the steps in which lessons are communicated to a certain class of ladies who were “Adopted” into the Masonic communion. An Order can only be maintained through the combination of a single governing body and mutual consent of subordinate bodies.</p>

<p>In the 1850’s, Rob Morris of Kentucky was refining an organization called “Supreme Constellation of American Adoptive Rite,” which eventually evolved into the Order of Eastern Star. In 1866, Dr. Morris transferred all the authority he had assumed and exercised in regard to the “Order” to Robert Macoy of New York. Through the efforts of Macoy, the work was arranged more systematically and published in a manual called the “Adoptive Rite.” The Order also gained uniformity and curbed unauthorized conferring of degrees.</p>

<p>Black women in particular were granted membership when an agent of Robert Macoy conferred several adoptive degrees on Sir. Thornton Andrew Jackson on August 10, 1874. He also received a letter granting him authority to establish chapters of the Order of Eastern Star for Black Women. On December 1, 1874, Queen Esther Chapter No. 1 was established in the home of Mrs. Georgiana Thomas of Washington, DC.</p>

<p>Because of the actions taken in 1874, the “Stars” spread to New Jersey by way of individual subordinate chapters sanctioned by two separate self-styled Grand Chapters functioning within the state. The seed for one official New Jersey Grand Chapter was planted, December 28, 1911 by the former Most Worshipful United Grand Lodge, F & AM of NJ.</p>

<p>OZIEL GRAND CHAPTER, ORDER OF EASTERN STAR, INCORPORATED, PRINCE HALL AFFILIATION, was created with the merger of the two grand bodies on June 24, 1913. It was officially welcomed as an Appendant Order of Masonry by the MWUGL on June 25, 1914 with eight subordinate chapters.</p>
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
<h4 align="right">OES Districts</h4>
<div class="section-container accordion" data-section="accordion">
  <section>
    <p class="title" data-section-title><a>1st OES District</a></p>
    <div class="content" data-section-content>
	<p><b>Burlington, Camden, Gloucester Counties</b></p>
    </div>
  </section>
  <section>
    <p class="title" data-section-title><a>2nd OES District</a></p>
    <div class="content" data-section-content>
   <p><b>Cumberland, Salem Counties</b></p>
    </div>
  </section>
  <section>
    <p class="title" data-section-title><a>3rd OES District</a></p>
    <div class="content" data-section-content>
      <p><b>Atlantic County</b></p>
    </div>
  </section>
  <section>
    <p class="title" data-section-title><a>4th OES District</a></p>
    <div class="content" data-section-content>
      <p><b>Monmouth, Ocean Counties</b></p>
    </div>
  </section>
  <section>
    <p class="title" data-section-title><a>5th OES District</a></p>
    <div class="content" data-section-content>
    <p><b>Mercer, Middlesex, Somerset</b></p>
    </div>
  </section>
  <section>
    <p class="title" data-section-title><a>6th District OES District</a></p>
    <div class="content" data-section-content>
    <p><b>Morris, Union, Counties</b></p>
    </div>
  </section>
  <section>
    <p class="title" data-section-title><a>7th District OES District</a></p>
    <div class="content" data-section-content>
    <p><b>Bergen, Hudson, Passaic Counties</b><p>
    </div>
  </section>
    <section>
    <p class="title" data-section-title><a>8th OES District</a></p>
    <div class="content" data-section-content>
    <p><b>Essex County</b><p>
    </div>
  </section>
</div>
</p>
</div>
</div>

<div class="large-5 columns">
<div class="panel">
<h4 align="right">Date to Remember</h4>

<?php  
include 'body_direct_request.php';
?>

</div>
</div>

<div class="large-5 columns">
<div class="panel">
<p>
<h4 align="right">Media</h4>
</p>
</div>
</div>

</div><!-- end row -->