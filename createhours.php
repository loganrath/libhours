<?php

####################################
##### Begin Configuration ##########
# Start date of string to populate #
$date = '2014-11-01'; 
## End date of string to populate ##
$end_date = '2014-12-31'; 
######  End Configuration ##########
####################################


while ($date <= $end_date) {
	echo rtrim(makeJSON($date), ",");
	$date = date('Y-m-d', strtotime($date . ' + 1 day'));
}

function makeJSON($date) {
	$w = date('w', strtotime($date));
	if ($date == '2014-11-26') {$libhours='7:45am - \r\n5pm'; $bg='cyan !important';}
	elseif ($date >= '2014-11-27' && $date <= '2014-11-29') {$libhours = "CLOSED"; $bg='red !important';}
	elseif ($w==0) {$libhours = '12pm -\r\n1:30am'; $bg='#8DC53E !important';}
	elseif ($w==6) {$libhours = '12pm -\r\n8pm'; $bg='#8DC53E !important';}
	else {$libhours = '7:45am -\r\n1:30am'; $bg='#8DC53E !important';}
return '
{
    "allDay": true,
    "title": "'.$libhours.'",
    "start": "'.$date.'",
    "end": "'.date('Y-m-d', strtotime($date . ' + 1 day')).'",
    "borderColor": "white",
    "backgroundColor": "'.$bg.'"
  },';
}
?>
