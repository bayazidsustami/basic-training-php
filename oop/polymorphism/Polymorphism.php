<?php

require_once("Programmer.php");
require_once("BackendProgrammer.php");
require_once("FrontendProgrammer.php");
require_once("Company.php");
require_once("FunctionArgPolymorphism.php");

$company = new Company();
$company->programmer = new Programmer("bay");
var_dump($company);
$company->programmer = new BackendProgrammer("bays");
var_dump($company);
$company->programmer = new FrontendProgrammer("buy");
var_dump($company);

sayHello(new Programmer("bay"));
sayHello(new BackendProgrammer("bays"));
sayHello(new FrontendProgrammer("buy"));