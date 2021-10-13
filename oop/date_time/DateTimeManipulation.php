<?php

$date = new DateTime();
$date->setDate(2012, 3, 23);
$date->setTime(10, 30, 20);

$date->add(new DateInterval("P1Y"));

$dateInterval = new DateInterval("P1M");
$dateInterval->invert = 1; // minus one month;
$date->add($dateInterval);

$date->setTimezone(new DateTimeZone("Asia/Jakarta"));

echo $date->format("Y-m-d H:i:s") . PHP_EOL;

$newDate = DateTime::createFromFormat("Y-m-d H:i:s", "2021-03-23 10:21:23", new DateTimeZone("Asia/Jakarta"));
var_dump($newDate);