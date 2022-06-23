<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

//Mengimport class satu persatu secara manual
// use Data\One\Conflict as Conflict1;
// use Data\One\Dummy;
// use Data\One\Sample;


//mengimport class ke dalam file secara bersamaan dalam satu use
use Data\One\{Conflict as Conflict1, Dummy, Sample};

//mengimport fungsi dari class Helper secara bersamaan
use function Helper\{helpMe};

//inisialisasi class yang diimport
$conflict = new Conflict1();
$dummy = new Dummy();
$sample = new Sample();