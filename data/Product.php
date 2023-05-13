<?php
/*
    default adalah public
    public, bisa diakses CLASS, SUBCLASS, LUAR CLASS
    protected, bisa diakses CLASS, SUBCLASS
    private, bisa diakses CLASS
*/

class Product {
    protected string $nama;
    private int $harga;

    public function __construct(string $nama, int $harga)
    {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    // function get property karena visibility terbatas
    public function getNama() : string 
    {
        return $this->nama;
    }

    public function getHarga() : int
    {
        return $this->harga;
    }
};

class dummyProduct extends Product 
{
    public function __construct(string $nama)
    {
        $this->nama = $nama; // dari product
    }
}