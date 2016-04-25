<?php
$alldays = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$day = 'Friday';
$str = '';

foreach($alldays as $name) {
                if ($name == $day) {
                $str .= "<i>$name</i>\n";
                } else {
                  $str .= "$name\n";
                }
}
echo $str;