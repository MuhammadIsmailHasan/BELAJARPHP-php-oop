<?php

require_once __DIR__ . "/data/Student.php";

$student1 = new Student();
$student1->id = 15;
$student1->nama = "nabila";

$stringObject = (string) $student1; // ERROR jika tidak ada function __toString()
echo $stringObject;

$student1("nabila", "bila", "ismail", "mail"); // ERROR jika tidak ada function __invoke()

var_dump($student1); // melihat hasil modifikasi debug di function __debugInfo

