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
        $this->nama = strtoupper($nama);
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
    // konsep kurang benar
    // ketika overriding constuct harus manggil parentnya
    // menghindari terlewat jika ada kondisi yg wajib di run di parent
    public function __construct(string $nama)
    {
        $this->nama = $nama; 
        // this->nama dari product, tapi tidak manggil construct product
    }
}

class overridingProduct extends Product
{
    // konsep overriding construct
    // arg boleh beda, tapi disarankan manggil parent
    // tidak wajib tapi disarankan
    public function __construct(string $nama)
    {
        echo "Ini construct overriding product : " . parent::__construct($nama, 10);
    }
}