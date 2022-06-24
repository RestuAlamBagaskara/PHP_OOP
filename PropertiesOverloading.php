<?php

class Zero
{
    private array $properties = [];

    //Digunakaan untuk membuat properties secara dinamis
    //Digunakan untuk mengakses properties jika Tidak ada
    public function __get($name)
    {
        return $this->properties[$name];
    }

    //Digunakan untuk mengeset properties yang tidak tersedia
    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    //Mengecek isset() properties yang tidak tersedia
    public function __isset($name): bool
    {
        return isset($this->properties[$name]);
    }

    //Menggunakan unset pada properties yang tidak tersedia
    public function __unset($name)
    {
        unset($this->properties[$name]);
    }


    //Membuat function secara dinamis
    //Dieksekusi ketika memanggil fungsi yang tidak tersedia
    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call function $name with arguments $join". PHP_EOL;
    }

    //Dieksekusi ketika memanggil fungsi static yang tidak tersedia
    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call static function $name with arguments $join". PHP_EOL;
    }

}

$zero = new Zero();

//Mengeksekusi __set()
$zero->firstName = "Restu";
$zero->middleName = "Alam";
$zero->lastName = "bagaskara";

//Mengeksekusi __get()
echo "First Name : $zero->firstName" . PHP_EOL;
echo "Middle Name : $zero->middleName" . PHP_EOL;
echo "Last Name : $zero->lastName" . PHP_EOL;

//Mengeksekusi __call()
$zero->sayHello("Alam", "Bagaskara");

//Mengeksekusi __callStatic()
Zero::sayHello("Restu", "Bagaskara");