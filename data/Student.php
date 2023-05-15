<?php

class Student 
{
    public int $id = 1;
    public string $nama = "ismail";
    private string $status = "single";

    public function setStatus(string $status) : void {
        $this->status = $status;
    }

    // salah 4 MAGIC FUNCTION
    // untuk clone sebuah object
    public function __clone() {
        unset($this->status);
    }

    // untuk merubah object ke string
    public function __toString() : string {
        return "id : $this->id, nama: $this->nama, status : $this->status" . PHP_EOL;
    }

    // untuk menjadikan class mirip variable function
    public function __invoke(...$args) {
        $argsJoin = join(",", $args);
        echo "ini dari invoke function $argsJoin" . PHP_EOL;
    }

    // untuk memodifikasi ketika debugging (var_dump)
    public function __debugInfo()
    {
        return [
            "id" => $this->id,
            "nama" => $this->nama,
            "tambahan" => "ini tambahan"
        ];
    }
     
}