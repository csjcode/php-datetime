<?php

// $date = new DateTime;
// $date->setTimezone(new DateTimeZone('Europe/London'));

$date = new DateTime('now', new DateTimeZone('Europe/London'));

var_dump($date);


var_dump(DateTimeZone::listIdentifiers());

 ?>
