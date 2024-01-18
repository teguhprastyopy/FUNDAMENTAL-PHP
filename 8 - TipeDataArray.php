<?php
// $values = array(10, 9, 8, 7.5);
// var_dump($values);

// $names = ["joko", "joestar", "asikjuga"];
// var_dump($names);

// var_dump($names[0]);

// $names[0] = "speedwagon";
// var_dump($names);

// unset($names[1]);
// var_dump($names);

// $names[] = "joko";
// var_dump($names);

// var_dump(count($names));

$joko = array(
    "id" => "joko",
    "name" => "joko joestar",
    "age" => 32,
    "alamat" => array(
        "kota" => "kepanjen",
        "country" => "swiss"
    )
);
var_dump($joko);

var_dump($joko["name"]);
var_dump($joko["alamat"]["country"]);

$speedwagon = [
    "id" => "speedwagon",
    "name" => "speedwagon lajubetdah",
    "age" => 45,
    "alamat" => [
        "kota" => "sukamara",
        "country" => "denmark"
    ]
];
var_dump($speedwagon);