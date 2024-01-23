<?php

$name = 'joko';
$name2 = &$name;
$name2 = "joestar";

echo $name . PHP_EOL;

function plusplus(int &$value){
    $value++;
}

$n = 1;
plusplus($n);
plusplus($n);

echo $n . PHP_EOL;

function &getvalue(){
    static $value = 100;
    return $value;
}

$a = &getvalue();
$a = 200;

$b = &getvalue();
echo $b  .PHP_EOL;