<!DOCTYPE html>
<html>
<body>

<?php
// entry
$lat = 49.236897; 
$long = 4.061450;

$min_lat = 49.224958;
$min_long = 4.053502;

$max_lat = 49.240803;
$max_long = 4.064688;


if (($min_lat < $lat) && ($lat < $max_lat) && ($min_long < $long) && ($long< $max_long)) {
  echo "You're in Gamin'Reims !";

}
?>
 
</body>
</html>
