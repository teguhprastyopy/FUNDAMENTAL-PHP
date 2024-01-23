<?php
function foo(){
    echo "foo" . PHP_EOL;
}

function bar(){
    echo "bar" . PHP_EOL;
}

$func = "foo";
$func();

$func = "bar";
$func();

function sayHello(string $name, $filter){
    $finalName = $filter($name);
    echo "yoman $finalName" . PHP_EOL;
}

function sayHello2(string $name) : string {
    return "Sample $name" ;
}

sayHello('joko', "sayHello2");
sayHello('joko', "strtoupper");
sayHello('joko', 'strtolower');