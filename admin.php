<?php
session_start();
  if(isset($_SESSION['logout_ind']) && $_SESSION['access_level']='admin'){
?>
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>The Most Worshipful Prince Hall Grand Lodge of New Jersey - Admin Area</title>
  
  <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/fc-webicons.css">
  <script src="js/jquery.min.js"></script>
 
  <link rel="stylesheet" href="css/jquery-ui.css" />

   <script>
    $(function() {
        $( "#datepicker1" ).datepicker();
      });
	
    $(function() {
        $( "#datepicker2" ).datepicker();
      });
    </script>

    
  <script src="js/vendor/custom.modernizr.js"></script> 
  
    <!-- foundation datepicker start -->

<!--   <script src="js/bootstrap-datetimepicker.js"></script> -->
  <link rel="stylesheet" href="css/foundation-datepicker.css">
  <!-- foundation datepicker end -->
  
    <style>
	#response{
		margin-bottom:20px;
		color:#06F;
		font-weight:bold;
		}
	small{ font-size:12px; color:#FF0000;}	
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

    <script type="text/javascript">
	$('#update').hide();
	function getBody(){
	  var selectval = $('#masonicbody').val();
  
	  $.post("getbody.php", {
		  d: selectval
	  }, function (output) {
		  $('#bodyResponse').html(output).fadeIn();
		});
	}

<!-- delete announcement -->
	$('#Response1').hide();
	function hideAnnoucement(){
	  var selectval = $('#delete_announce').serializeArray();
  
	  $.post("bin/hideAnnoucement.php", {
		  d: selectval
	  }, function (output) {
		  $('#Response1').html(output).fadeIn();
		});
	}
	
	function getSick(){
	$('#SickResponse').hide();
	  var name = $('#name').val();
	  var affiliation = $('#affiliation').val();
	  var message = $('#message').val();
	  var date = $('#datepicker2').val();
  
	  $.post("bin/process_sick.php", {name: name, affiliation: affiliation, message: message, date : date}, function (output) {
		  $('#SickResponse').html(output).fadeIn();
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
<h2 style="color:#FFF; margin-top:-25%; margin-left:10%">Website Admin Area</h2>
</p>
<p style="color:#FFF; margin-top:-3%; margin-left:10%; line-height:16px;"> In this section you have access to:<br>
- Add to Sick & Distress section<br>
- Add Announcements<br>
- Update officers information</p>
</div>

 
<div class="row" style="padding-top:8%;">
 
<div class="large-12 columns">
<div class="panel">

<div class="section-container auto" data-section="tabs">
  <section class="active">
    <p class="title" data-section-title><a>Add/Delete an Annoucement</a></p>
    <div class="content" data-section-content>
    <h2>Add Annoucements</h2>
    <?	
	// Define MySQL Settings
	include ('db_con.php');
	
	if(isset($_POST['Submit'])){	
		$Atitle = $_POST['title'];
		$Adescription = $_POST['description'];
		$submit_date = date('Y-m-d');
		$Adatepicker1 = $_POST['date'];
		$Ashowalert = $_POST['alert'];
		$Ashow_home = $_POST['show_home'];
		if($_FILES['file']['name']<> ' ' && $_FILES['file']['name']<> ''){
		$file = "documents/".$_FILES['file']['name'];
		}
		$image = $_FILES['image']['name'];
		
		if($_POST['title']=='' || $_POST['description']==''){
		echo "<h2 style='text-align:center; color:#FF0000'>Please complete all required fields!</h2>";
		}else{
		
		mysql_query("INSERT into announcements values('','$Atitle','$Adescription','$file','A','$submit_date','$Adatepicker1','$Ashow_home','$Ashowalert','$image')");
		
		move_uploaded_file($_FILES["file"]["tmp_name"],"documents/" . $_FILES["file"]["name"]);
		move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $_FILES["image"]["name"]);
			
		echo "<h2 style='text-align:center; color:#00F'>Update Complete!</h2>";
		$_POST = array(); 
		}
	}
	?>
            <form name="annoucement" id="annoucement" action="" method="post" enctype="multipart/form-data">

            <div class="row">          
             <div class="large-6 columns">
                <label>Title</label>
                <input type="text" name="title" id='title'>
              </div>
              </div>
        
            <div class="row">
            <div class="large-8 columns">
            <label>Description</label>
            <textarea name="description" id='description' rows="100" style="height:200px;"/></textarea>
            </div>
            </div>

            <div class="row">
              <div class="large-3 columns">
                <label>Display Until Date:</label>
                <input type="text" name="date" id="datepicker1" />
              </div>
            </div>              
            
            <div class="row">
              <div class="large-8 columns">
                <label>Attachment:</label>
                <input type="file" name="file" id='uploader' />
              </div>
            </div> 
           <br>   
            <div class="row">
              <div class="large-8 columns">
                Show on the "Announcements" section of home page: <input type="checkbox" id='show_home' name="show_home" value='Y'><br>
                Show as an alert on the home page: <input type="checkbox" id='alert' name="alert" value='Y'>
              </div>
            </div> 
           <br>                 
            <div class="row">
              <div class="large-8 columns">                
                Image to include on the homepage slideshow:<i>(Optional)</i><br>
                <i>Image must be 637x298 pixels</i>
                <input type="file" name="image" id='image' />

              </div>
            </div>   
          <br>                           
            <div class="row">
            <div class="large-8 columns">
            <input type="submit" value="Submit" name="Submit">
       		</form>
            </div>
            </div>
            
            <hr>
            <div class="row">
            <div class="large-8 columns">
            <h2>Delete Annoucements</h2>
            <form id='delete_announce' method='post'>
            <?php
            //displays announcements stored on the DB  
	$results1 = mysql_query("Select *, DATE_FORMAT(date_submitted,'%m/%d/%Y') AS date from announcements where display_until >= CURRENT_TIMESTAMP order by display_until");
	echo "<div class='row' style='margin-bottom:10px;'><div class='large-2 columns'><h4>ID</h4></div><div class='large-9 columns'><h4>Title</h4></div><div class='large-1 columns'></div></div>";
	while($num1 = mysql_fetch_array($results1)){
		echo "<div class='row'><div class='large-2 columns'>".$num1['id']."</div>";
		echo "<div class='large-9 columns'>".$num1['title']." (".$num1['display_until'].")</div>";
		echo "<div class='large-1 columns'><input type=checkbox value='".$num1['id']."' name='id_nbr[]' id='id_nbr[]'></div></div>";
		}
	echo"<div class='row' style='text-align:right;'><div class='large-12 columns'><button onClick='hideAnnoucement();'>Delete</button></div></div>";
            ?>
            </form>
            <div id="Response1"><!--this section will display update message--></div>    
          </div>
          </div>  


  </div>
  </section>
  
  <section>
    <p class="title" data-section-title><a>Sick & Distressed</a></p>
    <div class="content" data-section-content>
    <h2>Sick & Distressed</h2> <div id='SickResponse'></div>
            <form id="sick_distressed">
            <div class="row">
             
             <div class="large-6 columns">
                <label>Brother/Sister's Name:</label>
                <input type="text" id="name">
              </div>
              </div>
        
            <div class="row">
              <div class="large-8 columns">
                <label>Blue Lodge/OES Chapter Affiliation:</label>
                <input type="text" id="affiliation">
              </div>
              
            </div>
        
            <div class="row">
            <div class="large-8 columns">
            <label>Message to be displayed on the website:</label>
            <textarea placeholder="" rows="100" cols="100" id="message"></textarea>
            </div>
            <div class="large-4 columns">           
            <br><small>Make sure to include all pertinent information regarding funeral services, assembly times, location address, contact information, Etc.</small>
            </div>
            </div>
            
            <div class="row">
              <div class="large-3 columns">
                <label>Display message until:</label>
                <input type="text" id="datepicker2" name="date" />
              </div>
            </div>
            
            <div class="row">
            <div class="large- columns">
            <input type="button" value="Submit" name="Submit" onClick="getSick();">
            </div>
            </div>
       		</form>
    </div>
  </section>  

  <section>
    <p class="title" data-section-title><a>Update Lodge Info.</a></p>
    <div class="content" data-section-content>
    <h2>Update Lodge Information</h2>
    <p style="margin-top:-3%;">For District No. <?=$_SESSION['access2district'];?> </p>

            <form name="update_officers_lodge">
    
 <?php
	$district = $_SESSION['access2district'];
	$get_district = mysql_query("SELECT * FROM lodges WHERE district ='$district'");
	
	while($get_lodge_result = mysql_fetch_array($get_district))
 	{
	?>
    		<h4><?=$get_lodge_result['lodge_name'];?> Lodge No. <?=$get_lodge_result['lodge_nbr'];?></h4>
			 <div class="row"> 
             <div class="large-6 columns">
                <label>WM Name:</label>
                <input type="text" name="name_<?=$get_lodge_result['lodge_nbr'];?>" value="<?=$get_lodge_result['wm'];?>">
              </div>
              </div>
        
            <div class="row">
              <div class="large-8 columns">
                <label>WM Email:</label>
                <input type="text" name="email_<?=$get_lodge_result['lodge_nbr'];?>" value="<?=$get_lodge_result['wm_email'];?>">
              </div>    
            </div>
        
            <div class="row">
              <div class="large-8 columns">
                <label>Lodge Website:</label>
                <input type="text" name="website_<?=$get_lodge_result['lodge_nbr'];?>" value="<?=$get_lodge_result['url'];?>">
              </div>
            </div><hr>
  
	 <?php     
    }
    ?>   
            <div class="row">
            <div class="large-8 columns">
            <input type="button" value="Submit" name="Submit" onClick="get();">
            <input type="hidden" value="2" name="update_officers_lodge">            
            </div>
            </div>
       		</form>           
    </div>
  </section>
    
  <section>
    <p class="title" data-section-title><a>Update Masonic Body Info.</a></p>
    <div class="content" data-section-content>
    <h2>Update Masonic Body Information</h2>    
 <?php
	$body = $_SESSION['access2bodies'];
	$new_body = str_replace(",", "','", $body);
	$get_body1 = mysql_query("SELECT id, name, update_access_code FROM masonic_bodies WHERE update_access_code in ('$new_body')");
	
	echo "<div class='row'>
	<div class='large-12 columns'>
		<select name='masonicbody' id='masonicbody' onChange='getBody();'>
		<option value=''>Please make a selection</option>";
	while($get_body_result1 = mysql_fetch_array($get_body1))
 	{
	echo "<option value='".$get_body_result1['update_access_code']."'>".$get_body_result1['name']."</option>";
	}
	echo "</select>
	</div>
	</div>";
	
	?>
    <div id="bodyResponse"><!--this section will display officer info--></div>
    
    </div>
  </section>
  
	 </div>
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
  
  <script src="js/jquery-ui.js"></script>
  
  <script src="js/upclick-min.js"></script>  
  
  <script>
    $(document).foundation();
  </script>
</body>
</html>
<?php
}else{ 
echo 'You are not authorize to access this page!';
}
?>