<?php
####################################
##### Begin Configuration ##########
# Start date of string to populate #
$date = '2014-12-01';
## End date of string to populate ##
$end_date = '2015-01-24';
###### End Configuration ##########
####################################
while ($date <= $end_date) {
echo makeJSON($date);
$date = date('Y-m-d', strtotime($date . ' + 1 day'));
}
function makeJSON($date) {
$w = date('w', strtotime($date));
	if ($date == '2014-11-26') {$libhours='7:45am - \r\n5pm'; $bg='cyan !important';}
	elseif ($date == '2014-12-13' || $date == '2014-12-14' || $date == '2015-01-17' || $date == '2015-01-18' || $date == '2015-01-19') {$libhours = "CLOSED"; $bg='#e2e2d4 !important';}
	elseif ($date >= '2014-12-15' && $date <= '2014-12-19') {$libhours = "8am - 4pm"; $bg='#597A35 !important';}
	elseif ($date >= '2014-12-20' && $date <= '2015-01-04') {$libhours = "CLOSED"; $bg='#e2e2d4 !important';}
	elseif ($date >= '2015-01-05' && $date <= '2015-01-24') {
		if ($date == '2015-01-10' || $date == '2015-01-11' || $date == '2015-01-24') {$libhours = "1pm - 5pm"; $bg = '#597A35 !important';}
		elseif ($w == 0) {$libhours = "CLOSED"; $bg='#e2e2d4 !important';}
		else {$libhours = "8am - 4pm"; $bg = '#597A35 !important';}
	}
		
elseif ($w==0) {$libhours = '12pm - 1:30am'; $bg='#597A35 !important';}
elseif ($w==6) {$libhours = '12pm - 8pm'; $bg='#597A35 !important';}
else {$libhours = '7:45am - 1:30am'; $bg='#597A35 !important';}
if ($bg == "#597A35 !important"){$tc = "white !important";} else {$tc = "black";}
return '
{
"allDay": true,
"title": "'.$libhours.'",
"start": "'.$date.'",
"end": "'.date('Y-m-d', strtotime($date . ' + 1 day')).'",
"borderColor": "white",
"textColor" : "'.$tc.'",
"backgroundColor": "'.$bg.'"
},';
}
?>
