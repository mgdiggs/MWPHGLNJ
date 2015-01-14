<?php
session_start();

if(isset($_SESSION['logout_ind'])){
$dir    = '/var/www/ph/phgladmin/public_html/secure';
$arr = scandir($dir);

echo"<li class='divider'></li><li class='has-dropdown'><a href='#'>Members Only Files</a>
        <ul class='dropdown'><li class='divider'></li>";

foreach ($arr as $value) {
    if($value != '..' && $value != '.' && $value != '.htaccess'){
	echo "<li><a href='/secure/".$value."'>".$value."</a></li><li class='divider'></li>";
	}
	}
	
echo "</ul></li>";
}
?>