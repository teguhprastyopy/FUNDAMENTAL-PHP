<?php
for ($i = 1; $i <= 5; $i++){
    echo "1st loop ke-$i" . PHP_EOL;
}

echo "\n";

for ($i = 5; $i >= 1; $i--){
    echo "2nd loop ke-$i" . PHP_EOL;
}

echo "\n";

for ($i = 1; $i <= 5; $i++):
    echo "3rd loop ke-$i" . PHP_EOL;
endfor;

echo "\n";

for ($i = 5; $i >= 1; $i--):
    echo "5th loop ke-$i" . PHP_EOL;
endfor;