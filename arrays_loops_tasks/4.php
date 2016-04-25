<?php

$arr = array('green' => 'зелёный', 'red' => 'красный', 'blue' => 'голубой');

echo "<b>Ключи:</b>\n";
foreach($arr as $key => $value) {
    echo "$key\n";
}
echo "\n"; 

echo "<b>Элементы:</b>\n";
foreach($arr as $key => $value) {
    echo "$value\n";
}