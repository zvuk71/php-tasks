<?php
$str = '';

for($i = 0; $i <= 5; $i++) {
$str .= str_repeat("x", $i*2) . "\n";
}
echo $str;
