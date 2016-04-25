<?php
$alldays = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$str = '';

foreach($alldays as $n => $name) {
           if ($n == 0 || $n == 6) {
              $str .= "<b>$name</b>\n";
           } else {
              $str .= "$name\n";
           }
}
echo $str;