<?php

class Category 
{
    private string $barang;
    private bool $kemahalan;

    public function getBarang() : string 
    {
        return $this->barang;
    }

    public function setBarang(string $barang) : void  // salah satu kegunaan setter, modifikasi pada property
    {
        if (trim($barang) != "")
        {
            $this->barang = $barang;
        }
    }

    public function isKemahalan() : bool 
    {
        return $this->kemahalan;
    }

    public function setKemahalan(bool $kemahalan) : void 
    {
        $this->kemahalan = $kemahalan;
    }
}