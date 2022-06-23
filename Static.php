<?php

require_once "helper/MathHelper.php";

use Helper\MathHelper;

//menggunakan properties pada MathHelper
echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "Alam Bagaskara";
echo MathHelper::$name . PHP_EOL;

//Akses fungsi dalam MathHelper
$result = MathHelper::sum(10, 10, 10, 10, 10);
echo "Result : $result" . PHP_EOL;