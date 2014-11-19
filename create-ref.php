<?php
####################################
##### Begin Configuration ##########
# Start date of string to populate #
$date = '2014-11-01';
## End date of string to populate ##
$end_date = '2014-12-31';
###### End Configuration ##########
####################################
while ($date <= $end_date) {
echo rtrim(makeJSON($date), ",");
$date = date('Y-m-d', strtotime($date . ' + 1 day'));
}
function makeJSON($date) {
$w = date('w', strtotime($date));
if ($w==0 || $w==6) {$refstart = $date.'T12:00:00'; $refend = $date.'T18:00:00';}
else {$refstart = $date.'T10:00:00'; $refend = $date.'T20:00:00';}
return '
{
"title": "Research Help",
"start": "'.$refstart.'",
"end": "'.$refend.'",
"borderColor": "white",
"backgroundColor": "#8da09f !important;"
},';
}
?>
