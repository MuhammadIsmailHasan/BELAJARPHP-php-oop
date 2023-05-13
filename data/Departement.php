<?php

class Manajer {
    var string $nama;

    public function __construct(string $nama)
    {
        $this->nama = $nama;
    }

    function sayHello (?string $nama) : void {
        if ($nama == null) {
            echo "Hai $this->nama(dari object)" . PHP_EOL;
        } else {
            echo "Hai $nama (dari args), ini $this->nama (dari object)" . PHP_EOL;
        }
    }
}

class Staff extends Manajer {

}