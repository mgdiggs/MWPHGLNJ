<?php
session_start();

function countWords($text)
{
  $wordArray = explode(' ', $text);
  return sizeof($wordArray);
}
	

function truncateWords($text, $maxLength)
{
    // explode the text into an array of words
    $wordArray = explode(' ', $text);

    // do we have too many?
    if( sizeof($wordArray) > $maxLength )
    {
        // remove the unwanted words
        $wordArray = array_slice($wordArray, 0, $maxLength);

        // turn the word array back into a string and add our ...
        return implode(' ', $wordArray) . '...';
    }

    // if our array is under the limit, just send it straight back
    return $text;
}

//Link to GL google calendar
//If google calendar needs to be replaced then just update the calendar URL below
$gl_calendar_url = 'muect6aj4ma2rc3matt0v92mco';

$_SESSION['gl_calendar_url'] = $gl_calendar_url;

?>