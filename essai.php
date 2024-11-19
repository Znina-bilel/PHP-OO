<?php

function foo(DateTime $date){
    $date->modify('+1 day');
}

$date = new DateTime;
foo($date);