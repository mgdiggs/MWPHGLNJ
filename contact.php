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
    <style>
	#response{
		margin-bottom:20px;
		color:#06F;
		font-weight:bold;
		}
	</style>
    
    <script type="text/javascript">
	function get(){
		$('#response').hide();
		$.post('process.php', {name: contact_us.name.value},
			function(output) {
				$('#response').html(output).fadeIn();
			});
	}
	</script>
    </head>
<body>
<?php 
require ('menu.php');
?>
 
<!-- Main Grid Section -->
<div class="row" style="padding-top:10px;">
<p align="center"><img src="images/other_page_header.png">
<h2 style="color:#FFF; margin-top:-25%; margin-left:10%">Contact Us</h2>
</p>
</div>

 
<div class="row" style="padding-top:10%;">
 
<div class="large-12 columns">
<div class="panel">
<img src="images/lodge_image_11-27-2013 18-33-47.jpg"><br>
<?php
$contact_us = '
<div id="response">The section is under contruction but will be active soon. Thank You</div>

<form name="contact_us">
    <div class="row">
     
	 <div class="large-6 columns">
        <label>Name</label>
        <input type="text" name="name">
      </div>
	  </div>

    <div class="row">
      <div class="large-8 columns">
        <label>Email</label>
        <input type="text" placeholder="">
      </div>
      
    </div>

    <div class="row">
    <div class="large-8 columns">
    <label>Comment</label>
    <textarea placeholder="" rows="50"></textarea>
    </div>
	</div>
	
	<div class="row">
	<div class="large-8 columns">
	<input type="button" value="Submit" name="Submit" onClick="get();">
	</div>
	</div>
</form>
';

$gbook = "<img src='images/gl_undercontruction.png'>";

switch($_GET['mod']) { 

case 'contact_us':
$content = $contact_us;
break;
 
case 'gbook': 
$content = $gbook; 
break;
} 
?>

<? echo $content; ?>

</div>
</div>

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
