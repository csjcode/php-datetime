<?php

$date = new DateTime;

echo '<p>' . $date->format('dS M Y') . '</p>'; // 09th Sep 2016

$date_leap = new DateTime;

echo 'Is it a Leap Year? ';
if ($date->format('L')>0){
  echo 'YES';
} else {
  echo 'No';
}

 ?>
