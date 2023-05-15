<?php

require_once __DIR__ . "/data/Student.php";

$student1 = new Student();
var_dump($student1);

// cara manual
$student3 = $student1->id;
$student3 = $student1->nama;
var_dump($student3);

$student2 = clone $student1;
var_dump($student2);

// cara kerja fungsi __clone : stedent1 -> student2 -> hapus property yg ada di __clone

