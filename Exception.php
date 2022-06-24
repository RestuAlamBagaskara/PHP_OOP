<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "Alam";
$loginRequest->password = "";

//Digunakan untuk menangkap exception agar program tidak terhenti karena error
try {
    //Mengecek apakah terjadi exception
    //Panggil method yang bisa menyebabkan exception
    validateLoginRequest($loginRequest);
    echo "VALID" . PHP_EOL;

    //Gunakan kode di bawah untuk lebih dari satu exception dan ingin mengembalikan pesan yag sama
} catch (ValidationException | Exception $exception) {
    //Melakukan sesuatu ketika terjadi exception
    //Bisa menggunakan lebih dari satu catch untuk pesan yang berbeda
    echo "Error : {$exception->getMessage()}" . PHP_EOL;

    //untuk melakukan debug
    var_dump($exception->getTrace());

    //Trace tapi dijadikan dalam bentuk string
    echo $exception->getTraceAsString() . PHP_EOL;
} finally {
    //Akan dieksekusi setelah Try-Catch baik terjadi exceptio maupun tidak
    echo "ERROR ATAU ENGGAK, AKAN DIEKSEKUSI" . PHP_EOL;
}


