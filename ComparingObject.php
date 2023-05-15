<?php

require_once __DIR__ . "/data/Student.php";

$student1 = new Student();
$student1->id = 15;
$student1->nama = "nabila";

$student2 = new Student();
$student2->id = 15;
$student2->nama = "nabila";

$student3 = new Student();
$student3->id = 200;
$student3->nama = "nabila";

var_dump(($student1 == $student3)); // compare, cek object sekaligus property yang ada di dalamnya
var_dump(($student1 == $student2));
var_dump(($student1 === $student2)); // identity, cek apakah object sama