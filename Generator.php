<?php

function getGenap(int $max): Iterator
{
    $array = [];
    for ($i = 1; $i <= $max; $i++) {
        if ($i % 2 == 0) {
            $array[] = $i;
        }
    }
    //Menggunakan cara ArrayIterator
    return new ArrayIterator($array);
}

foreach (getGenap(100) as $value) {
    echo "Genap : $value" . PHP_EOL;
}

function getGanjil(int $max): Iterator
{
    for ($i = 1; $i <= $max; $i++) {
        if ($i % 2 == 1) {
            //Menggunakan yield untuk membuat iterator
            yield $i;
        }
    }
}

foreach (getGanjil(100) as $value) {
    echo "Ganjil : $value" . PHP_EOL;
}