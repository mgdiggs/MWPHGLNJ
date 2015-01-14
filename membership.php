<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>The Most Worshipful Prince Hall Grand Lodge of New Jersey</title>

  
  <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/fc-webicons.css">
  

  <script src="js/vendor/custom.modernizr.js"></script>
  
      <script type="text/javascript">
	function getValues(){
		$('#response').hide();
	  var zipcode = $('#zipcode').val();
	  var distance = $('#distance').val();
	  var results_nbr = $('#results_nbr').val();
	  
	  $.post('findLodge.php', {zipcode: zipcode, distance: distance, results_nbr: results_nbr},
			function(output) {
				$('#response').html(output).fadeIn();
			});
	}
	</script>
   <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
 
   <script type="text/javascript">
    //<![CDATA[

    var customIcons = {
      restaurant: {
        icon: 'http://labs.google.com/ridefinder/images/mm_20_blue.png',
        shadow: 'http://labs.google.com/ridefinder/images/mm_20_shadow.png'
      },
      bar: {
        icon: 'http://labs.google.com/ridefinder/images/mm_20_red.png',
        shadow: 'http://labs.google.com/ridefinder/images/mm_20_shadow.png'
      }
    };

    function load() {
      var map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(40.206323800000000000,-74.765661200000000000),
        zoom: 8,
        mapTypeId: 'roadmap'
      });
      var infoWindow = new google.maps.InfoWindow;
      downloadUrl("points.xmlxxx", function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName("marker");
        for (var i = 0; i < markers.length; i++) {
          var hname = markers[i].getAttribute("Hname");
          var point = new google.maps.LatLng(parseFloat(markers[i].getAttribute("Lat")), parseFloat(markers[i].getAttribute("Longt")));
          var html = "<b> " + hname + " </b>";
          var type = "restaurant";
		  var icon = customIcons[type] || {};
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            icon: icon.icon,
            shadow: icon.shadow
           });
           bindInfoWindow(marker, map, infoWindow, html);
        }
      });
    }
    function bindInfoWindow(marker, map, infoWindow, html) {
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
    }
    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;
      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request, request.status);
        }
      };
      request.open('GET', url, true);
      request.send(null);
    }

    function doNothing() {}
    //]]>

  </script>    

</head>
  <body onLoad="load();">
<?php 
require ('menu.php');
?>
 
<!-- Main Grid Section -->
<div class="row" style="padding-top:10px;">
<p align="center"><img src="images/other_page_header.png">
<h2 style="color:#FFF; margin-top:-25%; margin-left:10%">Becoming a Member</h2>
</p>
</div>

 
<div class="row" style="padding-top:10%;"> 
<div class="large-8 columns">
<div class="panel">

<h2>How do I become a Member?</h2>

<p>“Ask and it will be given to you; seek and you will find; knock and the door will be opened to you. ” Matthew 7:7
 Membership in a Masonic Lodge is on a volunteer basis only. Membership should never be solicited for it is our belief that true service and dedication must first come from the heart. A person seeking membership must first contact a Mason whom he knows to be in good standing. That member will take the necessary steps to allow the candidate to fill out a petition.</p>

<p>The petition will be taken to a lodge meeting where a committee will review the character of the applicant. That committee will often visit the applicant in his home, talk with his family and verify his personal history. Only men of good report are accepted in this fraternity. Based upon the committee findings the petition will then be balloted upon by all members present as to whether the candidate should be accepted.</p>
 
<p>If the applicant is accepted, he will be notified as to the date, time and location on which he will receive the first of three separate degrees. Each degree entails certain inalienable rights and privileges. Suitable proficiency must be attained in each degree before advancement. These first three degrees are the most important for they are the foundation upon which this institution rests. Much will be committed to memory, such as the working tools of each degree, oaths, modes of recognition, etc.</p>
 
<p>The tools of the early builders have remained as symbols to allegorically help masons understand and remember the teachings of the fraternity. Through the strengthening of the individual’s character, Masonry seeks to improve the community and to make good men become better through belief in the Fatherhood of God, the Brotherhood of Man and the immortality of the soul.</p>

<p>We meet regularly in many different communities through out NJ.</p>
    <div class="large-5 columns" style="background-color:#CCFFFF; border:2px solid #000000; margin-right:20px;">
    <p id="Locator">Locate a Prince Hall Masonic Lodge near you!</p>
    Enter your zipcode: <input id="zipcode" type="text" maxlength="5">
    Distance: <select id="distance">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="999">All</option>
                </select>
    # of Results to return: <select id="results_nbr">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="999">All</option>
                </select>
    <button onClick="getValues();">Find!</button>
    <!--<button onClick="load();">Show on Map</button>-->
    </div>
   <div class="large-5 columns">
    
    <div id="response"></div>
                   
    </div>
 <!--<div id="map" style="width: 300px; height: 500px; float:left; margin-right:10px;"></div> -->
    <div style="clear:left";></div>
 
        
<br>


</p>
</div>
</div>

<div class="large-4 columns">
<div class="panel">
<p>
<img src="images/light.png">
</p>
</div>
</div>
 
<div class="large-4 columns">
<div class="panel">
<p>
<img src="images/light.png">
</p>
</div>
</div>

<div class="large-4 columns">
<div class="panel">
<p>
<a href="membership.php"><img src="images/be_member.png"></a>
</p>
</div>
</div>

<!-- 
<div class="row">
<div class="large-6 columns">
<div class="panel">
<h5>Community News</h5>
<p>This is a six columns grid panel with an arbitrary height. Bacon ipsum dolor sit amet salami ham hock biltong ball tip drumstick sirloin pancetta meatball short loin.</p>
</div>
</div>

<div class="large-3 columns">
<div class="panel">
<h5>Lodge of the Year</h5>
<p>This is a three columns grid panel with an arbitrary height.</p>
</div>
</div>

<div class="large-3 columns">
<div class="panel">
<h5>Member's Only</h5>
<p>This is a three columns grid panel with an arbitrary height.</p>
</div>
</div>


<div class="large-8 columns">
<div class="panel" align="center">

</div>
</div>

<div class="large-4 columns">
<div class="panel">
<h5>...</h5>
<p style="padding-top:210px;"></p>
</div>
</div>
-->
 
</div>
 
<!-- End Grid Section -->
 
 
 
<!-- Start Footer -->
<?php 
require ('footer.php');
?>
<!-- End Footer -->

  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <!--<script src="js/foundation.min.js"></script>  -->

  
  <script src="js/foundation/foundation.js"></script>
  
  <script src="js/foundation/foundation.alerts.js"></script>
  
  <script src="js/foundation/foundation.clearing.js"></script>
  
  <script src="js/foundation/foundation.cookie.js"></script>
  
  <script src="js/foundation/foundation.dropdown.js"></script>
  
  <script src="js/foundation/foundation.forms.js"></script>
  
  <script src="js/foundation/foundation.joyride.js"></script>
  
  <script src="js/foundation/foundation.magellan.js"></script>
  
  <script src="js/foundation/foundation.orbit.js"></script>
  
  <script src="js/foundation/foundation.reveal.js"></script>
  
  <script src="js/foundation/foundation.section.js"></script>
  
  <script src="js/foundation/foundation.tooltips.js"></script>
  
  <script src="js/foundation/foundation.topbar.js"></script>
  
  <script src="js/foundation/foundation.interchange.js"></script>
  
  <script src="js/foundation/foundation.placeholder.js"></script>
  
  <script src="js/foundation/foundation.abide.js"></script>
  
  <script>
    $(document).foundation();
  </script>
</body>
</html>
