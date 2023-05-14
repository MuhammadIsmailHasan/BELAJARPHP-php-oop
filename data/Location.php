<?php

abstract class Location // tidak bisa dibuat object
{
    protected string $nama;
    protected int $kodePos;

    abstract function lihatLocation(int $kodePos) : void; // harus di implementasikan di child
}

class Kabupaten extends Location 
{
    function lihatLocation(int $kodePos) : void
    {
        $this->kodePos = $kodePos;
        echo $this->kodePos . PHP_EOL;       
    }
}