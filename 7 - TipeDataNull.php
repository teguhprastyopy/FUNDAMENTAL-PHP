<?php
$name = "joko";
$name = null;

$age = null;

echo "name : ";
echo $name;
echo "\n";

echo "age : ";
echo $age;
echo "\n";

echo "is name null? : ";
var_dump(is_null($name));
echo "\n";

$contoh = "joko";

echo "1st isset? : ";
var_dump(isset($contoh));

unset($contoh);

echo "2nd isset? : ";
var_dump(isset($contoh));

echo "is_null? : ";
var_dump(is_null($contoh));