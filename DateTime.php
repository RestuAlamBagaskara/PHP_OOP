<?php

//Digunakan untuk manipulasi data wakti
//Menetapkan ke waktu saat ini
$dateTime = new DateTime();

//Mengatur tanggal
$dateTime->setDate(2002, 1, 20);//($tahun, $bulan, $hari)

//Mengatur waktu
$dateTime->setTime(10, 10, 10, 0); //($jam, $menit, $second)

//Menambahkan tanggal
$dateTime->add(new DateInterval("P1Y"));

//Mengurangi tanggal
$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;
$dateTime->add($minusOneMonth);

var_dump($dateTime);


$now = new DateTime();
var_dump($now);

//Mengubah timeZone kita saat ini
$now->setTimezone(new DateTimeZone("Asia/Jakarta"));
var_dump($now);

//Menampilkan tanggal sesuai format yang ditetapkan
$string = $now->format("Y-m-d H:i:s");
echo "Waktu Saat Ini : $string" . PHP_EOL;

//Merubah string menjadi DateTime sesuai dengan format
$date = DateTime::createFromFormat("Y-m-d H:i:s", "2020-10-10 10:10:10", new DateTimeZone("Asia/Jakarta"));
if ($date) {
    var_dump($date);
} else {
    echo "Format Salah" . PHP_EOL;
}