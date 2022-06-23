<?php

class Data implements IteratorAggregate //Interface digunakan untuk iterasi secara manual
{
    var string $first = "First";
    public string $second = "Second";
    private string $third = "Third";
    protected string $forth = "Forth";

//    public function getIterator()
//    {
//        $array = [
//            "first" => $this->first,
//            "second" => $this->second,
//            "third" => $this->third,
//            "forth" => $this->forth,
//        ];
//
//        return new ArrayIterator($array);
//    }

    //Membuat iterator dengan generator dan keyword yield
    public function getIterator()
    {
        yield "first" => $this->first;
        yield "second" => $this->second;
        yield "third" => $this->third;
        yield "forth" => $this->forth;
    }
}

$data = new Data();

foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}
