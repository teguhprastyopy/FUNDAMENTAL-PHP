<?php

$sayHello = function (string $name){
    echo "$name" . PHP_EOL;
};

$sayHello('joko');
$sayHello('joestar');

$sayHello = function (string $name) : string{
    return "$name";
};

var_dump($sayHello('joestar'));

function yoman(string $name, $filter){
    $finalName = $filter($name);
    echo "yoman $finalName" . PHP_EOL;
}

yoman("imam", function (string $name):string{
    return strtoupper($name);
});

$filterFunc = function (string $name):string{
    return strtoupper($name);
};

yoman('joko', $filterFunc);

$x = 'joko';
$y = 'joestar';

$xy = function () use ($x, $y){
    echo "hello $x $y" . PHP_EOL;
};
$xy();

$x = 'kira';
$y = 'yoshikage';
$xy();

$xy = function () use ($x, $y){
    echo "hello $x $y" . PHP_EOL;
};
$xy();
