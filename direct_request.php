<?php 
	date_default_timezone_set('America/New_York');
	$confirmed = 'http://schemas.google.com/g/2005#event.confirmed';
	$one_month_in_seconds = 60 * 60 * 24 * 30; //60 secs x 60mins x 24 hours x average # of days in a month

	$minus_month_in_seconds = 60 * 60 * 24 * 30; //60 secs x 60mins x 24 hours x average # of days in a month
	
	
	##$today = date("Y-m-d\TH:m:s", time());//no need to see older dates
	##$one_month_from_today = date("Y-m-d\TH:i:s", time() + $one_month_in_seconds);
	$today = date("Y-m-d\TH:m:s", time() - $minus_month_in_seconds);
	$one_month_from_today = date("Y-m-d\TH:i:s", time() + $minus_month_in_seconds);
	
	$feed = "http://www.google.com/calendar/feeds/".$gl_calendar_url."/" . 
		"public/basic?&orderby=starttime&sortorder=ascending&singleevents=true&" . 
		"start-min=" . $today . "&" .
		"start-max=" . $one_month_from_today ."&futureevents=true&max-results=200";
		
	$s = simplexml_load_file($feed); 
	$id=0;

	foreach ($s->entry as $item) {

		$gd = $item->children('http://schemas.google.com/g/2005');

		if ($gd->eventStatus->attributes()->value == $confirmed && strpos($item->title,'M.W. RMN') !== false && $gd->when->attributes()->startTime <= $one_month_from_today) 
        {
 ?>

<p style="text-align:left; margin:3px;">
			<b>
			<?php 
				$arr_remove = array("M.W. RMN","-");
				print str_replace($arr_remove,"", $item->title); 

				echo "</b><br>";

				$id++;

			$startTime = '';

			if ( $gd->when ) {
				$startTime = $gd->when->attributes()->startTime;
				$endTime = $gd->when->attributes()->endTime;

			} elseif ( $gd->recurrence ) {
				$startTime = $gd->recurrence->when->attributes()->startTime; 
				$endTime = $gd->recurrence->when->attributes()->endTime; 
			} 

			print date("l F jS Y",(strtotime( $startTime )));
			echo " - ";
			print date("h:i A",(strtotime( $startTime )));
			print date("- h:i A",(strtotime( $endTime )));

			// Google Calendar API's support of timezones is buggy
			print " EST<br>";
 
			if($gd->where->attributes()->valueString == ''){
			echo "<div style='margin-bottom:-10px;'></div>";
			}else{
			print $gd->where->attributes()->valueString."<br>";
            }
            ?>
			<br></p>
<?php
		}
} ?>