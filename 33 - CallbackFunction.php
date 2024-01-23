<?php

function hello(string $name, callable $filter){
    $final = call_user_func($filter, $name);
    echo "hello $final" . PHP_EOL;
}

hello('joko', 'strtoupper');
hello('joko', 'strtolower');
hello('joko', function (string $name) : string {
    return strtoupper($name);
});
hello("joko", fn($name) => strtoupper($name));