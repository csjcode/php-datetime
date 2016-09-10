<?php

$date = new DateTime('2016-12-25 12:00:01');
$date2 = new DateTime('2016-12-01');

// if ($date > $date2) {
//   echo 'Yes';
// }

// echo $date->format('Y');

if ((int) $date->format('Y')){
  echo 'Yes';
}

 ?>
