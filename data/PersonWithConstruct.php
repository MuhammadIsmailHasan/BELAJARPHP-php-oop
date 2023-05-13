<?php

class PersonWithConstruct {
    const AUTHOR = "Muhammad Ismail";
    
    public string $nama;
    public ?int $umur;

    public function __construct(string $nama, ?int $umur)
    {
        $this->nama = $nama;
        $this->umur = $umur;
    }

    function getNama() {
        echo "nama : $this->nama" . PHP_EOL;
    }

    function info () {
        echo "AUTHOR : " . self::AUTHOR . PHP_EOL; 
    }

    function __destruct()
    {
        echo "Object $this->nama dihapus" . PHP_EOL;
    }
}