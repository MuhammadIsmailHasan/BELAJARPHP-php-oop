<?php

class IterationGenerator
{
    function getGenapManual (int $max ) : Iterator {
        $array = [];
        for ($i=0; $i < $max; $i++) { 
            if ($i % 2 == 0) {
                array_push($array, $i);
            }
        }

        return new ArrayIterator($array);
    }
    function getGanjilWithGenerator (int $max) {
        for ($i=0; $i < $max; $i++) { 
            if ($i % 2 == 1) {
                yield $i; // ini adalah generator
            }
        }
    } // tidak perlu menulis return
}

$genap = new IterationGenerator();
foreach ($genap->getGenapManual(50) as $key => $value) {
    echo "{$key} : {$value}" . PHP_EOL;
}

echo "-----------" . PHP_EOL;

$ganjil = new IterationGenerator();
foreach ($ganjil->getGanjilWithGenerator(50) as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}