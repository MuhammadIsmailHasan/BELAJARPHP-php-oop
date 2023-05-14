<?php

class SosialMedia 
{
    final function getCompany() : void 
    {
        echo "final function, tidak bisa di override oleh child class-nya" . PHP_EOL;
    }
}

final class Facebook extends SosialMedia 
{
    // function getCompany() : void {} // ERROR karena final function
}

// class FakeFacebook extends Facebook {} // ERROR karena final function