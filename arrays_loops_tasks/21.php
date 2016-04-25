<?php
$str = '';

for($i = 0; $i <= 9; $i++) {
$str .= str_repeat("$i", $i) . "\n";
}
echo $str;