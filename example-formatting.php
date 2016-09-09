<?php

// Basic DateTime formatting

echo '<h3>Basic DateTime formatting</h3>';

$date = new DateTime;
echo '<p>' . $date->format('dS M Y') . '</p>'; // 09th Sep 2016

// Leap Year check

echo '<h3>Leap Year check</h3>';

$date_leap = new DateTime;

echo 'Is it a Leap Year? ';
if ($date->format('L')>0){
  echo 'YES';
} else {
  echo 'No';
}

// Get Timestamp

echo '<h3>Get Timestamp</h3>';
echo $date->getTimeStamp();

// Get Timezone object

echo '<h3>Get Timezone object var dump</h3>';
echo '<pre>';
var_dump ($date->getTimezone());
echo '</pre>';

// Get Timezone name

echo '<h3>Get Timezone object var dump</h3>';
echo '<pre>';
var_dump ($date->getTimezone()->getName());
echo '</pre>';



 ?>
