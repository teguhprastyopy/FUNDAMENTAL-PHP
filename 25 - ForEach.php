<?php
$names = ["joko", "ichigo", "zorro"];

// for($i = 0; $i < count($names); $i++){
//     echo "Data ke $i = $names[$i]" . PHP_EOL;
// }

// foreach($names as $index => $name){
//     echo "Data ke $index = $name" . PHP_EOL;
// }

// foreach($names as $name){
//     echo "Data $name" . PHP_EOL;
// }

$person = [
    "1st" => "joko",
    "2nd" => "ichigo",
    "3rd" => "yusei"
];

foreach($person as $key => $value){
    echo "Data ke $key = $value" . PHP_EOL;
}
