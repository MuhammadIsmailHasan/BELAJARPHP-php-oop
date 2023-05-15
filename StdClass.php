<?php

// digunakan untuk merubah object to array dan sebaliknya

class StdClassTes
{
    var string $nama = "muhammad";
    public int $umur = 27;

}

$object = new StdClassTes();
var_dump($object);

$toArray = (array) $object;
var_dump($toArray);

$toObject = (object) $toArray;
var_dump($toObject);


require_once __DIR__ . "/data/PersonWithConstruct.php";
$personObject = new PersonWithConstruct("ismail", 30);
var_dump($personObject);

$personArray = (array) $personObject;
var_dump($personArray);

$personStdClass = (object) $personArray;
var_dump($personStdClass);