<?php
$i = 1;
while($i <= 5){
    echo "1st loop $i" . PHP_EOL;
    $i++;
}

$i = 1;
while($i <= 5):
    echo "1st loop $i" . PHP_EOL;
    $i++;
endwhile;