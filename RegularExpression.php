<?php

$matches = [];

//Mencocokkan kata dan mengembalikan dalam bentuk integer
$result = preg_match_all("/alam|stu|adi/i", "Restu Alam", $matches);

var_dump($result);
var_dump($matches);

//Mengganti kata
$result = preg_replace("/saru|kasar/i", "***", "dasar lu saru dan KASAR!");

var_dump($result);

//Memotong berdasarkan separator didalam array [\s,-]
$result = preg_split("/[\s,-]/", "Belajar Dari,Programmer,Zaman-Now");

var_dump($result);