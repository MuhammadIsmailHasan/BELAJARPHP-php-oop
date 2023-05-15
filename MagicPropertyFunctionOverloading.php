<?php 

// ketika property dan function yang di akses atau di set tidak ada
// maka php tidak langsung error
// akses/set -> cek di property/function overloading -> print error

class MagicPropertyFunctionOverloadding 
{
    public array $properties = [];

    // berguna ketika mengakses property yang tidak ada
    public function __get($property) 
    {
        echo "dari __get, akses $property" . PHP_EOL;
        return $this->properties[$property];
    }

    // berguna untuk memberikan value pada property yang tidak ada
    public function __set($property, $value) 
    {
        echo "dari __set, menset $property dan value $value" . PHP_EOL;
        $this->properties[$property] = $value;
    }

    // berguna ketika coba cek isset property ysng tidak ada
    public function __isset($property) : bool
    {
        echo "dari __isset $property" . PHP_EOL;
        return isset($this->properties[$property]);
    }

    // berguna ketika coba cek unset property ysng tidak ada
    public function __unset($property) 
    {
        echo "dari __unseet $property" . PHP_EOL;
        unset($this->properties[$property]);       
    }


    // berguna ketika akses function yang tidak ada
    public function __call($namaFunction, $arguments) 
    {
        $args = join(",", $arguments);
        echo "dari __call, akses function $namaFunction, $args" . PHP_EOL;
    }

    // berguna ketika akses function yang tidak ada
    public static function __callStatic($namaFunction, $arguments) 
    {
        $args = join(",", $arguments);
        echo "dari __call, akses static function $namaFunction, $args" . PHP_EOL;
    }
}

$data = new MagicPropertyFunctionOverloadding();
$data->nama = "ismail";
$data->umur = "27";

var_dump($data->nama);
var_dump(isset($data->umur));
unset($data->umur);
var_dump($data);

$data->aksesFunction();
MagicPropertyFunctionOverloadding::aksesStatic();