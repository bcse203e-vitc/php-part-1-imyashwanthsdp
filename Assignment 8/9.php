<?php
$temps = array(78,60,62,68,71,68,73,85,66,64,76,63,75,76,73,68,62,73,72,65,74,62,62,65,64,68,73,75,79,73);
$avg = array_sum($temps)/count($temps);
echo "Average Temperature is : ".$avg."\n";
sort($temps);
echo "List of seven lowest temperatures : ".implode(", ", array_slice($temps,0,7))."\n";
echo "List of seven highest temperatures : ".implode(", ", array_slice($temps,-7))."\n";
