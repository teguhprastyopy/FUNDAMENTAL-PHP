<?php

$first = [
    "first_name" => "joko"
];

$last = [
    "first_name" => "adit",
    "last_name" => "joestar"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "joko",
    "last_name" => "joestar",
];

$b = [
    "last_name" => "joestar",
    "first_name" => "joko"
];

var_dump($a == $b);
var_dump($a === $b);