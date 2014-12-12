<?php
####################################
##### Begin Configuration ##########
# Start date of string to populate #
$date = '2015-01-25';
## End date of string to populate ##
$end_date = '2015-05-17';
###### End Configuration ##########
####################################
while ($date <= $end_date) {
echo makeJSON($date);
$date = date('Y-m-d', strtotime($date . ' + 1 day'));
}
function makeJSON($date) {
$w = date('w', strtotime($date));
	if ($date == '2014-11-26') {$libhours='7:45am - \r\n5pm'; $bg='#5cb85c !important';}
	elseif ($date == '2015-03-14' || $date == '2015-03-15' || $date == '2015-03-21' || $date == '2015-05-16' || $date == '2015-05-17') {$libhours = "CLOSED"; $bg='#e2e2d4 !important';}
	elseif ($date >= '2015-03-16' && $date <= '2015-03-20') {$libhours = "8am - 4pm"; $bg='#5cb85c !important';}
	elseif ($date == '2015-03-22') {$libhours = "6pm - 1:30am"; $bg='#5cb85c !important'}
	elseif ($w==0) {$libhours = '12pm - 1:30am'; $bg='#5cb85c !important';}
	elseif ($w==5) {$libhours = '7:45am - 5pm'; $bg ='#5cb85c !important';}
elseif ($w==6) {$libhours = '12pm - 8pm'; $bg='#5cb85c !important';}
else {$libhours = '7:45am - 1:30am'; $bg='#5cb85c !important';}
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
