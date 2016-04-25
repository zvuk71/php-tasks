<?php
$tab = '';

for($i = 1; $i <= 10; $i++) {

   for($j = 1; $j <= 10; $j++) {
       $tab .= "$i*$j=" . $i*$j . "\n";
   }
    $tab = "$tab\n";
}
echo $tab;