<?php

$date = '2014-11-01';
while ($date <= '2014-12-31') {
	echo makeJSON($date);
	$date = date('Y-m-d', strtotime($date . ' + 1 day'));
}

function makeJSON($currdate) {
	$w = date('w', strtotime($currdate));
	if ($currdate == '2014-11-26') {$libhours='7:45am - \r\n5pm'; $bg='cyan !important';}
	elseif ($currdate >= '2014-11-27' && $currdate <= '2014-11-29') {$libhours = "CLOSED"; $bg='red !important';}
	elseif ($w==0) {$libhours = '12pm -\r\n1:30am'; $bg='#8DC53E !important';}
	elseif ($w==6) {$libhours = '12pm -\r\n8pm'; $bg='#8DC53E !important';}
	else {$libhours = '7:45am -\r\n1:30am'; $bg='#8DC53E !important';}
echo'
{
    "allDay": true,
    "title": "'.$libhours.'",
    "start": "'.$currdate.'",
    "end": "'.date('Y-m-d', strtotime($currdate . ' + 1 day')).'",
    "borderColor": "white",
    "backgroundColor": "'.$bg.'"
  },';
}
?>
