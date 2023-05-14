<?php

/*
    - property dan function yang meliliki 'static' tidak bisa di inisiasi sebagai objek
    - mengaksesnya langsung nempel di class, mirip seperti constant
    - bedanya dg constant, biasanya 'static' property/function digunakan sbg utilty atau helper
*/

class MathHelper 
{
    public static int $angka;

    public static function helperSum (int ...$numbers) : int 
    {
        $total = 0;
        foreach ($numbers as $number) {
            $total += $number;
        }
        return $total;
    }
}