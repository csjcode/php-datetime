<?php

echo time(); // unix time

echo '<br />';

echo microtime(true); // unix time as float

echo '<br />';

echo date('Y m/d H:i:s'); // basic date function

echo '<br />';

var_dump(checkdate(7, 31, 2016)); // returns true
var_dump(checkdate(7, 41, 2016)); // returns false

echo '<br />';

// var_dump(DatetimeZone::listIdentifiers());

foreach (timezone_identifiers_list() as $timezone) {
  echo $timezone . '<br>';
}

 ?>
