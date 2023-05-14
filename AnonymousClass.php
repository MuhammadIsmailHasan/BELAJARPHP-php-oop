<?php
/*
    - adalah class tanpa nama
    - biasanya digunakan oleh interface atau astract class yang sederhana
    - fungsinya untuk membuat sekaligus menginisiasi class
*/

interface SayHello 
{
    public function hello() : void;
}

$hello = new class ("ISMAIL") implements SayHello
{
    private string $nama;

    public function __construct(string $nama) 
    {
        $this->nama = $nama;
    }

    public function hello() : void 
    {
        echo "halo, $this->nama dari anontmous class yang berupa object" . PHP_EOL;
    }
};

$hello->hello();