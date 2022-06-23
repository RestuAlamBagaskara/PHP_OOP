<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

//melakukan import dengan menambahkan alias untuk nama import dengan cara menuliskan as [namaAlias]
use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Conflict2;
use function Helper\helpMe as help;
use const Helper\APPLICATION as APP;

//inisialisasi class dengan nama alias
$conflict1 = new Conflict1();
$conflict2 = new Conflict2();

//memanggil fungsi dari class yang diimport dengan nama alias
help();


//mengakses nama constant dari class yang diimport dengan nama alias
echo APP . PHP_EOL;
