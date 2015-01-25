<?php
####################################
##### Begin Configuration ##########
# Start date of string to populate #
$date = '2015-01-26';
## End date of string to populate ##
$end_date = '2015-05-14';
###### End Configuration ##########
####################################
while ($date <= $end_date) {
echo makeJSON($date);
$date = date('Y-m-d', strtotime($date . ' + 1 day'));
}
function makeJSON($date) {
$w = date('w', strtotime($date));
if ($w==0) {$refstart = $date.'T12:00:00'; $refend = $date.'T20:00:00';}
elseif ($w==5) {$refstart = $date.'T08:00:00'; $refend = $date.'T16:00:00';}
elseif ($w==6) {$refstart = $date.'T14:00:00'; $refend = $date.'T18:00:00';}
else {$refstart = $date.'T08:00:00'; $refend = $date.'T20:00:00';}
return '
{
"title": "IT Desk",
"start": "'.$refstart.'",
"end": "'.$refend.'",
"borderColor": "white",
"backgroundColor": "#FEEEE2 !important;"
},';
}
?>
