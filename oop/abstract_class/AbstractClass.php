<?php

require_once("Location.php");
require_once("City.php");

//$location = new Location(); cannot instantiate
$city = new City();
$city->fetchLocation();
$city->pushLocation();