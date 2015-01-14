<?
session_start();

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require_once 'google-api/Google_Client.php';
require_once 'google-api/contrib/Google_CalendarService.php';

ShowCalendar();

function ShowCalendar(){
$gl_calendar_url = $_SESSION["calendar"];
/*  Required for Google API */
$CLIENT_ID = '141678929863-g9k899imopvhg0a2l7rvbuohq9uub7og.apps.googleusercontent.com';
$SERVICE_ACCOUNT_NAME = '141678929863-g9k899imopvhg0a2l7rvbuohq9uub7og@developer.gserviceaccount.com';
$KEY_FILE = '7cacf0347201c40f7d7bad04176b306161cd6d1f-privatekey.p12';
$CALENDARID = $gl_calendar_url.'@group.calendar.google.com';

$client = new Google_Client();
$client->setApplicationName('CJGROOVE');
$client->setUseObjects(true);

if (isset($_SESSION['token'])) {
 $client->setAccessToken($_SESSION['token']);
}

/* Getting your API key from the P12 File and using it for Authentication */
$full_gl_calendar_url='https://www.google.com/calendar/feeds/'.$gl_calendar_url.'/private/full/';
$key = file_get_contents($KEY_FILE);
$client->setClientId($CLIENT_ID);
$client->setAssertionCredentials(new Google_AssertionCredentials(
  $SERVICE_ACCOUNT_NAME,$full_gl_calendar_url,$key)
);

$client->setClientId($CLIENT_ID);
$cal = new Google_CalendarService($client);
$today = date("Y-m-d\TH:i:s.000-05:00", time());
$four_months_in_seconds = 60 * 60 * 24 * 28 * 2;
$four_months_from_today = date("Y-m-d\TH:i:s.000-05:00", time() + $four_months_in_seconds);
$id=0;

$optParams = array('singleEvents' => TRUE, 'orderBy' =>'startTime', 'timeMin' => $today, 'timeMax' =>$four_months_from_today, 'timeZone' =>'America/New York');

$events = $cal->events->listEvents($CALENDARID, $optParams);
while(true) {
  foreach ($events->getItems() as $event) {
		echo "<div style='width:100%; margin:10px; margin-bottom:5px;'>";
	   	  echo "<font size=2><b>".$event->getSummary()."</b><br>";
		  $start = $event->getStart();
		  if ($start->getDate()==''){
		  echo date("M d, Y",strtotime ($start->getDateTime())).' - '.date("h:i A",strtotime ($start->getDateTime())).'<br>';	
		  }else{
		  $end = $event->getEnd();	
		  echo date("M d, Y",strtotime ($start->getDate())).' - '.date("M d, Y",strtotime ($end->getDate())).'<br>';	
		  }
		  if($event->getLocation()<>''){
		  echo "Location: ".$event->getLocation().'<br>';
	  		}
		  echo '<br>';
	 echo "</div>"; 
	}// end foreach

 $pageToken = $events->getNextPageToken();
  if ($pageToken) {
    $optParams = array('pageToken' => $pageToken,'singleEvents' => TRUE, 'orderBy' =>'startTime', 'timeZone' =>'America/New York');
    $events = $cal->events->listEvents($CALENDARID, $optParams);
  } else {
    break;
   }
 }//end while
}// end function showCalendar
?>