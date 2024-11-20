<?php
 
$date = new DateTime;
$newDate = $date->modify('+1 day');

echo $date->format('d/m/y').PHP_EOL;
echo $newDate->format('d/m/y').PHP_EOL;

$formatedDate = $date->modify('+1 dat')->format('d/m/y');
echo $formatedDate.PHP_EOL;