<div class="row"> 

<div class="large-7 columns">
<div class="panel">
<h3>William H. “Pop” Moss Grand Council<br>
Order of Pythagorans</h3>
</div>
<div class="panel">
<h4 style="color:#999;">Overview of Membership</h4>
<p><img src="/images/Pathagoran_GMv4-300x225.jpg" align="left" style="margin:10px;">Membership is not limited to the sons or relatives of Freemasons, but to any boy of good character in the age range of 8-20 years of age. He must be recommended by a Master Mason or a fellow Pythagoran.</p>

<p>The Order of Pythagorans is not a Junior Masonic Order, however it is under the supervision of the Most Worshipful Prince Hall Grand Lodge.</p>

<p>The paramount aim of the Order of Pythagorans is to serve the Youth of our communities with a well organized and supervised program to promote educational, vocational, social activity, health, character, and all around development of boys throughout New Jersey, while building better sons of today and men of tomorrow.</p>

<p><img src="images/Pathagoran-_GMv3-300x225.jpg" align="right" style="margin:10px;">The Ritual is the focal point of all of the Order’s programming. Through it, the candidate in his initiation into the order is presented valuable and impressive lessons. This investiture attempts to symbolize and teach Reverence for God, Love and Honor to his Parents, Righteous Thinking, Purity, Patriotism, Toleration, Courtesy, Friendship, and Constancy.</p>

<p>A Pythagorans goal is to become a better son, a better youth and citizen than ever before.</p>

<p>The Companions hold meetings in what are called “Chapters” mainly located in Masonic Temples. Each Chapter is hosted by one or more Lodges, who provide advisors from their own lodge membership. These Chapters throughout the state, are divided into Districts, each District has an annual meeting and all Chapters in the state meet for an annual Grand Session which lasts two days.</p>

<p>Many workshops, athletic activities and awards programs are held at the District Meetings and Grand Sessions. Also at the Grand Session the companions participate in the election of new Grand Council Officers, a Banquet, and Devotional Service.</p>
</p>
</div>
<div class="panel">
<h4 style="color:#999;">History of the Order of Pythagorans</h4>
<p>The Order of Pythagorans was founded and introduced to Prince Hall Masonry by Past Deputy Grand Master, Right Worshipful James A. Revaleon, in Boston, Massachusetts, 1936.</p>

<p>The purpose of the Organization was to provide a club for boys, emphasizing programs for their Education. Social, Vocational, Physical and Moral development.</p>

<p><img src="images/opmembers2010-300x198.jpg" align="left" style="margin:10px;">The Order was named after Pythagoras (591 B.C. – 50c B.C.), a noted Greek Philosopher and Mathematician, who traveled extensively throughout Egypt, Chaldea and Asia. Pythagoras was a contemporary with many of the Hebrew Prophets and Leaders. Because of his fortitude and constancy, he was initiated into the mysteries of Hebrew and Egyptian learning’s. On his return to Samos, his home country, Pythagoras established a school, whereby he taught the mystical powers of Numbers, along with their relationship with Life and the Universe.</p>

<p>Though Pythagoras was proficient in many things, he regarded himself merely as a “Seeker after Knowledge”, and not it’s possessor; which may be interpreted as the Beginning of Wisdom.</p>

<p>Prince Hall Masonry, like the people during the time of Pythagoras, has accepted his philosophies as a way of teaching “… their children the Art of Good Citizenship”.</p>

