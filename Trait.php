<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

//inisialisasi Person class
$person = new Person();

//menggunakan fungsi yang ada pada trait
$person->goodBye("Joko");
$person->hello("Budi");

$person->name = "Alam";
var_dump($person);

$person->run();