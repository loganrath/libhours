<?php
####################################
##### Begin Configuration ##########
# Start date of string to populate #
$date = '2015-01-05';
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
	if ($w==0 || $w==6) return '';
else {$refstart = $date.'T14:00:00'; $refend = $date.'T16:00:00';}
return '
{
"title": "IT Desk",
"start": "'.$refstart.'",
"end": "'.$refend.'",
"borderColor": "white",
"backgroundColor": "orange !important;"
},';
}
?>
