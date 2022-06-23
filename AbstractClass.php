<?php

require_once "data/Location.php";

use Data\{Location, City, Province, Country};

// akan terjadi error saat mencoba inisialisasi abstract class
// $location = new Location(); ERROR

$city = new City();
$province = new Province();
$country = new Country();
