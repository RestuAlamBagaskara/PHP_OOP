<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

//Mengimoort namespace ke dalam file dengan keyword use
use Data\One\Conflict;

//mengimport fungsi
use function Helper\helpMe;

//mengimport constant
use const Helper\APPLICATION;

//inisialisasi class
$conflict1 = new Conflict();
$conflict2 = new Data\Two\Conflict();

//memanggil fungsi dari dalam class yang diimport
helpMe();

//mengakses fungsi dari dalam class yang sudah diimport
echo APPLICATION . PHP_EOL;
