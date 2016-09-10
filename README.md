# PHP Date and Time class and objects
PHP Date &amp; Time examples

Sources:
* codecourse on youtube
* https://secure.php.net/manual/en/class.datetime.php
* https://secure.php.net/manual/en/function.date.php

### Setup DateTime class object

* $date = new DateTime;
* var_dump($date); // take a look at what we have

### Formatting, Getters and Setters
https://www.youtube.com/watch?v=uxERILCWzyI

* $date = new DateTime;
* $date->format('dS M Y');  Format date
* $date->getTimeStamp(); Get timestamp
* $date->getTimezone() // Get Timezone
* $date->getTimezone()->getName() // Get Timezone name
* $date = DateTime::createFromFormat('Y-m-d',$dateString); // ex. converts date from 2016-11-04
* $date->setTimeStamp('1466927122'); // include a custom timestamp (getter)
* SHORTCUT: $date = (new DateTime)->setTimeStamp('1466927122');
* $date->setDate(2016,11,16); // Set date year, month, day
* $date->setTime(2016,11,16); // Set time hour, minute, seconds

### Modifying Date
https://www.youtube.com/watch?v=67HGJfvEpkY

* $date -> add(new DateInterval('P10DT2H')); // increment date by 10 days and 2 hours
* $date -> sub(new DateInterval('P10DT2H')); // increment date by 10 days and 2 hours
* another way of doing it - $date = new DateTime('+2 days 5 hours');
* or to set from predefined date: $date->setDate(1989,11,16); $date->modify('+2 days 5 hours');
* GOTCHA - $date updates by reference so to duplicate original new Datetime use: $newDate = clone $date

### DateTime Differences
https://www.youtube.com/watch?v=W650vuIUoBI

* $myDay = (new DateTime)->setDate(2016,11,4)->setTime(10,00,00);
* echo $timeUntilMyDay->format('%m months %d days %h hours');

### DateTime Comparisons
https://www.youtube.com/watch?v=kFMtXeZGXO4

* if ((int) $date->format('Y')){




//
