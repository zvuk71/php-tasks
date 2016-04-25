<?php
$str = '';

for($i = 0; $i < 20; $i++) {
$str .= str_repeat("x", $i+1)."\n";
}
echo $str;