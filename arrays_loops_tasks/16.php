<?php 
$i = 0;
$str = '';

foreach(array(1, 2, 3, 4, 5, 6, 7, 8, 9) as $key => $value) { 
   if ($i >= $key) {
     $str .= "$value\n";
     $i++;
   }
}
echo $str;