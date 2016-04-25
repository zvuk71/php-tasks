<?php
$n = 10; // quantity of array elements
$x = 1;
$a = '';

for($i = 0; $i <= $n; $i++) {
    $array[] = rand(1, 100);
}
print_r($array);

for($i = 2; $i <= $n; $i++,$i++) {
$x *= $array[$i];
}
echo "$x\n\n";

for($i = 1; $i <= $n; $i++,$i++) {
$a .= $array[$i] . "\n";
}
echo $a;

