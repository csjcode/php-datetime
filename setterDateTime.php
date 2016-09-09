<?php

// $date = new DateTime;
// $date->setTimeStamp('1466927122');

// SHORTCUT

// $date = (new DateTime)->setTimeStamp('1466927122');
// var_dump($date);
// echo $date->format('Ymd');

$date = new DateTime;

$date->setDate(2016,11,16); // Set date year, month, day
$date->setTime(2016,11,16); // Set time hour, minute, seconds

var_dump($date);

 ?>
