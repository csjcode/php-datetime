<?php

// let's say our date is currently in format 2016-11-14

$dateString = '2016-11-14';

$date = DateTime::createFromFormat('Y-m-d',$dateString); // this rflect the current date strucure we have

var_dump($date);

echo $date->format('dS M Y');

 ?>
