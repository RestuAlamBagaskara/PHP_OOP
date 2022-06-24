<?php

require_once "data/Student.php";

//Instansiasi pada object pertama
$student1 = new Student();
$student1->id = "1";
$student1->name = "Alam";
$student1->value = 100;

//Instansiasi pada object kedua
$student2 = new Student();
$student2->id = "1";
$student2->name = "Alam";
$student2->value = 100;

// Membandingkan object dalam class dengan cara yang sama seperti biasa
var_dump($student1 == $student2);

//Menghasilkan false karena adalah 2 object berbeda pada lokasi memory yang berbeda
var_dump($student1 === $student2);

//True adalah object yang sama
var_dump($student1 === $student1);
