<?php

class Student
{
    public string $id;
    public string $name;
    public int $value;
    public string $sample;

    public function setSample(string $sample): void
    {
        $this->sample = $sample;
    }

    //Melakukan modifikasi pada object
    //Termasuk ke dalam MAgic function
    public function __clone()
    {
        unset($this->sample);
    }

    //Termasuk ke dalam magic function
    //Mengubah object menjadi string
    public function __toString(): string
    {
        return "Student id:$this->id, name:$this->name, value:$this->value";
    }

    //Termasuk ke dalam magic function
    //Dieksekusi ketika object yang kita buat dianggap sebagai fungsi
    public function __invoke(...$arguments): void
    {
        $join = join(",", $arguments);
        echo "Invoke student with arguments $join" . PHP_EOL;
    }

    //Termasuk ke dalam magic function
    //Mengoverride data kembalian pada var_dump()
    public function __debugInfo()
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "sample" => $this->sample,
        ];
    }
}
