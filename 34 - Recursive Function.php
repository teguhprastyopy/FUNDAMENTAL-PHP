<?php

function facloop(int $value) : int {
    $total = 1;
    for ($i = 1; $i <= $value; $i++){
        $total *=$i;
    }
    return $total;
}

var_dump(facloop(5));
var_dump(1*2*3*4*5);

function facrec(int $value) : int {
    if ($value == 1) return 1;
    else return $value * facrec($value - 1);
}

var_dump(facrec(5));
var_dump(1*2*3*4*5);

function loop(int $value){
    if ($value == 0) echo 'end loop ' . PHP_EOL;
    else {
        echo "loop-$value" . PHP_EOL;
        loop($value-1);
    }
}

loop(5);