<?php

// pattern (argumen 1) diawali dengan / dan akhiri /
// i untuk incase sentitive

$matchs = [];
$tesMatch = preg_match_all("/mail|has|muh/i", "Muhamadmuh Ismail Hasan", $matchs); // return int
$tesMatchBool = (bool) preg_match_all("/mail|has|muh/i", "Muhamadmuh Ismail Hasan", $matchs); // return bool

var_dump($matchs);
var_dump($tesMatch);
var_dump($tesMatchBool);

$kata =preg_replace("/anjing|kampret/i", "***", "awas kon yo anjing, ancen kampret");
var_dump($kata);

// diawali dengan [ diakhiri dengan ]
// \s untuk space atau whitespace
// , untuk koma
// - untuk strip
$split = preg_split("/[\s,-]/", "Belajar php, di programmerzaman-now");
var_dump($split);
