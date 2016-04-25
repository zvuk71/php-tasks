<?php
$seasons = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
$month = 'February';
$str = '';

foreach($seasons as $name) {
      if($name == $month) {
           $str .= "<b>$month</b>\n";
      } else {
                  $str .= "$name\n";
      }
}
echo $str;