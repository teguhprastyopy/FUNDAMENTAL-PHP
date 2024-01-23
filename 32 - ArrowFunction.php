<?php

$x = 'joko';
$y = 'joestar';

$anfunc = function () use ($x, $y) : string {
    return "yoman $x $y" . PHP_EOL;
};

$arfunc = fn () => "yoman $x $y" . PHP_EOL;

echo $anfunc();
echo $arfunc();