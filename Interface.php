<?php

require_once "data/Car.php";
use Data\{Avanza};

$car = new Avanza();

//menggunakan fungsi yang ada pada interface yang sudah di override
$car->drive();