<p>The programs of the order have been diversified to meet the needs and interest of it’s members. It’s aim is to develop better Son’s and Men.</p>

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
<h4 align="right">Local Chapters</h4>
<div class="section-container accordion" data-section="accordion">
  <section>
    <p class="title" data-section-title><a>1st District (Camden)</a></p>
    <div class="content" data-section-content>
    <img src="images/iam1stdistrict-300x174.jpg" align="bottom">
    Oriental Lodge No. 1 & “I AM” Chapter No. 14 (Order of Pythagorans) along with Brothers from the First Masonic District participate in the Annual Elks Parade in Camden, NJ    on Sunday, October 5, 2008</p>
    
    <p><b>I AM Chapter #14</b><br>
    meeting at Oriental Lodge #1<br>
    1473 S. 8th Street<br>
    Camden, N.J. 08104</p>
    
    <p>Bro. James Pollard, Chairman<br>
    Pollardauto@aol.com</p>
    </div>
  </section>
  <section>
    <p class="title" data-section-title><a>2nd District (Lawnside)</a></p>
    <div class="content" data-section-content>
    <img src="images/fcjchartermembers-300x182.jpg" align="bottom">
    The Degree team along with Brothers from Hiram Lodge #5 and the newly initiated charter members of the Francis C. Johnson, Jr. Chapter in Lawnside, NJ on Saturday, November 27, 2010</p>
    
   <p><b>Francis C. Johnson, Jr. Chapter</b><br>
   meeting at Hiram Lodge #5<br>
   143 Warwick Road<br>
   Lawnside, N.J. 08045</p>

   <p>Bro. Lavar Edwards, Chairman<br>
   (856) 448-5891</p>
    </div>
  </section>
  <section>
    <p class="title" data-section-title><a>3rd District (Pleasantville)</a></p>
    <div class="content" data-section-content>
      <p><b>Hiram Abiff Chapter # 9</b><br>
      meeting at Hiram Abiff Lodge #16<br>
     6829 Washington Avenue<br>
     Pleasantville, NJ 08232</p>
    
    <p>William Greene – Advisor<br>
    (609) 317-5618</p>
    </div>
  </section>
  <section>
    <p class="title" data-section-title><a>4th District (Asbury Park)</a></p>
    <div class="content" data-section-content>
      <p><b>Harry McDowell Chapter</b><br>
      meeting at Mt. Pisgah Lodge # 48<br>
      930 Cookman Ave.<br>
      Asbury Park, N.J. 07712</p>
      
      <p>Bro. Robert Reevey - Chairman<br>
      (732) 685.8029</p>
    </div>
  </section>
  <section>
    <p class="title" data-section-title><a>5th District (Central NJ Area)</a></p>
    <div class="content" data-section-content>
    <p><b>Dr. Arthur T. Shacks Chapter</b><br>
    meeting at King David Lodge #15<br>
    81 Bellevue Avenue<br>
    Trenton, New Jersey 08618</p>
    
    <p>PM Howard B. White - Chairman<br>
    (609) 947-2818</p>
    <hr>
    <p><b>Progressive Chapter</b><br>
    meeting at Progressive Lodge # 17<br>
    180 Hale Street<br>
    New Brunswick, N.J. 08901</p>
    
    <p>Bro. Mel Greene - Chairman<br>
    (732) 266.1307<br>
    James E. Harmon – Advisor<br>
    (908) 241-4243</p>
    <hr>
    <p><b>Aldrage B. Cooper Chapter</b><br>
    meeting at Aldrage B. Cooper Sr. Lodge #69<br>
    11 Warren St.<br>
    Somerville, N.J. 08876</p>
    
    <p>PM Wallace Gantt - Chairman<br>
    (732) 491-9065</p>
    </div>
  </section>
  <section>
    <p class="title" data-section-title><a>6th District (Union/Morris County Area)</a></p>
    <div class="content" data-section-content>
    <p><b>Richard "Boots" Ashby Chapter</b><br>
    meeting at Acacia Lodge #23<br>
    1210 Frank St.<br>
    Roselle, N.J.07203</p>
    
    <p>RW George Earley - Chairman<br>
    (973) 725-1353<br>
    Harold F. Fisher, Jr. – Advisor<br>
    (908) 377-6677</p>
    
    <p><b>Louis Glenn Chapter</b><br>
    meeting at Golden Rule # 24<br>
    234 Oswald Ave. PO Box 392<br>
    Vauxhall, N.J.07083<p>
    
    <p>Bro. Scott Gorman – Chairman<br>
    (908) 531-3667</p>
    
    <p><b>C. Clayton Yett Chapter</b><br>
    meeting at Tyrian Lodge #34<br>
    39 Maple Ave.<br>
    Morristown, N.J. 07960</p>
    
    <p>PM Reginald Mintor - Chairman<br>
    (973) 296-1928<br>
    Terence Berry – Advisor<br>
     (973) 727-7450<br>
    Yusef Greene – Advisor<br>
     (908) 531-7599<br>
    Daryl Clarke – Advisor<br>
     (917) 755-0659</p>
    
    <p><b>Stone Square Chapter</b><br>
    meeting at Stone Square Lodge #38<br>
    722 St. Mary’s Ave.<br>
    Plainfield, N.J. 07062<p>
    
    <p>Bro. Clayton Tucker - Chairman<br>
    (908) 553-4669<br>
    Charles Salley – Advisor<br>
    (908) 392-0006<p>
    </div>
  </section>
  <section>
    <p class="title" data-section-title><a>7th District (Hudson County NJ)</a></p>
    <div class="content" data-section-content>
    <p><b>Friendship Chapter</b><br>
    meeting at Friendship Lodge #44<br>
    78 Summit Avenue<br>
    Jersey City, NJ 07304<p>
    
    <p>Bro. Jermaine D. Sanders – Chairman<br>
    (201) 667-6374<br>
    Derrick Macken – Master Councilor<p>
    
    <p><b>Omega Chapter</b><br>
    meeting at Omega Lodge #64<br>
    453 Avenues C<br>
    Bayonne, N.J. 07305<p>
    
    <p>Harold Foster – Chairman<br>
    (201) 324-2818<br>
    James E. Davis – Advisor<br>
    (201) 324-1471<p>   
    </div>
  </section>
    <section>
    <p class="title" data-section-title><a>8th District (Newark)</a></p>
    <div class="content" data-section-content>
    <p><b>Wallace Greene, Jr. Chapter</b><br>
    meeting at Tyre Lodge #29<br>
    180-190 Irvine Turner Blvd.<br>
    Newark, N.J. 07108</p>
    
    <p>Darren E. Burton , Sr. - Chairman<br>
    (973) 202-6003<br>
    Master Councilor - Christian Smith</p>
    </div>
  </section>
</div>
</p>
</div>
</div>

<div class="large-5 columns">
<div class="panel">
<h4 align="right">Date to Remember</h4>

<p><b>Career Day 2014</b><br>
March 22, 2014<br>
188-190 Irvine Turner Blvd
Newark, NJ
09:00 AM- 1:00 PM EST</p>


<p><b>Pythagoran Grand Session</b><br>
Fri, June 6th – Sun, June 8</p>

</div>

<div class="large-5 columns">
<div class="panel">
<p>
<h4 align="right">Media</h4>
<iframe width="100%" height="315" src="//www.youtube.com/embed/v7Et1A728wU" frameborder="0" allowfullscreen></iframe>
</p>
</div>
</div>

</div><!-- end row -->