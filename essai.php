<?php
 
$date = new DateTimeImmutable;
$newDate = $date->modify('+1 day');

echo $date->format('d/m/Y').PHP_EOL;

echo $date->format('d/m/Y').PHP_EOL;