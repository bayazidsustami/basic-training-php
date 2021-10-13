<?php

require_once("../exception/ValidationException.php");

$request = new LoginRequest();
$request->username = "bay";
$request->password = " ";

ValidateUtil::validateRequest($request);