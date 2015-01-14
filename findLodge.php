<?php

include 'db_con.php';

//Use function below to get the lat/log for a zip
function getLnt($zip){
$url = "http://maps.googleapis.com/maps/api/geocode/json?address=
".urlencode($zip)."&sensor=false";
$result_string = file_get_contents($url);
$result = json_decode($result_string, true);
$result1[]=$result['results'][0];
$result2[]=$result1[0]['geometry'];
$result3[]=$result2[0]['location'];
return $result3[0];
}
$zipcode = $_POST['zipcode'];
$dis = $_POST['distance'];
$result_max = $_POST['results_nbr'];

$val = getLnt($zipcode);
$lat = $val['lat'];
$log = $val['lng'];

$get_loc = mysql_query("SELECT *, ( 3959 * acos( cos( radians('$lat') ) * cos( radians( lat ) )
  * cos( radians( log ) - radians('$log') ) + sin( radians('$lat') ) 
  * sin( radians( lat ) ) ) ) AS distance
FROM lodges
HAVING distance < '$dis'
ORDER BY distance LIMIT 0 , $result_max");

while($get_loc_res = mysql_fetch_array($get_loc)){

echo "<p style='margin-top:20px;'><b>".$get_loc_res['lodge_name']." Lodge No.".$get_loc_res['lodge_nbr']."</b><br>".
     $get_loc_res['street']."<br>";
	 if($get_loc_res['street2']<>''){
	 echo $get_loc_res['street2']."<br>";
	 }
echo $get_loc_res['city'].", ".$get_loc_res['state']." ".$get_loc_res['zip']."<br>";
	 if($get_loc_res['phone']<>''){
	 echo $get_loc_res['phone']."<br>";
	 }
echo "<i style='color:#0066FF'>Distance: ".round($get_loc_res['distance'], 2)."</i></p><hr>";
}

ob_start();

header("Content-type: text/xml");
echo '<markers>'.PHP_EOL;

$get_loc2 = mysql_query("SELECT *, ( 3959 * acos( cos( radians('$lat') ) * cos( radians( lat ) )
  * cos( radians( log ) - radians('$log') ) + sin( radians('$lat') ) 
  * sin( radians( lat ) ) ) ) AS distance
FROM lodges
HAVING distance < '$dis'
ORDER BY distance LIMIT 0 , $result_max");
	
while ($get_loc_res2 = mysql_fetch_array($get_loc2)){
    echo '<marker ';
    echo 'Hname="' . $get_loc_res2['lodge_name'].' Lodge No.'.$get_loc_res2['lodge_nbr']. '" ';
    echo 'Lat="' . $get_loc_res2['lat'] . '" ';
    echo 'Longt="' . $get_loc_res2['log'] . '" ';
    echo '/>'.PHP_EOL;
}
echo '</markers>';

//captures the buffered content and places it into the content variable
$content = ob_get_contents();
ob_end_clean();

//place buffer output into a new XML file
$fp = fopen("points.xml","wb");
fwrite($fp,$content);
fclose($fp);
?>