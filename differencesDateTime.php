<?php

$date = new DateTime;

$myDay = (new DateTime)->setDate(2016,11,4)->setTime(10,00,00);

// echo '<pre>' . var_dump($myDay) . '</pre>';

$timeUntilMyDay = $date->diff($myDay);

echo '<pre>' . var_dump($timeUntilMyDay) . '</pre>';

echo $timeUntilMyDay->format('%m months %d days %h hours');

 ?>
