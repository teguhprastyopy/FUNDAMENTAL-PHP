<?php

function yoman($x, $y = null){
    echo "$x $y" . PHP_EOL;
}

yoman("asik");
yoman("asik", "juga");

function sum(int $x, int $y){
    $total = $x+$y;
    echo $total . PHP_EOL;
}

sum(9,1);
sum('9','1');
sum(false, false);

function sumAll(...$val){
    $total = 0;
    foreach($val as $value){
        $total += $value;
    }
    echo "total " . implode(",", $val) . " = $total" . PHP_EOL;
}

$values = [1, 2, 3, 4, 5];

sumAll(1, 2, 3, 4, 5);
sumAll(...$values);