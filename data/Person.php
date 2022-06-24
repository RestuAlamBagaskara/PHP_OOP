<?php
class Person
{
    
    const AUTHOR = "Kosong saja, c0pas saya";

    //Type declaration
    var string $name;

    //nullable type artinya nilai boleh menjadi null dengan menambahkan ?
    var ?string $address = null;

    //Memberikan default value pada properties
    var string $country = "Indonesia";

    //Fungsi yang akan dipanggil pertama kali saat objek di buat adalah contructor
    //Termasuk ke dalam magic function
    function __construct(string $name, ?string $address)
    {
        //$name dan $address dari Parameter
        $this->name = $name;
        $this->address = $address;
    }

    function sayHello(?string $name)
    {
        if (is_null($name)) {
            //this digunakan untuk mengakses objek saat ini
            echo "Hi, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }

    function info()
    {
        //Mengakses class dari dalam class itu sendiri dengan menggunakan self
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }

    //Fungsi yang akan dipanggil saat objek di hapus dari memori adalah destructor
    //Termasuk ke dalam magic function
    function __destruct()
    {
        echo "Object person $this->name is destroyed" . PHP_EOL;
    }
}