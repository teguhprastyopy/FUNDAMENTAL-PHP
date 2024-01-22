<?php
$name = "joko joestar asikjuga";

echo "nama : " . $name . PHP_EOL;
echo "nilai : " . 75 . PHP_EOL;

$nilai_string = (string)75;
var_dump($nilai_string);

$nilai_int = (int)"75";
var_dump($nilai_int);

$nilai_float = (float)"7.5";
var_dump($nilai_float);

$name = 'joko';

echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;

echo "asik " . $name . ", asikjuga bro" . PHP_EOL;
echo "asik $name, asikjuga bro" . PHP_EOL;

$x = "joko";
echo "ini x {$x}" . PHP_EOL;