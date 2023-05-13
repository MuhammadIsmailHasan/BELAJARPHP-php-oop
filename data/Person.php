<?php

/*
class adalah blueprint dari object
1 class bisa di inisiasi ke banyak object
class terdiri dari : properties & function
*/

class Person {  
    const AUTHOR = "Muhammad Ismail";

    var $nama; // properties harus ada 'var' 
    var ?string $alamat = null; // type declaration (null)
    var int $umur; // type declaration (without default value)
    var string $country = "Indonesia"; // type declaration (not null)

    function sayHello (?string $nama) {
        if ($nama == null) {
            echo "Hai $this->nama(dari object)" . PHP_EOL;
        } else {
            echo "Hai $nama (dari args), ini $this->nama (dari object)" . PHP_EOL;
        }
    }

    function info () {
        echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
        /* 
        jika this untuk akses properties dalam 1 class 
        self akses constant dalam 1 class
        */
    }
}