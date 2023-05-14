<?php

/*
    - trait sangat mirip dengan abstract class
    - trait bisa punya function, property dan bisa diwariskan ke class
    - cara manggil dengan 'use'
    - cara kerja overriding function nya | PARENT CLASS -> TRAIT -> CHILD CLASS
    
    - trait hanya bisa mewarisi dari trait lain, sama seperti interface
    - menggunakan keyword 'use'
*/

namespace Data\Traits;

trait SayGoodBy
{
    public function goodBy (string $nama) : void 
    {
        echo "Good by $nama" . PHP_EOL;
    }
}

trait SayHello 
{
    public function hello (string $nama) : void 
    {
        echo "Hello $nama" . PHP_EOL;
    }
}

trait HasNama 
{
    public string $nama;

    // untuk di overriding
    public function getNama() : void 
    {
        echo "ini dari trait" . PHP_EOL;
    }

    public function getAlamat() : void
    {
        echo "ini dari trait" . PHP_EOL;
    }
}

trait HasChildren 
{
    abstract function children(?string $child) : void;
}

trait AllTrait 
{
    // CONTOH INHERITANCE TRAIT
    use SayGoodBy, SayHello, HasNama, HasChildren {
        // bisa override visibility dari function yang ada di trait
        // private goodBy,
        // private hello,
    }
}

class ParentPerson 
{
    public function getNama() : void 
    {
        echo "ini dari parent" . PHP_EOL;
    }

    public function getAlamat() : void
    {
        echo "ini dari parent" . PHP_EOL;
    }
}
class Person extends ParentPerson
{

    use AllTrait;
    
    function children(?string $child): void
    {
        if ($child == null) 
        {
            echo "tidak punya anak" . PHP_EOL;
        } else 
        {
            echo "$this->nama punya anak yakni $child" . PHP_EOL;
        }
    }

    public function getNama() : void 
    {
        echo "ini dari person" . PHP_EOL;
    }

}