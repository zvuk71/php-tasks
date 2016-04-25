<?php

$arr = array ('green' =>'зелёный', 'red' => 'красный', 'blue' => 'голубой');
$i = 0;

foreach($arr as $key => $value) {
  $en [$i] = $key;
  $ru [$i] = $value;
  $i++;
}
print_r($en);
echo "\n";
print_r($ru);