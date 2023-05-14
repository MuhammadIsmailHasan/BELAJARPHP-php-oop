<?php

trait ContohA 
{
    function doA() : void
    {
        echo "contoh A-a" . PHP_EOL; 
    }
    function doB() : void
    {
        echo "contoh A-b" . PHP_EOL; 
    }
}

trait ContohB
{
    function doA() : void
    {
        echo "contoh B-a" . PHP_EOL; 
    }
    function doB() : void
    {
        echo "contoh B-b" . PHP_EOL; 
    }
}

class SolusiTraitConflict 
{
    use ContohA, ContohB 
    {
        ContohA::doA insteadof ContohB;
        ContohB::doB insteadof ContohA;
    }
}

$solusi = new SolusiTraitConflict();
$solusi->doA();
$solusi->doB();