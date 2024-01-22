<?php

goto a;
echo "yoman" . PHP_EOL;

a:
echo "A A A" . PHP_EOL;

$counter = 1;
while(true){
    echo "counter $counter" . PHP_EOL;
    $counter++;

    if($counter>10) goto end;
}

end:
echo "end";