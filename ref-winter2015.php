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
	if ($date == '2015-01-10' || $date == '2015-01-11' || $date == '2015-01-24') {$refstart = $date.'T13:00:00'; $refend = $date.'T17:00:00';}
	elseif ($date == '2015-01-17' || $date == '2015-01-18' || $date == '2015-01-19') return '';
else {$refstart = $date.'T12:00:00'; $refend = $date.'T16:00:00';}
return '
{
"title": "Research Help",
"start": "'.$refstart.'",
"end": "'.$refend.'",
"borderColor": "white",
"backgroundColor": "#5BC0DE !important;"
},';
}
?>
