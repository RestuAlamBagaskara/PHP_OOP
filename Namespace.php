<?php

//Bagus digunakan ketika punya beberapa class yang sama
//global namespace
namespace {

    require_once "data/Conflict.php";

    //mengakses fungsi dan constant dari namespace
    require_once "data/Helper.php";

    //Membuat object dari namespace dengan keyword new namespace
    $conflict1 = new Data\One\Conflict();
    $conflict2 = new Data\Two\Conflict();

    //akses constant dari namespace Helper
    echo Helper\APPLICATION . PHP_EOL;

    //akses fungsi dari namespace Helper
    Helper\helpMe();

}