<?php



// 1 - One way of modifying it - fine control

// $date = new DateTime;
// $date -> add(new DateInterval('P10DT2H')); // increment date by 10 days and 2 hours
// var_dump($date);
// $date -> sub(new DateInterval('P10DT2H')); // increment date by 10 days and 2 hours
// var_dump($date);

// 2 - Another way of modifying - easier

// $date = new DateTime('+2 days 5 hours');

// 3 - Or to use that method while setting the date

$date = new DateTime;
$date->setDate(1989,11,16);
$date->modify('+2 days 5 hours');



 ?>
