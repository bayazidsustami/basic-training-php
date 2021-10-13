<?php

require_once("Student.php");

$student1 = new Student();
$student1->id = "1";
$student1->name = "bay";
$student1->grade = 3;

var_dump($student1);

$student2 = clone $student1;
var_dump($student2);