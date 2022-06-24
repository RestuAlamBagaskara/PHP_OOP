<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Restu";
$student1->value = 100;

//Bisa dijalankan karena ada function __invoke pada Student.php
$student1(1, "Alam", true, "bagaskara");
