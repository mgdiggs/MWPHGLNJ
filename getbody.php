<?php
session_start();
include ('db_con.php');

$option = $_POST['d'];
$_SESSION['option'] = $option;
?>
   <html>
   <head>
    <script type="text/javascript">
	
	function Update(){
	$('#Response').hide();
	  var selectval = $('#update_masonic_bodies').serializeArray();
  
	  $.post("bin/process_admin.php", {bookArray: selectval}, function (output) {
		  $('#Response').html(output).fadeIn();
		});
	}
	</script>
</head>
<body>
<?php
$get_body = mysql_query("SELECT id, name, update_access_code FROM masonic_bodies WHERE update_access_code='$option'");
	while($get_body_result = mysql_fetch_array($get_body))
 	{
			echo "<h4>".$get_body_result['name']."</h4>
			<form id='update_masonic_bodies' method='post'>";
            $get_officers = mysql_query("SELECT id, name, title FROM gl_officers WHERE masonic_body like '%$option%'");
			echo"<div class='row'>
			 <div class='large-1 columns'>&nbsp;</div>

			 <div class='large-5 columns'>
                <label>Officer Name:</label>
				</div>
			 <div class='large-6 columns'>
                <label>Title:</label>
				</div>";
				
			while($get_officer_result = mysql_fetch_array($get_officers)){
			?>
			<div class="row">
             <div class="large-1 columns">&nbsp;</div>
             <div class="large-5 columns">
                <input type="text" name="<?=$get_officer_result['id'];?>" id="officername" value="<?=$get_officer_result['name'];?>">
              </div>
              
             <div class="large-6 columns">
                <?=$get_officer_result['title'];?>
              </div>
              </div>
    <?
			}
	}
if ($option<>''){
?>  
    <div class="row">
            <div class="large-12 columns">
            <div id="Response"><!--this section will display update message--></div> <p style="margin-right:30px; text-align:right;"><button onClick="Update(); return false;">Update</button>
            </form><p>
            <hr>
     
            </div>
            </div>
<?
}
?>
</body>
</html>