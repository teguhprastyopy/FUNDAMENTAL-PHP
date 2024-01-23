<?php

// $name = "joko";

// function yoman(){
//     global $name;
//     echo $name . PHP_EOL;

//     echo $GLOBALS["name"] . PHP_EOL;
// }

// yoman();

// function nama(){
//     $name = "joko";
// }

// nama();
// echo $name . PHP_EOL;

function plusplus(){
    static $n = 1;
    echo "n = $n" . PHP_EOL;
    $n++;
}

plusplus();
plusplus();
plusplus();