<?php

function sum(int $x, int $y) : int{
    $total = $x+$y;
    return $total;
}

$result = sum(10, 10);
var_dump($result);

$result = sum(100, 100);
var_dump($result);

function nilai(int $value) : string{
    if ($value >= 80) return 'A';
    else if ($value >= 70) return 'B';
    else if ($value >= 60) return 'C';
    else if ($value >= 50) return 'D';
    else 'E';

    // return 'mboh';
    echo 'mboh' . PHP_EOL;
}

$score = nilai(90);
var_dump($score);

$score = nilai(30);
var_dump($score);

