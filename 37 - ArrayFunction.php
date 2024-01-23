<?php
$data = [1,2,3,4,5];

$dataresult = array_map(fn(int $value) => $value * 10, $data);
var_dump($dataresult);

rsort($data);
var_dump($data);

var_dump(array_keys($data));
var_dump(array_values($data));

$person = [
    'x' => 'joko',
    'y' => 'joestar'
];
var_dump(array_keys($person));
var_dump(array_values($person));